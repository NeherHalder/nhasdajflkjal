<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Application extends Model
{
    protected $fillable = [
    'name_bn', 'name_en','relation','app_dob','father_husband_name','mother_name','nid','present_add','permanent_add','tel_number','mob_number',
    'office_name', 'disignation','pay_scale','basic_salery','meyadkal','joining_date','buisness_type','other_income','tin_no','app_receipt_no','receipt_date',
    'pay_order_no','bank_name','bank_branch','pay_order_date','starling_des','flate_size','job_type','app_bank_account_no','app_bank_name','status',
    'holofnama_date'
    ];

   
    public function setNameEnAttribute($value)
    {
       $this->attributes['name_en'] = strtoupper($value);       
    }
    public function setMeyadkalAttribute($value)
    {
        $this->attributes['meyadkal'] = Carbon::parse($value);
    }
    public function setJoiningDateAttribute($value)
    {
        $this->attributes['joining_date'] = Carbon::parse($value);
    }
    public function setReceiptDateAttribute($value)
    {
        $this->attributes['receipt_date'] = Carbon::parse($value);
    }
    public function setPayOrderDateAttribute($value)
    {
        $this->attributes['pay_order_date'] = Carbon::parse($value);
    }
}
