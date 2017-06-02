<?php namespace Modules\EmailTemplateManagement\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Builder;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use Modules\EmailTemplateManagement\Events\TemplateWasUpdated;
use Modules\EmailTemplateManagement\Repositories\Email_TemplateRepository;

class EloquentEmail_TemplateRepository extends EloquentBaseRepository implements Email_TemplateRepository
{

	/**
     * @param $model
     * @param  array  $data
     * @return object
     */
    public function update($model, $data)
    {
        $model->update($data);

        event(new TemplateWasUpdated($model->id, $data));
        return $model;
    }



}
