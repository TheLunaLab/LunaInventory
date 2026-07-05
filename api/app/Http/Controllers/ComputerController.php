<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::all();

        return view('computers.index', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'computer_name'    => 'required',
            'manufacturer'     => 'required',
            'model'            => 'required',
            'serial_number'    => 'nullable',
            'operating_system' => 'required',
            'ram_gb'           => 'required|integer',
            'storage_gb'       => 'required|integer',
            'assigned_user'    => 'nullable',
            'notes'            => 'nullable',
        ]);

        Computer::create($validated);

        return redirect('/computers')
            ->with('success', 'Computer added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computer $computer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computer $computer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        //
    }
}