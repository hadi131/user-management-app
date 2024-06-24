<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $count = Country::get()->count();
        $search = $req->search;
        if ($search != '') {


            $countries = Country::where('name', 'LIKE', "%$search%")->orWhere('id', 'LIKE', "%$search%")->orWhere('id', 'LIKE', "%$search%")->get();;

            return view('alladdresses', compact('addresses', 'count'));
        } else {

            $countries = Country::orderBy('id', 'DESC')->get();

            return view('allcountries', compact('countries', 'count'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addcountry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);
        $country = Country::create($data);

        if ($country) {

            return redirect()->route('country.index')->with('status', 'Country Added Successfully');
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
    public function edit(string $country)
    {
        $country = Country::find($country);
        return view('updatecountry', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $country)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);
        $countries = Country::where('id', $country)->update($data);
        if ($countries) {

            return redirect()->route('country.index')->with('status', 'Country Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country = Country::find($id);
        $country->delete();
        // $address=Address::Where('employee_id',$employee);
        // $address->delete();
        if ($country) {
            return redirect()->route('country.index')->with('status', 'Country Deleted Successfully');
        }
    }
}
