<?php namespace Modules\EmailTemplateManagement\Repositories\Cache;

use Modules\EmailTemplateManagement\Repositories\Email_TemplateRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheEmail_TemplateDecorator extends BaseCacheDecorator implements Email_TemplateRepository
{
    public function __construct(Email_TemplateRepository $email_template)
    {
        parent::__construct();
        $this->entityName = 'emailtemplatemanagement.email_templates';
        $this->repository = $email_template;
    }
}
