<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\JobApplication;
use App\Models\ApplicationEvent;
use App\Models\CustomStatus;

class JobApplicationController extends Controller
{
    public function index() : Response
    {   
        $jobApplications = JobApplication::with('latestEvent')->get();
        $customStatuses = Auth::user()->customStatuses->pluck('status')->toArray();
        $statuses = array_merge(config('job-application.stages'), $customStatuses);

        return Inertia::render('jobApplications/Index', [
            'jobApplications' => $jobApplications,
            'statuses' => $statuses
        ]);
    }

    public function create() : Response
    {
        return Inertia::render('jobApplications/New');
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
        $jobApplication = JobApplication::with('applicationEvents')->findOrFail($id);

        return Inertia::render('jobApplications/Single', [
            'jobApplication' => $jobApplication,
            'applicationEvents' => $jobApplication->applicationEvents
        ]);
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
