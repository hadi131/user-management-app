<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $count = State::get()->count();
        $search = $req->search;
        $state = state::with('country');

        if ($search != '') {


            $states = $state->where('name', 'LIKE', "%$search%")->orWhere('id', 'LIKE', "%$search%")->orWhere('id', 'LIKE', "%$search%")->get();;

            return view('allstates', compact('states', 'count'));
        } else {

            $states = $state->orderBy('id', 'DESC')->get();

            return view('allstates', compact('states', 'count'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country = Country::all();

        return view('addstate')->with('country', $country);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'name' => 'required',
        ]);
        $state = State::create([
            'name' => $request->name,
        'country_id' => $request->address_id


        ]);




        if ($state) {

            return redirect()->route('state.index')->with('status', 'State Added Successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $state = State::find($id);
        $state->delete();
        // $address=Address::Where('employee_id',$employee);
        // $address->delete();
        if ($state) {
            return redirect()->route('state.index')->with('status', 'State Deleted Successfully');
        }
    }
}
