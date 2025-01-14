<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feeStructrue extends Model
{
     use HasFactory;
     protected $fillable =[
        'class_id',
        'acadamic_year_id',
        'fee_head_id',
        'April',
        'May',
        'june',
        'july',
        'august',
        'september',
        'october',
        'november',
        'december',
        'Januery',
        'Februeary',
        'March',

     ];

     public function FeeHead(){
        return $this->belongsTo(FeeHead::class,'fee_head_id');
     }

     public function Acadamic_year(){
        return $this->belongsTo(Acadamic_year::class,'acadamic_year_id');
     }

     public function Classes(){

        return $this->belongsTo(Classes::class,'class_id');
     } 
}
