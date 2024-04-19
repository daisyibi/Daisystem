<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNetworkingRequest;
use App\Http\Requests\UpdateNetworkingRequest;
use App\Models\Networking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NetworkingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $networking = Networking::with('userprofiles')->get();

        return view('Admin.networking.index')->with('networking', $networking);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('Admin.networking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $request->validate([
            'desired_company' => 'required',
            'salary_expectation' => 'required|numeric',
            'work_experience' => 'required|integer',
            'skills' => 'required',
            'degree' => 'required',
        ]);

        Networking::create([
            'user_id' => $request->user_id,
            'desired_company' => $request->desired_company,
            'salary_expectation' => $request->salary_expectation,
            'work_experience' => $request->work_experience,
            'skills' => $request->skills,
            'degree' => $request->degree,
        ]);
        return redirect()->route('admin.networking.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Networking $networking)
    {
        return view('Admin.networking.show')->with('networking', $networking);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Networking $networking)
    {
        return view('Admin.networking.edit')->with('networking', $networking);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Networking $networking)
    {
        $request->validate([
            'desired_company' => 'required',
            'salary_expectation' => 'required|numeric',
            'work_experience' => 'required|integer',
            'skills' => 'required',
            'degree' => 'required',
        ]);

        $networking->update([
            'user_id' => $request->user_id,
            'desired_company' => $request->desired_company,
            'salary_expectation' => $request->salary_expectation,
            'work_experience' => $request->work_experience,
            'skills' => $request->skills,
            'degree' => $request->degree,
        ]);

        return redirect()->route('Admin.networking.show', $networking)->with('success', 'Networking updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Networking $networking)
    {
        $networking->delete();
        return redirect()->route('admin.networking.index')->with('success', 'Networking successfully removed');
    }
}
