<?php namespace Modules\EmailTemplateManagement\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Email_Template extends Model
{
    use Translatable;

    protected $table = 'emailtemplatemanagement__email_templates';
    public $translatedAttributes = [
        'email__template_id',
        'locale',
        'subject',
        'body',
        'descriptions',
    ];
    protected $fillable = [
        'slug',
        'title',
        'email__template_id',
        'locale',
        'subject',
        'body',
        'descriptions',
    ];

     public function __call($method, $parameters)
    {
        #i: Convert array to dot notation
        $config = implode('.', ['asgard.emailtemplatemanagement.config.relations', $method]);
        die('in');
        #i: Relation method resolver
        if (config()->has($config)) {
            $function = config()->get($config);

            return $function($this);
        }

        #i: No relation found, return the call to parent (Eloquent) to handle it.
        return parent::__call($method, $parameters);
    }

}