<?php
class SoftwareController extends AppController {
 
  var $name = 'Software';

  function index() {
	
  }
  function softbundles() {
 	
  }
  function showL2()
  {
	$params = $this->params['pass'];
	$softSubCat= $params[0];
	$data = $this->Software->find('all',array('conditions'=>'Software.softSubCat='."'".$softSubCat."'",'fields' => array('Software.softName')));
	$this->set('data',$data);
	$this->set('softSubCat',$softSubCat);
  }
  function showDesc()
  {
	$params = $this->params['pass'];
	$softName= $params[0];
	$data = $this->Software->find('all',array('conditions'=>'Software.softName='."'".$softName."'"));
	$this->set('data',$data);
  }
}
?>
