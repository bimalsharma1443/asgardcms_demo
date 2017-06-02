<?php namespace Modules\Questionnaire\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Questionnaire\Entities\Questionnaire;
use Modules\Questionnaire\Repositories\QuestionnaireRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Questionnaire\Http\Requests\CreateQuestionnaiteRequest;
use Modules\Questionnaire\Http\Requests\UpdateQuestionnaiteRequest;

class QuestionnaireController extends AdminBaseController
{
    /**
     * @var QuestionnaireRepository
     */
    private $questionnaire;

    public function __construct(QuestionnaireRepository $questionnaire)
    {
        parent::__construct();

        $this->questionnaire = $questionnaire;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $questionnaires = $this->questionnaire->all();
        return view('questionnaire::admin.questionnaires.index', compact('questionnaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('questionnaire::admin.questionnaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(CreateQuestionnaiteRequest $request)
    {
        $this->questionnaire->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('questionnaire::questionnaires.title.questionnaires')]));

        return redirect()->route('admin.questionnaire.questionnaire.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Questionnaire $questionnaire
     * @return Response
     */
    public function edit(Questionnaire $questionnaire)
    {
        // print_r($questionnaire['id']); die;
        return view('questionnaire::admin.questionnaires.edit', compact('questionnaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Questionnaire $questionnaire
     * @param  Request $request
     * @return Response
     */
    public function update(Questionnaire $questionnaire, UpdateQuestionnaiteRequest $request)

    {

        $this->questionnaire->update($questionnaire, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('questionnaire::questionnaires.title.questionnaires')]));

        return redirect()->route('admin.questionnaire.questionnaire.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Questionnaire $questionnaire
     * @return Response
     */
    public function destroy(Questionnaire $questionnaire)
    {
        $this->questionnaire->destroy($questionnaire);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('questionnaire::questionnaires.title.questionnaires')]));

        return redirect()->route('admin.questionnaire.questionnaire.index');
    }


public function unset_data(Questionnaire $questionnaire)
    {
        $this->questionnaire->destroy($questionnaire);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('questionnaire::questionnaires.title.questionnaires')]));

        return redirect()->route('admin.questionnaire.questionnaire.index');
    }



}
