<?php namespace Modules\EmailTemplateManagement\Events;

class TemplateWasUpdated
{
    /**
     * @var array
     */
    public $data;
    /**
     * @var int
     */
    public $email__templateId;

    public function __construct($emailTemplateId, array $data)
    {
        $this->data = $data;
        $this->email__templateId = $emailTemplateId;
    }
}
