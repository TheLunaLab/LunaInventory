@extends('layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')

<div style="margin-bottom:40px;">

    <h1 style="font-size:34px;font-weight:700;color:#111827;margin-bottom:8px;">
        MyLunaLab
    </h1>

    <p style="font-size:16px;color:#6b7280;">
        IT Asset Management Dashboard
    </p>

    <p style="margin-top:8px;color:#9ca3af;">
        Monitor and manage your lab infrastructure from one place.
    </p>

</div>


<div class="stats">

    <div class="stat-card">

        <div class="stat-header">
            Computers
        </div>

        <div class="stat-number">
            {{ $computerCount }}
        </div>

        <div class="stat-description">
            Registered Devices
        </div>

    </div>


    <div class="stat-card">

        <div class="stat-header">
            Employees
        </div>

        <div class="stat-number">
            0
        </div>

        <div class="stat-description">
            Directory Users
        </div>

    </div>


    <div class="stat-card">

        <div class="stat-header">
            Licenses
        </div>

        <div class="stat-number">
            0
        </div>

        <div class="stat-description">
            Software Assets
        </div>

    </div>


    <div class="stat-card">

        <div class="stat-header">
            Online
        </div>

        <div class="stat-number">
            1
        </div>

        <div class="stat-description">
            Reachable Systems
        </div>

    </div>

</div>


<h2 style="margin-top:50px;margin-bottom:20px;font-size:22px;">
    Quick Actions
</h2>


<div class="quick-actions">

    <a href="/computers/create" class="action-card">

        <div class="action-title">
            Add Computer
        </div>

        <div class="action-text">
            Register a new computer in your inventory.
        </div>

    </a>


    <a href="/computers" class="action-card">

        <div class="action-title">
            View Inventory
        </div>

        <div class="action-text">
            Browse all registered computers.
        </div>

    </a>


    <div class="action-card disabled">

        <div class="action-title">
            Employees
        </div>

        <div class="action-text">
            Coming Soon
        </div>

    </div>


    <div class="action-card disabled">

        <div class="action-title">
            Network Discovery
        </div>

        <div class="action-text">
            Coming Soon
        </div>

    </div>

</div>

@endsection