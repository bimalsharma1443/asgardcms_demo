<?php namespace Modules\Emailtemplatemanagement\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\EmailTemplateManagement\Repositories\Email_TemplateRepository;

class EmailTemplateManagementDatabaseSeeder extends Seeder {

	
	private $emailtemplatemanagement;

    public function __construct(Email_TemplateRepository $emailtemplatemanagement)
    {
        $this->emailtemplatemanagement = $emailtemplatemanagement;
    }


	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$data = [
			'slug' => 'slug',
			'title' => 'title', 
			'subject' => 'subject',
			'body' => 'body',
			'descriptions' => 'descriptions',
		];

		 $this->emailtemplatemanagement->create($data);
	}

}