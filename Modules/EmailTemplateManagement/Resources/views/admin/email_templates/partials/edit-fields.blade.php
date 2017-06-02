<div class="box-body">
   <div class="row">
			<div class="col-md-offset-3 col-md-6">          
            <p>
               <?php echo $email_template->hasTranslation($lang) ? $email_template->translate($lang)->descriptions : '' ?>
            </p>
         </div>
         <div class="col-md-offset-3 col-md-6">   			
				{!! Form::label('title', trans('emailtemplatemanagement::email_templates.form.title')) !!}
				{!! Form::text('title', Input::old("title",$email_template->title), ['class' => 'form-control', 'placeholder' => trans('emailtemplatemanagement::email_templates.form.title'),'disabled' => 'disabled']) !!}
			</div>
			<div class="col-md-offset-3 col-md-6">
				<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
               {!! Form::label("{$lang}[subject]", trans('emailtemplatemanagement::email_templates.form.subject')) !!}
               <?php $old = $email_template->hasTranslation($lang) ? $email_template->translate($lang)->subject : '' ?>
   				{!! Form::text("{$lang}[subject]", Input::old("{$lang}.subject", $old), ['class' => 'form-control', 'placeholder' => trans('emailtemplatemanagement::email_templates.form.subject')]) !!}
			   </div>
         </div>
			<div class="col-md-offset-3 col-md-6">
            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
   				{!! Form::label("{$lang}[body]", trans('emailtemplatemanagement::email_templates.form.body')) !!}
               <?php $old = $email_template->hasTranslation($lang) ? $email_template->translate($lang)->body : '' ?>
   				<textarea class="ckeditor" name="{{$lang}}[body]" rows="10" cols="80">
   					 {!! old("{$lang}.body", $old) !!}
   				</textarea>
            </div>
			</div>
   </div>
</div>
