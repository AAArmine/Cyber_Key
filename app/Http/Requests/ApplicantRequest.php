<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Foundation\Http\FormRequest;

class ApplicantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:70',
            'email1' => 'required|email',
            'checkbox' => 'required_without_all',
            'attached_cv' => 'required',
        ];
    }

    public function messages(){
        return [
        'name.required' => trans('validation.userName.required',[],App::getLocale()),
        'name.min' => trans('validation.userName.min',[],App::getLocale()),
        'name.max' => trans('validation.userName.max',[],App::getLocale()),


        'email1.required' => trans('validation.userEmail.required',[],App::getLocale()),
        'email1.email' => trans('validation.userEmail.email',[],App::getLocale()),
        
        'checkbox.required_without_all' =>trans('validation.checkbox',[],App::getLocale()),

        'attached_cv.required' => trans('validation.attached_cv',[],App::getLocale()),

    ];
}
}
