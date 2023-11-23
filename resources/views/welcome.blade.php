<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LeafedFox</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=nova-mono:400" rel="stylesheet" />
    @vite('resources/css/app.css')
    <!-- Social sharing meta -->
    <meta property="og:url" content="https://leafedfox.xyz" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="LeafedFox" />
    <meta property="og:description" content="Hi, I'm LeafedFox. I live in Visual Studio Code and iTerm." />
    <meta property="og:image" content="https://leafedfox.xyz/images/leafedfox.png" />
</head>
<body class="min-h-screen bg-gradient-to-b from-white to-gray-100 dark:bg-zinc-700 dark:from-zinc-700 dark:to-zinc-800 font-mono">
    <div class="container py-8">
        <header class="px-4">
            <div class="flex justify-between items-center">
                <h1 class="my-4 text-4xl md:text-7xl dark:text-white">LeafedFox</h1>
                <img id="profile-image" class="h-32 w-32 rounded-full animate-pulse" src="data:image/png;base64,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" alt="Discord Avatar">
            </div>
            <p class="my-4 w-100 flex justify-evenly dark:text-white">
                <span>🏳️‍🌈🏳️‍⚧️</span>
                <span>Developer</span>
                <span>Gamer</span>
            </p>
        </header>
        <hr class="my-4">
        <main class="px-4 dark:text-white">
            <p class="text-center">Hi, I'm <strong class="font-bold">LeafedFox</strong> &lbrack;she/her&rbrack;. I live in @component('components.link', ['href'=>'https://vs.code', 'target' => '_blank'])Visual Studio Code @endcomponent and @component('components.link', ['href'=>'https://iterm2.com/', 'target'=>'_blank'])iTerm @endcomponent.</p>
            <h2 class="text-3xl mt-4">Languages</h2>
            <div class="grid grid-cols-2 md:grid-cols-3">
                @component('components.skill', ['name' => 'HTML', 'percentage' => 100])@endcomponent
                @component('components.skill', ['name' => 'CSS', 'percentage' => 95])@endcomponent
                @component('components.skill', ['name' => 'PHP', 'percentage' => 90])@endcomponent
                @component('components.skill', ['name' => 'JavaScript', 'percentage' => 50])@endcomponent
            </div>
            <h2 class="text-3xl mt-4">Frameworks</h2>
            <div class="grid grid-cols-2 md:grid-cols-3">
                @component('components.skill', ['name' => 'Laravel', 'percentage' => 95])@endcomponent
                @component('components.skill', ['name' => 'Drupal 8', 'percentage' => 30])@endcomponent
            </div>
            <div class="mt-8">
                <div class="h-6 bg-zinc-600 rounded-t-lg flex px-1 items-center gap-1 justify-start relative">
                    <div class="ml-2 h-3 w-3 bg-red-500 rounded-full"></div>
                    <div class="h-3 w-3 bg-yellow-500 rounded-full"></div>
                    <div class="h-3 w-3 bg-green-500 rounded-full"></div>
                    <p class="text-xs text-zinc-50 justify-self-center absolute left-1/2 -translate-x-1/2">Console</p>
                </div>
                <div class="bg-zinc-900 border-zinc-800 text-white rounded-b-lg p-4 pb-8">
                    <code>
                        <span class="text-gray-500">&lbrack;20/11/2023&rbrack;</span> &gt; This website is still a work in progress...
                    </code>
                </div>
            </div>
        </main>
    </div>
    @vite(['resources/js/app.js', 'resources/js/home.js'])
</body>
</html>