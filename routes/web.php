<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {

    return view('home.index');
});

Route::post('/jobs', function () {

    request()->validate([
        'title'=> ['required', 'min:3'],
        'salary'=> ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id'=> 1
    ]);

    return redirect('/jobs');
});




Route::get('/jobs', function ()  {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{job}', function (Job $job) {

    return view('jobs.show', ['job' => $job]);
});

Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

Route::patch('/jobs/{job}', function (Job $job) {
    // validate
    // authorize
    // update job
    // and persist
    // redirect

    request()->validate([
        'title'=> ['required', 'min:3'],
        'salary'=> ['required']
    ]);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{job}', function (Job $job) {
    // authorize
    // delete job
    // redirect

    $job->delete();
    return redirect('/jobs');
});



Route::get('/contact', function () {
    return view('contact.index');
});
