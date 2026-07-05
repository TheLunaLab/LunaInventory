@extends('layouts.app')

@section('title', 'Computers')

@section('page-title', 'Computer Inventory')

@section('content')

<h1 style="font-size:38px; margin-bottom:10px;">
    🖥️ Computer Inventory
</h1>

<p style="color:#6b7280; margin-bottom:25px;">
    Manage computers in your lab.
</p>

<div style="margin-bottom:30px;">
    <a href="/computers/create" class="btn">
        + Add Computer
    </a>
</div>

@if(session('success'))

<div class="success">
    {{ session('success') }}
</div>

@endif

<table>

    <thead>

        <tr>
            <th>Computer</th>
            <th>Manufacturer</th>
            <th>Model</th>
            <th>Operating System</th>
            <th>RAM</th>
            <th>Storage</th>
            <th>Assigned User</th>
        </tr>

    </thead>

    <tbody>

    @forelse($computers as $computer)

        <tr>

            <td>
                <strong>{{ $computer->computer_name }}</strong>
            </td>

            <td>{{ $computer->manufacturer }}</td>

            <td>{{ $computer->model }}</td>

            <td>{{ $computer->operating_system }}</td>

            <td>{{ $computer->ram_gb }} GB</td>

            <td>{{ $computer->storage_gb }} GB</td>

            <td>
                {{ $computer->assigned_user ?: '-' }}
            </td>

        </tr>

    @empty

        <tr>

            <td colspan="7" style="text-align:center; padding:40px; color:#6b7280;">

                No computers found.<br><br>

                <a href="/computers/create" class="btn">
                    Add Your First Computer
                </a>

            </td>

        </tr>

    @endforelse

    </tbody>

</table>

<div style="margin-top:20px; color:#6b7280; font-weight:600;">

    Total Computers:
    <strong>{{ $computers->count() }}</strong>

</div>

@endsection