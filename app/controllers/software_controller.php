<?php
App::import('Sanitize');
class SoftwareController extends AppController {
  var $name = 'Software';
  var $helpers = array('Html', 'Javascript', 'Ajax');
  var $uses = array('Software','Softbundle');
  function beforeFilter()
  {
	$this->Sanitize = new Sanitize();
  }
  function index() {
	
  }
  function softbundles() {
 	$id = $this->params['pass'][0];
	$data = $this->Softbundle->find('all',array('conditions'=>'Softbundle.id='."'".$id."'"));
	$this->set('data',$data);
  }
  function showL2()
  {
	$params = $this->params['pass'];
	$softSubCat= $params[0];
	$data = $this->Software->find('all',array('conditions'=>'Software.softSubCat='."'".$softSubCat."'",'order'=>array('Software.softName ASC'),'fields' => array('Software.softName')));
	print_r($data);
		    $this->cakeError('oopsError', array('page'=>'showL2'));
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
  function search() {
	if (!empty($this->data['Software']['search']))
	{
	$query = $this -> Sanitize -> paranoid($this->data['Software']['search'],array(' '));
	if (strlen($query) > 0)
	{
		$result = $this -> Software -> find('all',array('conditions'=>"softName LIKE '%".$query."%' OR softCat LIKE '%".str_replace(" ","_",$query)."%' OR softSubCat LIKE '%".str_replace(" ","_",$query)."%'"));
		$this->set('result', $result);
		$this->layout = 'ajax';
	}
	}
}
function searchPost()
{
	if (!empty($this->data['Software']['search']))
	{
	$query = $this -> Sanitize -> paranoid($this->data['Software']['search'],array(' '));
	if (strlen($query) > 0)
	{
		$result = $this -> Software -> find('all',array('conditions'=>"softName LIKE '%".$query."%' OR softCat LIKE '%".str_replace(" ","_",$query)."%' OR softSubCat LIKE '%".str_replace(" ","_",$query)."%'"));
		$this->set('result', $result);	
	$this->render('search');
	}
	}
}
}
?>
