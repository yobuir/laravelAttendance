<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institutions = Institution::all();
        return view('dashboard.institution.app', compact(['institutions']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'address' => 'required',
                'url' => 'required',
            ]);

            Institution::create($validated);
            return redirect()->back();
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $institution = Institution::findOrFail($id);
        return view('dashboard.institution.edit', compact(['institution']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $institution = Institution::findOrFail($id);

            $validated = $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'address' => 'required',
                'url' => 'required',
            ]);

            $institution->update($validated);
            return redirect()->route('institutions');
        } catch (\Throwable $th) { 
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $institution = Institution::findOrFail($id);
            $institution->delete();
            return redirect()->route('institutions');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back();
        }
    }
}
