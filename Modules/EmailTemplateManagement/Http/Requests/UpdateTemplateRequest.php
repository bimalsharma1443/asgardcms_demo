<?php namespace Modules\EmailTemplateManagement\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class UpdateTemplateRequest extends BaseFormRequest
{
    protected $translationsAttributesKey = 'emailtemplatemanagement::emailtemplatemanagement__email_templates.validation.attributes';

    public function rules()
    {
        return [
            
        ];
    }

    public function translationRules()
    {
        return [
            
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            
        ];
    }

    public function translationMessages()
    {
        return [
            
        ];
    }
}
