<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use App\Models\Events;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $events = Events::all(); // Changed to use Event model

        return view('Admin.events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('Admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'date_time' => 'required|date',
            'max_capacity' => 'required|integer|min:1',
        ]);

        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date_time' => $request->date_time,
            'organiser_id' => $request->organiser_id,
            'max_capacity' => $request->max_capacity,
        ]);

        return redirect()->route('Admin.events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Events $event)
    {
        return view('Admin.events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $event)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('Admin.events.edit')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventsRequest $request, Events $event)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'date_time' => 'required|date',
            'max_capacity' => 'required|integer|min:1',
        ]);

        $events->update([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date_time' => $request->date_time,
            'organiser_id' => $request->organiser_id,
            'max_capacity' => $request->max_capacity,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('Admin.events.show', $event)->with('success', 'Event is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event is successfully removed');
    }
}
