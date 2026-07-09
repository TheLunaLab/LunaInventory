@extends('layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')

<div class="space-y-8">

    <div class="rounded-3xl bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700 p-8 text-white shadow-xl">

        <div class="flex items-center justify-between">

            <div>

                <p class="text-blue-100 uppercase tracking-[0.25em] text-sm font-semibold">
                    Welcome Back
                </p>

                <h1 class="mt-3 text-4xl font-bold">
                    MyLunaLab
                </h1>

                <p class="mt-4 max-w-2xl text-blue-100 text-lg">
                    Monitor and manage your virtual infrastructure from one dashboard.
                </p>

            </div>

            <div class="hidden lg:flex h-28 w-28 items-center justify-center rounded-3xl bg-white/10 text-6xl backdrop-blur-sm">
                💻
            </div>

        </div>

    </div>


    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">

        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-xl">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm font-semibold text-slate-500 uppercase">
                        Computers
                    </p>

                    <h2 class="mt-4 text-5xl font-bold text-slate-900">
                        {{ $computerCount }}
                    </h2>

                    <p class="mt-3 text-sm text-slate-500">
                        Registered Devices
                    </p>

                </div>

                <div class="text-5xl">
                    💻
                </div>

            </div>

        </div>


        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-xl">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm font-semibold text-slate-500 uppercase">
                        Employees
                    </p>

                    <h2 class="mt-4 text-5xl font-bold">
                        0
                    </h2>

                    <p class="mt-3 text-sm text-slate-500">
                        Directory Users
                    </p>

                </div>

                <div class="text-5xl">
                    👥
                </div>

            </div>

        </div>


        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-xl">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm font-semibold text-slate-500 uppercase">
                        Licenses
                    </p>

                    <h2 class="mt-4 text-5xl font-bold">
                        0
                    </h2>

                    <p class="mt-3 text-sm text-slate-500">
                        Software Assets
                    </p>

                </div>

                <div class="text-5xl">
                    🔑
                </div>

            </div>

        </div>


        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-xl">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm font-semibold text-slate-500 uppercase">
                        Online
                    </p>

                    <h2 class="mt-4 text-5xl font-bold text-green-600">
                        1
                    </h2>

                    <p class="mt-3 text-sm text-slate-500">
                        Reachable Systems
                    </p>

                </div>

                <div class="text-5xl">
                    🟢
                </div>

            </div>

        </div>

    </div>


    <div class="grid gap-8 xl:grid-cols-3">

        <div class="xl:col-span-2 rounded-2xl bg-white p-8 shadow-sm ring-1 ring-slate-200">

            <div class="flex items-center justify-between mb-6">

                <h2 class="text-2xl font-bold">
                    Quick Actions
                </h2>

                <span class="text-sm text-slate-500">
                    Most Used
                </span>

            </div>

            <div class="grid gap-5 md:grid-cols-2">

                <a href="/computers/create" class="rounded-2xl border border-slate-200 p-6 transition hover:border-blue-500 hover:bg-blue-50">

                    <div class="text-4xl mb-4">➕</div>

                    <h3 class="font-bold text-lg">
                        Add Computer
                    </h3>

                    <p class="mt-2 text-slate-500">
                        Register a new device in your inventory.
                    </p>

                </a>

                <a href="/computers" class="rounded-2xl border border-slate-200 p-6 transition hover:border-blue-500 hover:bg-blue-50">

                    <div class="text-4xl mb-4">🖥️</div>

                    <h3 class="font-bold text-lg">
                        View Inventory
                    </h3>

                    <p class="mt-2 text-slate-500">
                        Browse all computers in your lab.
                    </p>

                </a>

                <div class="rounded-2xl border border-dashed border-slate-300 bg-slate-50 p-6">

                    <div class="text-4xl mb-4">📡</div>

                    <h3 class="font-bold text-lg">
                        Network Discovery
                    </h3>

                    <p class="mt-2 text-slate-500">
                        Coming in the next release.
                    </p>

                </div>

                <div class="rounded-2xl border border-dashed border-slate-300 bg-slate-50 p-6">

                    <div class="text-4xl mb-4">👥</div>

                    <h3 class="font-bold text-lg">
                        Employees
                    </h3>

                    <p class="mt-2 text-slate-500">
                        User management is coming soon.
                    </p>

                </div>

            </div>

        </div>


        <div class="rounded-2xl bg-white p-8 shadow-sm ring-1 ring-slate-200">

            <h2 class="text-2xl font-bold mb-6">
                System Status
            </h2>

            <div class="space-y-5">

                <div class="flex justify-between">
                    <span>Laravel</span>
                    <span class="font-semibold text-green-600">Running</span>
                </div>

                <div class="flex justify-between">
                    <span>Docker</span>
                    <span class="font-semibold text-green-600">Running</span>
                </div>

                <div class="flex justify-between">
                    <span>MySQL</span>
                    <span class="font-semibold text-green-600">Connected</span>
                </div>

                <div class="flex justify-between">
                    <span>Environment</span>
                    <span class="font-semibold">Development</span>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection