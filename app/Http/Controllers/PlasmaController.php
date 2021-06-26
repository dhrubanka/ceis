<?php

namespace App\Http\Controllers;

use App\Plasma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class PlasmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function indexid()
    {
        $plasmas = Plasma::where('user_id', Auth::user()->id)->paginate(15);

        return view('userprofile.mydonation.index', ['donations' => $plasmas]);


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userprofile.mydonation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required',
        'phone' => 'required',
        'pin' => 'required',
        'city' => 'required',
        'gender' => 'required',
        'blood_group' => 'required',
        'recovered_date' => 'required',
        'identity' => 'required',
    ]);
        $image1 = NULL;
         if (request('covid_positive_image')) {

                $image1 = request('covid_positive_image')->store('covid_positive_image');
            }
            $image2 = NULL;
            if (request('identity_photo')) {

                   $image2 = request('identity_photo')->store('identity_photo');
               }
       Plasma::create([
           'user_id' => Auth::user()->id,
            'name' =>  request('name'),
            'address' => request('address'),
            'phone' => request('phone'),
            'pin' =>  request('pin'),
            'city' => request('city'),
            'gender' => request('gender'),
            'blood_group' =>  request('blood_group'),
            'covid_positive_image' => $image1,
            'recovered_date' => request('recovered_date'),
            'existing_disease' =>  request('existing_disease'),
            'previous_donation' => request('previous_donation'),
            'hospital_admitted' => request('hospital_admitted'),
            'hospital_name' =>  request('hospital_name'),
            'approved' => 'N',
            'identity' =>  request('identity'),
            'identity_photo' => $image2,

       ]);
       return back()->with('success', 'Successfully inserted a request!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plasma  $plasma
     * @return \Illuminate\Http\Response
     */
    public function show(Plasma $plasma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plasma  $plasma
     * @return \Illuminate\Http\Response
     */
    public function edit(Plasma $plasma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plasma  $plasma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plasma $plasma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plasma  $plasma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plasma $plasma)
    {
        //
    }
}
