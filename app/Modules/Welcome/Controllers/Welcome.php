<?php 
namespace App\Modules\Welcome\Controllers;
use App\Controllers\BaseController;
use App\Modules\Welcome\Models\WelcomeModel;

/**
 * Class Admin
 */
class Welcome extends BaseController {

 	/**
     * Constructor.
     */

    public function __construct()
    {
     	$this->welcomeModel = new WelcomeModel();
	}

    public function index() {
		$data['text'] = 'Showing through HMVC module. Location: App\Modules\Welcome\Views\welcome_message.php';
        $data['s'] = $this->welcomeModel->getUsers();
        echo view('App\Modules\Welcome\Views\welcome_message', $data);
    }
}
