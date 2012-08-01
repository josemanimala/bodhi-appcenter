<?PHP

class SoftwareController extends AppController {

	var $arch;
	public function beforeFilter() {
		parent::beforeFilter();
		if(isset($this->request->params['pass'][0]))
		{
			$this->arch = $this->request->params['pass'][0];
		}
		else
		{
			$this->arch = "i386";
		}
	}

	public function index() {
		$softwareNew=array();
		$software = $this->Software->find('all',array('conditions' => array('Software.arch =' => $this->arch)));
		foreach($software as $val)
		{
			array_push($softwareNew,$val['Software']);
		}
		return new CakeResponse(array('body' => json_encode($softwareNew),'type' => 'json'));
	}

}

?>
