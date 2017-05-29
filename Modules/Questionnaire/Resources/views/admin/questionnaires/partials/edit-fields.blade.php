<div class="box-body">
    <p>
        <div class="box-body">
	    {!! Form::text("question", old("{$questionnaire}.question", "{$questionnaire['question']}"), ['class' => 'form-control', 'data-slug' => 'source', 'placeholder' => 'Question']) !!}
	    <textarea class="ckeditor" name="{{$lang}}[body]" rows="10" cols="80">
                {!! old("$questionnaire.answer", "{$questionnaire['answer']}") !!}
            </textarea>
	</div>
    </p> 
</div>