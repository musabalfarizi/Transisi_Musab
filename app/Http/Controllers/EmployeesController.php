<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Employees;
use Auth;
use Hash;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Support\HtmlString;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = DB::table('employees')
        ->join('companies', 'employees.id_companies', '=', 'companies.id_companies')
        ->select('employees.*', 'companies.nama as nama_company' )
        ->get();

       return view::make('design.header') . view::make('employees.index', ['employees' => $employees]). View::make('design.footer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view::make('design.header') . view::make('employees.create'). View::make('design.footer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nama'=>'required',
            'id_companies'=>'required',
            'email' => 'required|email'
            

        ]);

        $employees = new Employees([
            'nama' => $request->get('nama'),
            'id_companies' => $request->get('id_companies'),
            'email' => $request->get('email')
          
        ]);
        $employees->save();


        Session::flash('flash_message', 'Input Employees successfully!');

        return redirect('/Transisi/Employees')->with('alert','Input Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_employees)
    {
         $employees = Employees::find($id_employees);

        return view::make('design.header') . view::make('employees.view', ['employees' => $employees]) . View::make('design.footer');  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_employees)
    {
        
        $employees = Employees::find($id_employees);
        return view::make('design.header') . view::make('employees.edit', ['employees' => $employees]) . View::make('design.footer');  

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_employees)
    {
        $request->validate([
    
            'nama'=>'required',
            'id_companies'=>'required',
            'email'=>'required|email'
        ]);

        $employees = Employees::find($id_employees);

        $employees->nama = $request->get('nama');
        $employees->id_companies = $request->get('id_companies');
        $employees->email = $request->get('email');

        $employees->save();


        Session::flash('flash_message', 'Update Employees successfully!');

         return redirect('/Transisi/Employees')->with('alert','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_employees)
    {
        $employees = Employees::find($id_employees);
        $employees->delete();

        return redirect('/Transisi/Employees')->with('success', 'Employees deleted!');
    }
}
