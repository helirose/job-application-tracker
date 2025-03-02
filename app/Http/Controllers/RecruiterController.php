<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruiter;

class RecruiterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recruiters = Recruiters::all();
        return view('recruiters.index', $recruiters);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recruiters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'agency' => 'required|string|max:255',
            'contact_method' => 'nullable|string|max:255',
            'email_address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
        ]);

        Recruiter::create($validated);
        return redirect()->route('recruiters.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('recruiters.single', [
            'recruiter' => Recruiter::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('recruiters.edit', [
            'recruiter' => Recruiter::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'agency' => 'required|string|max:255',
            'contact_method' => 'nullable|string|max:255',
            'email_address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
        ]);

        Recruiter::findOrFail($id)->update($validated);
        return redirect()->route('recruiters.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Recruiter::findOrFail($id)->delete();
        return redirect()->route('recruiters.index');
    }
}
