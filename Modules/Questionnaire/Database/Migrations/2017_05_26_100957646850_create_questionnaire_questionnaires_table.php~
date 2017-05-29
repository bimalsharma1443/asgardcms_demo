<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnaireQuestionnairesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questionnaire__questionnaires', function(Blueprint $table) {
		$table->engine = 'InnoDB';
            	$table->increments('id');
            	// Your fields
		$table->string('question');
                $table->text('answer');
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
		Schema::drop('questionnaire__questionnaires');
	}
}
