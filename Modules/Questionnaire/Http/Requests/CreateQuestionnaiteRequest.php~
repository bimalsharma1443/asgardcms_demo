<?php namespace Modules\Questionnaire\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuestionnaiteRequest extends FormRequest
{
    public function rules()
    {
        return [
            'question' => 'required',
            'answer' => 'required',
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
