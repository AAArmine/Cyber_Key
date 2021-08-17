<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Foundation\Http\FormRequest;

class InvestorRequest extends FormRequest
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
                'investorEmail' => 'required|email',
        ];
    }

    public function messages() 
    {
        return [
            'investorEmail.required' => trans('validation.email.required',[],App::getLocale()),
            'investorEmail.email' => trans('validation.email.email',[],App::getLocale()),

        ];
    }

}
