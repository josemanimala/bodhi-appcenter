<?PHP
// Report all PHP errors
error_reporting(-1);
class AuthController extends AppController {

	public function index() {
		$username = $this->request->params['pass'][0];
		$password = $this->request->params['pass'][1];
		$this->Session->write("username",$username);
		$this->Session->write("password",$password);
		App::import('Vendor', 'bodhiauth');
		$bodhiauth = new bodhiauth();
		$return = array("authenticated"=>$bodhiauth->checkPass($username,$password));
		return new CakeResponse(array('body' => json_encode($return),'type' => 'json'));
	}

	public function userData() {
		$username = $this->Session->read("username");
		$password = $this->Session->read("password");
		if($username and $password)
		{
			App::import('Vendor', 'bodhiauth');
			$bodhiauth = new bodhiauth();
			$return = $bodhiauth->getUserData($username,$password);
			return new CakeResponse(array('body' => json_encode($return),'type' => 'json'));
		}
		else
		{	
			$error = array("Status"=>"error","message"=>"Please authenticate first.");
			return new CakeResponse(array('body' => json_encode($return),'type' => 'json'));
		}
	}
	
}
