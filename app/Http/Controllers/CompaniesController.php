<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Companies;
use Auth;
use Hash;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Support\HtmlString;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
         $companies = DB::table('companies')->get();

         return view::make('design.header') . view::make('companies.index', ['companies' => $companies]). View::make('design.footer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
      return view::make('design.header') . view::make('companies.create'). View::make('design.footer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'logo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048|dimensions:max_width=100,max_height=100',
            'website' => 'required',
        ]);
 
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('logo');
 
        $nama_file = time()."_".$file->getClientOriginalName();
 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage/app/company';
        $file->move($tujuan_upload,$nama_file);
 

        $companies = new Companies();
  $companies->nama = $request->nama;
  $companies->email = $request->email;
  $companies->logo = $nama_file; //hashed password.
  $companies->website =  $request->website;
  $companies->save();
 
        Session::flash('flash_message', 'Input Companies successfully!');

       return redirect('/Transisi/Companies')->with('alert','Input Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_companies)
    {
        $companies = Companies::find($id_companies);

        return view::make('design.header') . view::make('companies.view', ['companies' => $companies]) . View::make('design.footer');  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_companies)
    {
        $companies = Companies::find($id_companies);
        return view::make('design.header') . view::make('companies.edit', ['companies' => $companies]) . View::make('design.footer');  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_companies)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'logo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048|dimensions:max_width=100,max_height=100',
            'website' => 'required'
        ]);
 

        $companies =  Companies::find($id_companies);
        $companies->nama = $request->get('nama');
        $companies->email = $request->get('email');
  if($request->file('logo') == "")
        {
            $companies->logo = $companies->logo;
        } 
        else
        {
            $file       = $request->file('logo');
            $fileName   = $file->getClientOriginalName();
            $request->file('logo')->move('storage/app/company', $fileName);
            $companies->logo = $fileName;
        }
  $companies->website =  $request->get('website');
  $companies->save();
 
        Session::flash('flash_message', 'Update Companies successfully!');

       return redirect('/Transisi/Companies')->with('alert','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_companies)
    {
        $companies = Companies::find($id_companies);
        $companies->delete();

        return redirect('/Transisi/Companies')->with('success', 'Companies deleted!');
    }
}
