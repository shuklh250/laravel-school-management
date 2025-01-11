<?php

namespace App\Http\Controllers;

use App\Models\feeStructrue;
use App\Models\Classes;
use App\Models\FeeHead;
use App\Models\Acadamic_year;

use Illuminate\Http\Request;

class FeeStructrueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data['classes']= Classes::all();
        $data['acadamic_years']=Acadamic_year::all();
        $data['fee_heads'] = FeeHead::all();

            return view('admin.fee-structure.fee-structure',$data);
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
    public function store($request)
    {
        $feeStructrue = new FeeStructrue();

    }

    /**
     * Display the specified resource.
     */
    public function show(feeStructrue $feeStructrue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(feeStructrue $feeStructrue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, feeStructrue $feeStructrue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(feeStructrue $feeStructrue)
    {
        //
    }
}
