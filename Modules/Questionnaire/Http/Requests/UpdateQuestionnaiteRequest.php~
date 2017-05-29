<?php namespace Modules\Questionnaire\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuestionnaiteRequest extends FormRequest
{
    public function rules()
    {
        $userId = $this->route()->getParameter('users');

        return [
            'question'=>'required',
             'answer'=>'required'
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }
}
