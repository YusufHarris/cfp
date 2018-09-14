<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Image;


class EmployeeController extends Controller
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
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function index2()
    {
        $employees = Employee::all();
        return view('home', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

  /*  public function update_avatar(Request $request){
      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(150,150)->save(public_path($directory));


        }
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      /*  $request->validate([
          'name' => 'required|string|max:191',
          'title' => 'required|string|max:100',
          'description' => 'string|max:191',
          'avatar' => 'image',

        ]);*/
        $path = $request->file('avatar')->store('public/empavatars');

        Employee::create([
          'name' => $request->name,
          'title'=> $request->title,
          'description' => $request->description,
          'avatar' => $request->file('avatar')->store('storage/empavatars'),

        ]);

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $employee = Employee::where('id', $id)->first();
      return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $employee = Employee::where('id', $id)->first();

      $path = $request->file('avatar')->store('public/empavatars');

      $employee->name = $request->name;
      $employee->title = $request->title;
      $employee->description = $request->description;
      $employee->avatar = $request->file('avatar')->store('storage/empavatars');


      // Save the Employee
      $employee->save();
      $employees = Employee::all();
      return view('employees.index',compact('employees'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
