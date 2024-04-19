<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use App\Models\Events;
use App\Models\UserProfiles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Events::with('userProfiles')->get();
        return view('user.events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles('user');

        return view('user.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'date_time' => 'required|date',
            'max_capacity' => 'required|integer|min:1',
        ]);

        // Create event
        $event = Events::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date_time' => $request->date_time,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('user.events.index');
    }


    public function show(Events $events)
    {
        return view('user.events.show')->with('events', $events);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $events)
    {
        return view('user.events.edit')->with('events', $events);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Events $events)
    {
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'date_time' => 'required|date',
        ]);

        $events->update([
            'title' => $request->title,
            'location' => $request->location,
            'date_time' => $request->date_time,
        ]);

        return redirect()->route('user.events.show', $events)->with('success', 'Events updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events)
    {
        $events->delete();
        return redirect()->route('user.events.index')->with('success', 'Event successfully removed');
    }
}
