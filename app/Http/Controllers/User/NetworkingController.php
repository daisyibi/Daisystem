<?php
namespace App\Http\Controllers\User;


use App\Http\Requests\StoreUserNetworkingRequest;
use App\Http\Requests\UpdateUserNetworkingRequest;
use App\Models\Networking;
use App\Models\UserProfiles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NetworkingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $networkings = Networking::with('userProfiles')->get();
        return view('user.networking.index', compact('networkings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$user = Auth::user();
        //$user->authorizeRoles('user');

        return view('user.networking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)


    {


        $request->validate([
            'desired_company' => 'required',
            'salary_expectation' => 'required|numeric',
            'work_experience' => 'required|integer',
            'skills' => 'required',
            'degree' => 'required',
            'user_id' => 'required', // Add any additional validation rules as needed
        ]);

        // Create networking profile
        $user->networking()->create([
            'desired_company' => $request->desired_company,
            'salary_expectation' => $request->salary_expectation,
            'work_experience' => $request->work_experience,
            'skills' => $request->skills,
            'degree' => $request->degree,
            'user_id' => $request->user_id
        ]);

        return redirect()->route('user.networking.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Networking $Networking)
    {
        $customer = Networking::find($id);
        return view('user.networking.show')->with('networking', $Networking);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Networking $Networking)
    {
        // $user = Auth::user();
        // $user->authorizeRoles('user');

        return view('user.networking.edit')->with('networking', $Networking);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Networking $Networking)
    {
        $request->validate([
            'desired_company' => 'required',
            'salary_expectation' => 'required|numeric',
            'work_experience' => 'required|integer',
            'skills' => 'required',
            'degree' => 'required',
            'user_id' => 'required',
        ]);

        $networking->update([
            'desired_company' => $request->desired_company,
            'salary_expectation' => $request->salary_expectation,
            'work_experience' => $request->work_experience,
            'skills' => $request->skills,
            'degree' => $request->degree,
            'user_id' => $request->user_id
        ]);


      return to_route('user.networking.show', $shop)->with('success', 'Information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Networking $Networking)
    {
        $Networking = Networking::find($Networking);
        $Networking->delete();
        return to_route('user.networking.index')->with('success', 'Information successfully removed');

    }
}
