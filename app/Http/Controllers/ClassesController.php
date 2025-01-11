<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.class.class');
         }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
        ]);
    
        $data = new Classes();
        $data->name = $request->name;
        $data->save();

        return redirect()->route('class.create')->with('success','class created successfully');
    }

    public function read(){
        $data['acadamic_class'] = Classes::get();
        return view('admin.class.class_list',$data);
    
        }
    /**
     * Display the specified resource.
    

     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data['class'] = Classes::find($id);
        return view('admin.class.edit_class',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classes $classes)
    {
        $data = Classes::find($request->id);
        $data->name = $request->name;
        $data->update();
        return redirect()->route('class.read')->with('success','Class uodated successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {

        $data = Classes::find($id); 
        $data->delete();
        return redirect()->route('class.read')->with('success','Class delete successfully');

        //
    }
}
