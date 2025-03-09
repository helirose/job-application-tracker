<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    public function index() : Response
    {
        $jobApplications = JobApplication::all();
        return Inertia::render('jobApplications/Index', [
            'jobApplications' => $jobApplications]);
    }

    public function create()
    {
        return view('job_applications.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'date_applied' => 'required|date',
            'status' => 'required|string',
            'recruiter_id' => 'nullable|exists:recruiters,id',
        ]);

        JobApplication::create($validated);
        return redirect()->route('job_applications.index');
    }

    public function show(string $id) : Response
    {
        return Inertia::render('jobApplications/Single', [
            'jobApplication' => JobApplication::findOrFail($id)]);
    }

    public function edit(string $id)
    {
        return view('job_applications.edit', [
            'job_application' => JobApplication::findOrFail($id)
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'date_applied' => 'required|date',
            'status' => 'required|string',
            'recruiter_id' => 'nullable|exists:recruiters,id',
        ]);

        JobApplication::findOrFail($id)->update($validated);
        return redirect()->route('job_applications.index');
    }

    public function destroy(string $id)
    {
        JobApplication::findOrFail($id)->delete();
        return redirect()->route('job_applications.index');
    }
}
