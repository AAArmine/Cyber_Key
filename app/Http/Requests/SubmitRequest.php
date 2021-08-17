<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;

class SubmitRequest extends FormRequest
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
            'email' => 'required|email|unique:submits',
        ];
    }
    public function messages(){
            return [
            'email.required' => trans('validation.email.required',[],App::getLocale()),
            'email.email' => trans('validation.email.email',[],App::getLocale()),
            'email.unique' => trans('validation.email.unique',[],App::getLocale()),
        ];
    }
}
