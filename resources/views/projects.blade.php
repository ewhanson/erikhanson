<x-layout>
    <x:slot:title>
        Erik Hanson - Projects
    </x:slot:title>

    <x-navbar />

    <main class="w-full p-8">
        <article class="max-w-3xl mx-auto prose">
            <h1 id="projects">
                <a aria-hidden="true" tabindex="-1" href="#projects" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Projects
            </h1>
            <p>TL;DR - Personal projects live and in production <a href="#babygramz">below</a> 👇</p>
            <p>
                Thanks for checking out some of my projects. I've started many projects, some with Big Plans<sup><small>TM</small></sup>, others to simply
                satisfy a curiosity. I've explored game development at a hobby level using the lovely <a href="https://www.lexaloffle.com/pico-8.php" target="_blank">PICO 8</a> fantasy console,
                explored music through subtractive synthesis software instruments and frequency modulation hardware synthesizers
                (the audio of which I'll spare you for the time being!), and dabbled in many different programming languages
                (web apps in PHP, Javascript, and Go, game development in Lua and Rust, CLIs in pretty much all of the above).
            </p>
            <p>Below are some of my favourite/most useful projects I've worked on that are up and running today.</p>

            <h2 id="babygramz">
                <a aria-hidden="true" tabindex="-1" href="#babygramz" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Babygramz
            </h2>
            <p>
                <a href="https://github.com/ewhanson/bbdb" target="_blank">Babygramz</a> is a digital scrapbook for sharing
                photos with friends and family. It enables the creation of a password-protected photo feed with the ethos
                of a physical scrapbook and feel of a modern social media app. It currently also maintains original quality
                copies of all photos posted for preservation purposes while serving up web-optimized images.
            </p>
            <p><img src="images/babygramz.png" alt="Screenshot of Babygramz project"/></p>

            <h3 id="babygramz-features">
                <a aria-hidden="true" tabindex="-1" href="#babygramz-features" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Features
            </h3>
            <ul>
                <li>Extracts exif metadata to automatically include date/time photo was taken</li>
                <li>Stores the photos in multiple resolutions (original quality vs web-optimized) to balance site performance and preservation aspects of the project.</li>
                <li>Supports subscriber notification via email when new photos are available</li>
                <li>Makes friends and family happy with cute baby photos</li>
            </ul>

            <h3 id="babygramz-techstack">
                <a aria-hidden="true" tabindex="-1" href="#babygramz-techstack" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Tech stack
            </h3>
            <ul>
                <li>(Mostly) TALL stack</li>
                <ul>
                    <li><a href="https://laravel.com/" target="_blank">Laravel</a></li>
                    <li><a href="https://livewire.laravel.com/" target="_blank">Livewire</a></li>
                    <li><a href="https://tailwindcss.com" target="_blank">Tailwind</a> & <a href="https://daisyui.com/" target="_blank">DaisyUI</a></li>
                </ul>
                <li><a href="https://filamentphp.com/" target="_blank">Filament</a> for data management</li>
                <li><a href="https://postmarkapp.com/" target="_blank">Postmark</a> for email</li>
                <li><a href="https://forge.laravel.com/" target="_blank">Laravel Forge</a> for hosting</li>
            </ul>

            <h3 id="babygramz-funfacts">
                <a aria-hidden="true" tabindex="-1" href="#babygramz-funfacts" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Fun Facts
            </h3>
            <p>
                Babygramz was originally written using a customized instance of <a href="https://pocketbase.io/" target="_blank">Pocketbase</a> and <a href="https://preactjs.com/" target="_blank">Preact</a> as a way to explore
                programming in Go and building an app in Preact/React, and writing end-to-end tests using <a href="https://playwright.dev/" target="_blank">Playwright</a>.
                The entire Preact front-end was bundled inside of the Pocketbase app as part of the Go executable, so the
                Go-based backend and Preact-based frontend were able to be run as a single executable. Pretty neat!
            </p>

            <h2 id="smolevents">
                <a aria-hidden="true" tabindex="-1" href="#smolevents" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Smol Events
            </h2>
            <p>
                <a href="https://github.com/ewhanson/smolevents" target="_blank">Smol Events</a> is an event management platform for sending email invitations and collecting RSVPs.
                Perfect for your next birthday bash!
            </p>
            <p><img src="images/smolevents.png" alt="Smol Events homepage"></p>
            <p><img src="images/smolevents_invite.png" alt="Smol Events event invite page"></p>

            <h3 id="smolevents-features">
                <a aria-hidden="true" tabindex="-1" href="#smolevents-features" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Features
            </h3>
            <ul>
                <li>Organize event invitations</li>
                <li>Track invitation status, attendee count, and comments</li>
                <li>Send email invitations and email reminders</li>
            </ul>

            <h3 id="smolevents-techstack">
                <a aria-hidden="true" tabindex="-1" href="#smolevents-techstack" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Tech stack
            </h3>
            <ul>
                <li><a href="https://laravel.com/" target="_blank">Laravel</a></li>
                <li><a href="https://livewire.laravel.com/" target="_blank">Livewire</a></li>
                <li><a href="https://picocss.com/" target="_blank">Pico CSS</a></li>
                <li><a href="https://filamentphp.com/" target="_blank">Filament</a> for data management</li>
                <li><a href="https://postmarkapp.com/" target="_blank">Postmark</a> for email</li>
                <li><a href="https://forge.laravel.com/" target="_blank">Laravel Forge</a> for hosting</li>
            </ul>

            <h3 id="smolevents-funfacts">
                <a aria-hidden="true" tabindex="-1" href="#smolevents-funfacts" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Fun Facts
            </h3>
            <p>Event planning and management can be more fun when you create te event platform yourself!</p>

            <h2 id="aqhi-notification-bot">
                <a aria-hidden="true" tabindex="-1" href="#aqhi-notification-bot" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Air Quality Health Index (AQHI) notification bot
            </h2>
            <p>
                A LINE bot that sends notifications whenever the <a href="https://www2.gov.bc.ca/gov/content/environment/air-land-water/air/air-quality/aqhi" target="_blank">AQHI index</a> for my area exceeds 3.5 so I can passively
                track the local air quality during wildfire season.
            </p>
            <p class="flex max-w-sm mx-auto">
                <img class="" src="images/aqhi_bot.jpg" alt="Screenshot of AQHI LINE bot notifications">
            </p>

            <h3 id="aqhi-features">
                <a aria-hidden="true" tabindex="-1" href="#aqhi-features" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Features
            </h3>
            <ul>
                <li>Checks for AQHI updates from the <a href="https://api.weather.gc.ca/" target="_blank">Environment Canada API</a> every 10 minutes</li>
                <li>Send LINE notifications when AQHI exceeds a specified threshold</li>
                <li>Only sends notifications during day time hours</li>
            </ul>

            <h3 id="aqhi-techstack">
                <a aria-hidden="true" tabindex="-1" href="#aqhi-techstack" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Tech stack
            </h3>
            <ul>
                <li><a href="https://github.com/line/line-bot-sdk-nodejs" target="_blank">LINE Node SDK</a></li>
                <li><a href="https://pm2.keymetrics.io/" target="_blank">PM2</a> for deployment</li>
            </ul>

            <h3 id="aqhi-funfacts">
                <a aria-hidden="true" tabindex="-1" href="#aqhi-funfacts" class="no-underline">
                    <span class="opacity-20 hover:opacity-60 text-base font-bold inline-block align-middle relative -mt-1">#</span>
                </a>
                Fun Facts
            </h3>
            <p>I'm planning on rewriting this notification bot in PHP as a scheduled command as part of this Laravel app!</p>
        </article>
    </main>
</x-layout>
