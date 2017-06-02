<?php namespace Modules\EmailTemplateManagement\Http\Controllers\Admin;

use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\EmailTemplateManagement\Entities\Email_Template;
use Modules\EmailTemplateManagement\Http\Requests\UpdateTemplateRequest;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\EmailTemplateManagement\Repositories\Email_TemplateRepository;


class Email_TemplateController extends AdminBaseController
{
    /**
     * @var Email_TemplateRepository
     */
    private $email_template;

    public function __construct(Email_TemplateRepository $email_template)
    {
        parent::__construct();

        $this->email_template = $email_template;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $email_templates = $this->email_template->all();

        return view('emailtemplatemanagement::admin.email_templates.index', compact('email_templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    // public function create()
    // {
    //     return view('emailtemplatemanagement::admin.email_templates.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    // public function store(Request $request)
    // {
    //     $this->email_template->create($request->all());

    //     flash()->success(trans('core::core.messages.resource created', ['name' => trans('emailtemplatemanagement::email_templates.title.email_templates')]));

    //     return redirect()->route('admin.emailtemplatemanagement.email_template.index');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Email_Template $email_template
     * @return Response
     */
    public function edit(Email_Template $email_template)
    {
        return view('emailtemplatemanagement::admin.email_templates.edit', compact('email_template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Email_Template $email_template
     * @param  Request $request
     * @return Response
     */
    public function update(Email_Template $email_template, UpdateTemplateRequest $request)
    {
        $this->email_template->update($email_template, $request->all());
        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('emailtemplatemanagement::email_templates.title.email_templates')]));

        return redirect()->route('admin.emailtemplatemanagement.email_template.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Email_Template $email_template
     * @return Response
     */
    // public function destroy(Email_Template $email_template)
    // {
    //     $this->email_template->destroy($email_template);

    //     flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('emailtemplatemanagement::email_templates.title.email_templates')]));

    //     return redirect()->route('admin.emailtemplatemanagement.email_template.index');
    // }
}
