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
    public function store(Request $request)
    {
        $request->validate([
            'class_id'=>"required",
            "acadamic_year_id"=>"required",
            "fee_head_id"=>"required"
          ]);
          feeStructrue::create($request->all());
        return redirect()->route('fee-structure.create')->with('success',"Fee Structure Added Successfully");
          //   dd($request->all());
        

    }

    /**
     * Display the specified resource.
     */
    public function read(request $request)
    {
        $fee_structure = feeStructrue::query()->with(relations: ['FeeHead','Acadamic_year','Classes'])->latest();

        if($request->filled('class_id')){
            $fee_structure->where('class_id',$request->get('class_id')); 
        }

        if($request->filled('academic_year_id')){
            $fee_structure->where('acadamic_year_id',$request->get('academic_year_id'));
        }
         $data['fee_structure'] = $fee_structure->get();
         // dd($data); 
        $data['classes'] = Classes::all();
        $data['acadamic_years'] = Acadamic_year::all();
        return view('admin.fee-structure.fee-structure_list',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    { 
        $data['classes']= Classes::all();
        $data['acadamic_years']=Acadamic_year::all();
        $data['fee_heads'] = FeeHead::all();

        $data['fee'] = feeStructrue::find($id);
        // dd($data);
        return view('admin.fee-structure.edit-fee-structure',$data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $fee =feeStructrue::find($id);
        $fee->class_id = $request->class_id;
        $fee->acadamic_year_id = $request->acadamic_year_id;
        $fee->fee_head_id = $request->fee_head_id;
        $fee->April = $request->April;
        $fee->May = $request->May;
        $fee->June = $request->june;
        $fee->July = $request->july;
        $fee->August = $request->august;
        $fee->september = $request->september;
        $fee->october = $request->october;
        $fee->November = $request->november;
        $fee->December = $request->december;
        $fee->Januery = $request->Januery;
        $fee->Februeary = $request->Februeary;
        $fee->March = $request->March;
        $fee->update();
        return redirect()->route('fee-structure.read')->with('success','Data Update successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id){

        $data = feeStructrue::find($id);
        $data->delete();
        return redirect()->back()->with('suuccess','data deleted successfully');
    }
    
}
