<?php

namespace App\Http\Controllers;


use App\Beneficiary;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $beneficiaries = Beneficiary::all();
        return view('beneficiaries.index', compact('beneficiaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beneficiaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $path = $request->file('avatar')->store('public/benavatars');
      Beneficiary::create([
        'name' => $request->name,
        'occupation'=> $request->occupation,
        'introduction' => $request->introduction,
        'avatar' => $request->file('avatar')->store('storage\benavatars'),

      ]);
      return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(r $r)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(r $r)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
     {

       $beneficiary = Beneficiary::where('id', $id)->first();

       $path = $request->file('avatar')->store('public/benavatars');

       $beneficiary->name = $request->name;
       $beneficiary->occupation = $request->occupation;
       $beneficiary->introduction = $request->introduction;
       $beneficiary->avatar = $request->file('avatar')->store('storage/benavatars');


       // Save the user
       $employee->save();
       $employees = Beneficiary::all();
       return view('beneficiaries.index',compact('beneficiaries'));
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy(r $r)
    {
        //
    }
}
