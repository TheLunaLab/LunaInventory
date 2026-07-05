@extends('layouts.app')

@section('content')

<h1>Add Computer</h1>

<form action="/computers" method="POST">

    @csrf

    <p>
        <label>Computer Name</label><br>
        <input type="text" name="computer_name">
    </p>

    <p>
        <label>Manufacturer</label><br>
        <input type="text" name="manufacturer">
    </p>

    <p>
        <label>Model</label><br>
        <input type="text" name="model">
    </p>

    <p>
        <label>Serial Number</label><br>
        <input type="text" name="serial_number">
    </p>

    <p>
        <label>Operating System</label><br>
        <input type="text" name="operating_system">
    </p>

    <p>
        <label>RAM (GB)</label><br>
        <input type="number" name="ram_gb">
    </p>

    <p>
        <label>Storage (GB)</label><br>
        <input type="number" name="storage_gb">
    </p>

    <p>
        <label>Assigned User</label><br>
        <input type="text" name="assigned_user">
    </p>

    <p>
        <label>Notes</label><br>
        <textarea name="notes" rows="4"></textarea>
    </p>

    <button type="submit">
        Save Computer
    </button>

</form>

@endsection