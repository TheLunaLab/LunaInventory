@extends('layouts.app')

@section('title','Dashboard')
@section('page-title','Dashboard')

@section('content')

<div class="space-y-8">

    <div class="rounded-3xl bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 p-8 text-white shadow-xl">
        <p class="text-blue-200 uppercase tracking-[0.3em] text-sm font-semibold">
            MyLunaLab
        </p>

        <h1 class="mt-3 text-4xl font-bold">
            Infrastructure Dashboard
        </h1>

        <p class="mt-4 max-w-3xl text-slate-300">
            Manage computers, monitor your lab, and track infrastructure from a single dashboard.
        </p>
    </div>

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">

        <div class="rounded-2xl bg-white p-6 shadow ring-1 ring-slate-200">
            <p class="text-xs uppercase tracking-wide text-slate-500">Computers</p>
            <h2 class="mt-3 text-5xl font-bold">{{ $computerCount }}</h2>
            <p class="mt-2 text-sm text-slate-500">Registered Devices</p>
        </div>

        <div class="rounded-2xl bg-white p-6 shadow ring-1 ring-slate-200">
            <p class="text-xs uppercase tracking-wide text-slate-500">Employees</p>
            <h2 class="mt-3 text-5xl font-bold">0</h2>
            <p class="mt-2 text-sm text-slate-500">Directory Users</p>
        </div>

        <div class="rounded-2xl bg-white p-6 shadow ring-1 ring-slate-200">
            <p class="text-xs uppercase tracking-wide text-slate-500">Licenses</p>
            <h2 class="mt-3 text-5xl font-bold">0</h2>
            <p class="mt-2 text-sm text-slate-500">Software Assets</p>
        </div>

        <div class="rounded-2xl bg-white p-6 shadow ring-1 ring-slate-200">
            <p class="text-xs uppercase tracking-wide text-slate-500">Online Systems</p>
            <h2 class="mt-3 text-5xl font-bold text-green-600">1</h2>
            <p class="mt-2 text-sm text-slate-500">Reachable</p>
        </div>

    </div>

    <div class="grid gap-8 xl:grid-cols-3">

        <div class="xl:col-span-2 rounded-2xl bg-white p-8 shadow ring-1 ring-slate-200">

            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold">Quick Actions</h2>
            </div>

            <div class="grid gap-5 md:grid-cols-2">

                <a href="/computers/create" class="rounded-xl border p-6 hover:border-blue-500 hover:bg-blue-50 transition">
                    <h3 class="font-bold">Add Computer</h3>
                    <p class="mt-2 text-slate-500">Register a new workstation or server.</p>
                </a>

                <a href="/computers" class="rounded-xl border p-6 hover:border-blue-500 hover:bg-blue-50 transition">
                    <h3 class="font-bold">Inventory</h3>
                    <p class="mt-2 text-slate-500">View all computers in your lab.</p>
                </a>

            </div>

        </div>

        <div class="rounded-2xl bg-white p-8 shadow ring-1 ring-slate-200">

            <h2 class="text-2xl font-bold mb-6">Lab Overview</h2>

            <div class="space-y-4 text-sm">

                <div class="flex justify-between"><span>DC1</span><span class="text-green-600">Online</span></div>
                <div class="flex justify-between"><span>CM1</span><span class="text-green-600">Online</span></div>
                <div class="flex justify-between"><span>Red Hat</span><span class="text-green-600">Online</span></div>
                <div class="flex justify-between"><span>Client1</span><span class="text-green-600">Online</span></div>
                <div class="flex justify-between"><span>Client2</span><span class="text-slate-400">Offline</span></div>

                <hr>

                <div class="flex justify-between"><span>Domain</span><strong>corp.contoso.com</strong></div>
                <div class="flex justify-between"><span>Environment</span><strong>Development</strong></div>

            </div>

        </div>

    </div>

</div>

@endsection

