<?php namespace Modules\EmailTemplateManagement\Entities;

use Illuminate\Database\Eloquent\Model;

class Email_TemplateTranslation extends Model
{
    protected $table = 'emailtemplatemanagement__email_templates_translations';
    protected $fillable = [
        'email__template_id',
        'locale',
        'subject',
        'body',
        'descriptions',
    ];
}
