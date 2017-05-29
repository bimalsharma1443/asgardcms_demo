<?php namespace Modules\Questionnaire\Repositories\Cache;

use Modules\Questionnaire\Repositories\QuestionnaireRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheQuestionnaireDecorator extends BaseCacheDecorator implements QuestionnaireRepository
{
    public function __construct(QuestionnaireRepository $questionnaire)
    {
        parent::__construct();
        $this->entityName = 'questionnaire.questionnaires';
        $this->repository = $questionnaire;
    }
}
