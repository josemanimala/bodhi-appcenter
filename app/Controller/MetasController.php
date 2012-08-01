<?PHP

class MetasController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$meta = $this->Meta->find('all');
		return new CakeResponse(array('body' => json_encode($meta),'type' => 'json'));
	}

}

?>
