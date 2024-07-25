<?php

namespace App\Console\Commands;

use App\Models\Blob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use LINE\Clients\MessagingApi\Model\PushMessageRequest;
use LINE\Clients\MessagingApi\Model\TextMessage;
use LINE\Laravel\Facades\LINEMessagingApi;

class CheckAqhi extends Command
{
    const BLOB_KEY = 'aqhi';
    private string $url = 'https://api.weather.gc.ca/collections/aqhi-observations-realtime/items?f=json&lang=en-CA&limit=10&properties=aqhi,aqhi_type,id,latest,location_id,location_name_en,observation_datetime,observation_datetime_text_en&skipGeometry=true&latest=true&location_id=JBRIK';
    private ?array $currentAqhiData = null;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-aqhi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks AQHI for Vancouver NW and send Line notification is above 3.5';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $hasUpdates = $this->checkForUpdates();
        if (!$hasUpdates) {
            return;
        }

        try {
            $text = 'Current AQHI: ' . $this->currentAqhiData['aqhi'] . '. Observed at ' . $this->currentAqhiData['observation_datetime_text_en'] . '.';
            $messageRequest = $this->getMessageRequest($text);
            LINEMessagingApi::pushMessage($messageRequest);
        } catch (\Exception $e) {
            Log::error('Failed to send LINE message: ' . $e->getMessage());
        }
    }

    private function getAirQuality(): array
    {
        $json = Http::get($this->url)->json();
        return $json['features'][0]['properties'];
    }

    private function checkForUpdates(): bool
    {
        try {
            $this->currentAqhiData = $this->getAirQuality();
            $previousResults = Blob::where('key', '=', self::BLOB_KEY)->first();

            if ($previousResults === null) {
                Blob::updateOrCreate(
                    ['key' => self::BLOB_KEY],
                    ['value' => $this->currentAqhiData]
                );
                return true;
            }

            if (
                $this->currentAqhiData['observation_datetime'] !== $previousResults['value']['observation_datetime']
                && $this->currentAqhiData['aqhi'] >= 3.5
            ) {
                Blob::updateOrCreate(
                    ['key' => self::BLOB_KEY],
                    ['value' => $this->currentAqhiData]
                );
                return true;
            }

            return false;
        } catch (\Exception $e) {
            Log::error('Failed to get AQHI: ' . $e->getMessage());
            return false;
        }
    }

    private function getMessageRequest(string $text): PushMessageRequest
    {
        $message = new TextMessage(['type' => 'text', 'text' => $text]);
        return new PushMessageRequest(['to' => config('line-bot.user_id'), 'messages' => [$message]]);
    }
}
