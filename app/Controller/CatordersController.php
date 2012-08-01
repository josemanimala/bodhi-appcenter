<?PHP

class CatordersController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$catorders = $this->Catorder->find('all');
		return new CakeResponse(array('body' => json_encode($catorders),'type' => 'json'));
	}

}

?>
