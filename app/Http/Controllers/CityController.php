<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $count = City::get()->count();
        $search = $req->search;
        $city = City::with('state');

        if ($search != '') {


            $cities = $city->where('name', 'LIKE', "%$search%")->orWhere('id', 'LIKE', "%$search%")->orWhere('id', 'LIKE', "%$search%")->get();;

            return view('allcities', compact('cities', 'count'));
        } else {

            $cities = $city->orderBy('id', 'DESC')->get();

            return view('allcities', compact('cities', 'count'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $state = State::all();

        return view('addcity')->with('state', $state);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $city = City::create([
            'name' => $request->name,
        'state_id' => $request->state_id


        ]);




        if ($city) {

            return redirect()->route('city.index')->with('status', 'City Added Successfully');
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
        $city = City::find($id);
        $city->delete();
        // $address=Address::Where('employee_id',$employee);
        // $address->delete();
        if ($city) {
            return redirect()->route('city.index')->with('status', 'City Deleted Successfully');
        }
    }
}
