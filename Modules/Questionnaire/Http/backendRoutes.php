<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/questionnaire'], function (Router $router) {
    $router->bind('questionnaire', function ($id) {
        return app('Modules\Questionnaire\Repositories\QuestionnaireRepository')->find($id);
    });
    $router->get('questionnaires', [
        'as' => 'admin.questionnaire.questionnaire.index',
        'uses' => 'QuestionnaireController@index',
        'middleware' => 'can:questionnaire.questionnaires.index'
    ]);
    $router->get('questionnaires/create', [
        'as' => 'admin.questionnaire.questionnaire.create',
        'uses' => 'QuestionnaireController@create',
        'middleware' => 'can:questionnaire.questionnaires.create'
    ]);
    $router->post('questionnaires', [
        'as' => 'admin.questionnaire.questionnaire.store',
        'uses' => 'QuestionnaireController@store',
        'middleware' => 'can:questionnaire.questionnaires.store'
    ]);
    $router->get('questionnaires/{questionnaire}/edit', [
        'as' => 'admin.questionnaire.questionnaire.edit',
        'uses' => 'QuestionnaireController@edit',
        'middleware' => 'can:questionnaire.questionnaires.edit'
    ]);
    $router->put('questionnaires/{questionnaire}', [
        'as' => 'admin.questionnaire.questionnaire.update',
        'uses' => 'QuestionnaireController@update',
        'middleware' => 'can:questionnaire.questionnaires.update'
    ]);
    $router->delete('questionnaires/{questionnaire}', [
        'as' => 'admin.questionnaire.questionnaire.destroy',
        'uses' => 'QuestionnaireController@destroy',
        'middleware' => 'can:questionnaire.questionnaires.destroy'
    ]);
// append

});
