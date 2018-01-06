<?php  

namespace App\Http\Requests\Rules;

class ApplicationRules
{
	public function compose()
    {  
		$rules['name_bn']  = 'required|min:4';
        $rules['name_en']  = 'required|min:4';
        $rules['relation']  = 'required';
        $rules['app_dob']  = 'required|date';
        $rules['father_husband_name']  = 'required|min:4';
        $rules['mother_name']  = 'required|min:4';
        $rules['nid']  = 'required|min:17|max:17';
        $rules['present_add']  = 'required|min:10|max:255';
        $rules['permanent_add']  = 'required|min:10|max:255';
        $rules['mob_number']  = 'required|min:11|max:11|unique:applications,mob_number';
        $rules['office_name']  = 'min:4';        
        return $rules;
    }

    // $rules['disignation']  = 'min:4';
    //     $rules['pay_scale']  = 'min:1';
    //     $rules['basic_salery']  = 'min:10000';
    //     $rules['buisness_type']  = 'min:4';
    //     $rules['tin_no']  = 'min:10|max:12';
    //     $rules['app_receipt_no']  = 'min:1';
    //     $rules['pay_order_no']  = 'min:1';
    //     $rules['bank_name']  = 'min:3';
    //     $rules['bank_branch']  = 'min:3';
    //     $rules['flate_size']  = 'min:800';
    //     $rules['job_type']  = 'min:4';
    //     $rules['app_bank_account_no']  = 'min:4';
    //     $rules['app_bank_name']  = 'min:3';
}
