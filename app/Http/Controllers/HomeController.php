<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Beneficiary;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $employees = Employee::all();
      $beneficiaries = Beneficiary::all();
      return view('home', compact('employees','beneficiaries'));

    }
}
