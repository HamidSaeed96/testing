<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $company=Company::orderBy('id' , 'DESC')->get();
        return view('company_show', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $valid=$request->validate([
            'name'=>'required',
        ]);


        $company=new Company;
        $company->name=$request->name;
        $company->email=$request->email;
        $company->logo=$request->logo;
        $company->web=$request->web;
        $company->save();

        return back()->with('Company_Added','Company Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
        $company=Company::all();
        return view('company_show' , compact('company'));

    }

   
    public function edit($id)
    {
        $cmp=Company::find($id);
        return view('edit', compact('cmp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        // $valid=$request->validate([
        //     'name'=>'required',
        // ]);
        $company=Company::find($request->id);
        $company->name=$request->name;
        $company->email=$request->email;
        $company->logo=$request->logo;
        $company->web=$request->web;
        $company->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Company::where('id',$id)->delete();

        return back()->with('Company deleted successfully');

        
       
    }
}
