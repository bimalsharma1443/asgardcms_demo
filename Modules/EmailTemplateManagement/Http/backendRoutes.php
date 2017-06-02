<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/emailtemplatemanagement'], function (Router $router) {
    $router->bind('email_template', function ($id) {
        return app('Modules\EmailTemplateManagement\Repositories\Email_TemplateRepository')->find($id);
    });
    $router->get('email_templates', [
        'as' => 'admin.emailtemplatemanagement.email_template.index',
        'uses' => 'Email_TemplateController@index',
        'middleware' => 'can:emailtemplatemanagement.email_templates.index'
    ]);
    $router->get('email_templates/create', [
        'as' => 'admin.emailtemplatemanagement.email_template.create',
        'uses' => 'Email_TemplateController@create',
        'middleware' => 'can:emailtemplatemanagement.email_templates.create'
    ]);
    $router->post('email_templates', [
        'as' => 'admin.emailtemplatemanagement.email_template.store',
        'uses' => 'Email_TemplateController@store',
        'middleware' => 'can:emailtemplatemanagement.email_templates.store'
    ]);
    $router->get('email_templates/{email_template}/edit', [
        'as' => 'admin.emailtemplatemanagement.email_template.edit',
        'uses' => 'Email_TemplateController@edit',
        'middleware' => 'can:emailtemplatemanagement.email_templates.edit'
    ]);
    $router->put('email_templates/{email_template}', [
        'as' => 'admin.emailtemplatemanagement.email_template.update',
        'uses' => 'Email_TemplateController@update',
        'middleware' => 'can:emailtemplatemanagement.email_templates.update'
    ]);
    $router->delete('email_templates/{email_template}', [
        'as' => 'admin.emailtemplatemanagement.email_template.destroy',
        'uses' => 'Email_TemplateController@destroy',
        'middleware' => 'can:emailtemplatemanagement.email_templates.destroy'
    ]);
// append

});
