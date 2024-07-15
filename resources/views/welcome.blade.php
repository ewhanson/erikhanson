<x-layout>
    <x:slot:title>
        Erik Hanson
    </x:slot:title>

    <main class="w-full px-8 pt-8">
        <article class="max-w-3xl mx-auto">
            <h2 class="text-xl">About me</h2>
            <h1 class="text-4xl font-bold pb-16">Welcome! My name is Erik. 👋</h1>

            <div class="flex flex-col gap-4">
                <p class="text-lg">I am a software developer 💻 from Vancouver, Canada. 🇨🇦</p>
                <p class="text-lg">I have a background in library/information studies and publishing. 📚</p>
                <p class="text-lg">I am a passionate tinkerer 🧰, forest explorer 🌲, synth dabbler 🎹, tot father. 👶</p>
                <p class="text-lg">I am a big fan of <a class="underline hover:decoration-2" target="_blank" href="https://www.robinsloan.com/notes/home-cooked-app/">home-cooked apps</a>—I've even made <a class="underline hover:decoration-2" href="{{ route('projects') . '#babygramz' }}">a</a> <a class="underline hover:decoration-2" href="{{ route('projects') . '#smolevents' }}">few</a>!</p>
                <p class="text-lg">Want to see more? Check out some of my <a class="underline hover:decoration-2" href="{{ route('projects') }}">projects</a> or my <a class="underline hover:decoration-2" href="{{ route('resume') }}">resume</a>.</p>
            </div>
        </article>
    </main>
</x-layout>
