<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acadamic_year;

class AcadamicYearController extends Controller
{
    public function index(){
            return view('admin.acadamic_year');

    }
    public function store(Request $request){

            $request->validate([
                   'name'=>'required' 
            ]);
//  here call your model 
            $data= new Acadamic_year();
            $data->name = $request->name;
            $data->save();
            return redirect()->route('acadamic-year.create')->with('success','Acadamic year successfully ');

            // dd($request->all());
    }

    public function read(){

        $data['acadamic_year'] = Acadamic_year::get();
        return view('admin.acadamic_year_list',$data);
        // dd($data);
    }


    public function edit($id){
        $data['acadamic_year'] =  Acadamic_year::find($id);
        return view('admin.edit_acadamic_year',$data);
    }   

    public function update(Request $request){
        
        $data= Acadamic_year::find($request->id);
        $data->name = $request->name;
        $data->update();
        return redirect()->route('acadamic-year.view')->with('success','Acadamic year updated successfully');

    }
    public function delete($id){
        $data = Acadamic_year::find($id); 
        $data->delete();
        return redirect()->route('acadamic-year.view')->with('success','Acadamic data Delete successfully');

    }
}
