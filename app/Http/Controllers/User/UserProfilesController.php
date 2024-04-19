<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserProfilesRequest;
use App\Http\Requests\UpdateUserProfilesRequest;
use App\Models\UserProfiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
    class UserProfilesController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {

    $userProfiles = UserProfiles::with(['networking', 'events'])->get();
    return view('user.userProfiles.index', compact('userProfiles'));
        }


        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $user = Auth::user();
            $user->authorizeRoles('user');

            return view('user.userProfiles.create');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:user_profiles',
            'email' => 'required|email|unique:user_profiles',
            'password' => 'required',
        ]);

        // Create user profile
        $userProfile = \App\Models\UserProfiles::create([
            'user_id' => $request->user_id,
            'event_id' => $request->event_id,
            'username' => $request->username,
            'email' => $request->email,
            'bio' => $request->bio,
            'contact_information' => $request->contact_information,
            'preferences' => $request->preferences
        ]);

        return redirect()->route('userProfiles.index');
    }

        /**
         * Display the specified resource.
         */
        public function show(UserProfiles $userProfiles)
        {
            $userProfiles = UserProfiles::find($userProfiles);
            return view('user.userProfiles.show')->with('userProfiles', $userProfiles);
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(UserProfiles $userProfiles)
        {
            // $user = Auth::user();
            // $user->authorizeRoles('user');

            return view('user.userProfiles.edit')->with('userProfiles', $userProfiles);
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, UserProfiles $userProfiles)
        {
            $request->validate([
                'username' => 'required|unique:user_profiles',
                'email' => 'required|email|unique:user_profiles',
                'password' => 'required',
            ]);

            $userProfiles->update([
                'user_id' => $request->user_id,
                'event_id' => $request->event_id,
                'username' => $request->username,
                'email' => $request->email,
                'bio' => $request->bio,
                'contact_information' => $request->contact_information,
                'preferences' => $request->preferences
            ]);


        return to_route('user.userProfiles.show', $userProfiles)->with('success', 'Your information has been updated successfully');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(UserProfiles $userProfiles)
        {
            $userProfiles->delete();
            return redirect()->route('user.userProfiles.index')->with('success', 'Your information has been successfully removed');
        }
    }
