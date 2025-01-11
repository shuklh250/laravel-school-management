<?php

namespace App\Http\Controllers;

use App\Models\FeeHead;
use Illuminate\Http\Request;

class FeeHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('admin.fee-head.fee-head');
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

            'name'=>'required'
        ]);
        $fee = new FeeHead();
        $fee->name = $request->name;
        $fee->save();
        return redirect()->route('fee-head.create')->with('success','Fee  head add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function read()
    {
        
        $data['fee'] = FeeHEad::latest()->get();
        return view('admin.fee-head.fee-head-list',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $data['fee']= FeeHead::find($id);
       return view('admin.fee-head.edit-fee-head',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $fee = FeeHead::find($request->id);
        $fee->name =  $request->name;
        $fee->update();
        return redirect()->route('fee-head.read')->with('success','Fee Head update successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $fee = FeeHead::find($id);
        $fee->delete();
        return redirect()->back()->with('success','Data delete successfully');  
    }
}
