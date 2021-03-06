<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailTemplateManagementEmailTemplatesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emailtemplatemanagement__email_templates', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            	$table->increments('id');
            	// Your fields
			    $table->string('slug');        		
				$table->string('title');
				$table->string('subject');
				$table->text('body');
				$table->text('descriptions');
				$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('emailtemplatemanagement__email_templates');
	}
}
