<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LunaInventory')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-100 text-slate-900">

<div class="flex min-h-screen">

    <aside class="w-72 bg-slate-950 text-white hidden md:flex flex-col">

        <div class="p-6 border-b border-slate-800">
            <div class="flex items-center gap-3">
                <div class="h-11 w-11 rounded-2xl bg-blue-600 flex items-center justify-center font-bold text-xl">
                    L
                </div>
                <div>
                    <div class="text-xl font-bold tracking-tight">
                        LunaInventory
                    </div>
                    <div class="text-xs text-slate-400">
                        Infrastructure Manager
                    </div>
                </div>
            </div>
        </div>

        <nav class="flex-1 p-4 space-y-2">

            <a href="/" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold bg-blue-600 text-white shadow-lg shadow-blue-900/30">
                <span>🏠</span>
                Dashboard
            </a>

            <a href="/computers" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-slate-300 hover:bg-slate-800 hover:text-white transition">
                <span>💻</span>
                Computers
            </a>

            <a href="/computers/create" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-slate-300 hover:bg-slate-800 hover:text-white transition">
                <span>➕</span>
                Add Computer
            </a>

            <a href="#" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-slate-500 cursor-not-allowed">
                <span>👥</span>
                Employees
            </a>

            <a href="#" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-slate-500 cursor-not-allowed">
                <span>🔑</span>
                Licenses
            </a>

            <a href="#" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-slate-500 cursor-not-allowed">
                <span>📡</span>
                Discovery
            </a>

        </nav>

        <div class="p-4 border-t border-slate-800">
            <div class="rounded-2xl bg-slate-900 p-4">
                <div class="text-xs text-slate-400 mb-3">Lab Stack</div>

                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-slate-300">Laravel</span>
                        <span class="text-green-400">Online</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-slate-300">Docker</span>
                        <span class="text-green-400">Running</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-slate-300">MySQL</span>
                        <span class="text-green-400">Connected</span>
                    </div>
                </div>
            </div>
        </div>

    </aside>

    <main class="flex-1">

        <header class="h-20 bg-white border-b border-slate-200 px-8 flex items-center justify-between">

            <div>
                <h1 class="text-2xl font-bold tracking-tight">
                    @yield('page-title', 'Dashboard')
                </h1>
                <p class="text-sm text-slate-500">
                    Manage your lab infrastructure from one place.
                </p>
            </div>

            <div class="flex items-center gap-4">
                <div class="hidden sm:block text-right">
                    <div class="text-sm font-semibold">Jorge Luna</div>
                    <div class="text-xs text-slate-500">Administrator</div>
                </div>

                <div class="h-11 w-11 rounded-full bg-slate-900 text-white flex items-center justify-center font-bold">
                    JL
                </div>
            </div>

        </header>

        <section class="p-8">
            @yield('content')
        </section>

    </main>

</div>

</body>
</html>