<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;

class ContactRequest extends FormRequest
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
            'userName' => 'required|min:2|max:50',
            'userPhone' => 'required|regex:/^[0-9\s\-\+]*$/',
            'userEmail' => 'required|email',
            'userCountry' => 'required|min:3|max:60',
            'userMessage' => 'required|min:5',

            
        ];
    }

    public function messages(){
        return [
        'userName.required' => trans('validation.userName.required',[],App::getLocale()),
        'userName.min' => trans('validation.userName.min',[],App::getLocale()),
        'userName.max' => trans('validation.userName.max',[],App::getLocale()),

        'userPhone.required' => trans('validation.userPhone.required',[],App::getLocale()),
        'userPhone.regex' => trans('validation.userPhone.regex',[],App::getLocale()),

        'userEmail.required' => trans('validation.userEmail.required',[],App::getLocale()),
        'userEmail.email' => trans('validation.userEmail.email',[],App::getLocale()),

        'userCountry.required' => trans('validation.userCountry.required',[],App::getLocale()),
        'userCountry.min' => trans('validation.userCountry.min',[],App::getLocale()),
        'userCountry.max' => trans('validation.userCountry.max',[],App::getLocale()),

        'userMessage.required' => trans('validation.userMessage.required',[],App::getLocale()),
        'userMessage.min' => trans('validation.userMessage.min',[],App::getLocale()),
    ];
}
}
