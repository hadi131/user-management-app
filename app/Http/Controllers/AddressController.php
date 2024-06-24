<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $count = Address::get()->count();
        $search = $req->search;
        if ($search != '') {


            $addresses = Address::where('city', 'LIKE', "%$search%")->orWhere('id', 'LIKE', "%$search%")->orWhere('id', 'LIKE', "%$search%")->get();;

            return view('alladdresses', compact('addresses', 'count'));
        } else {

            $addresses = Address::orderBy('id', 'DESC')->get();

            return view('alladdresses', compact('addresses', 'count'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addaddress');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'city' => 'required',
        ]);
        $address = Address::create($data);

        if ($address) {

            return redirect()->route('address.index')->with('status', 'City Added Successfully');
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
    public function edit(string $address)
    {
        $address = Address::find($address);
        return view('updateaddress', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $address)
    {
        $data = $request->validate([
            'city' => 'required',
        ]);
        $addresses = Address::where('id', $address)->update($data);
        if ($addresses) {

            return redirect()->route('address.index')->with('status', 'City Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $address = Address::find($id);
        $address->delete();
        // $address=Address::Where('employee_id',$employee);
        // $address->delete();
        if ($address) {
            return redirect()->route('address.index')->with('status', 'City Deleted Successfully');
        }
    }
}
