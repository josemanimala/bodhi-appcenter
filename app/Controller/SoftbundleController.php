<?PHP

class SoftbundleController extends AppController {

	var $user;
	public function beforeFilter() {
		parent::beforeFilter();
		
	}

	public function index() {
		$softbundle = $this->Softbundle->find('all');
		return new CakeResponse(array('body' => json_encode($softbundle),'type' => 'json'));
	}

	public function uname() {
		$this->user = $this->request->params['pass'][0];
		$softbundle = $this->Softbundle->find('all',array('conditions' => array('Software.arch =' => $this->user)));
		return new CakeResponse(array('body' => json_encode($softbundle),'type' => 'json'));
	}
}

?>
