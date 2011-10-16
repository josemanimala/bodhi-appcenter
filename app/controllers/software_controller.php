<?php
App::import('Sanitize');
class SoftwareController extends AppController {
  var $name = 'Software';
  var $helpers = array('Html', 'Javascript', 'Ajax','Rss');
  var $uses = array('Software','Softbundle','Meta');
    var $components = array('RequestHandler');
  function beforeFilter()
  {
	$this->Sanitize = new Sanitize();
  }
  function index() {
	
  }
  function softbundles() {
 	$id = $this->params['pass'][0];
	$data = $this->Softbundle->find('all',array('conditions'=>'Softbundle.id='."'".$id."'"));
	if(!empty($data))
	{
		$this->set('data',$data);
	}
	else
	{
			    $this->cakeError('oopsError', array('page'=>'softbundles'.$id));
	}
  }
  function showL2()
  {
	$params = $this->params['pass'];
	$softSubCat= $params[0];
	$data = $this->Software->find('all',array('conditions'=>'Software.softSubCat='."'".$softSubCat."'",'order'=>array('Software.softName ASC'),'fields' => array('Software.softName')));
	if(!empty($data))
	{
		$this->set('data',$data);
		$this->set('softSubCat',$softSubCat);
	}
	else
	{
			    $this->cakeError('oopsError', array('page'=>'showL2'.$softSubCat));
	}
  }
  function showDesc()
  {	
	#meta search results added :)
	$metaSoftList[]="test";
	$params = $this->params['pass'];
	$softName= $params[0];
	$data = $this->Software->find('all',array('conditions'=>'Software.softName='."'".$softName."'"));
	#find similar soft
	$simSoft = $this->Meta-> find('all',array('conditions'=>"metainfo LIKE '%".$data[0]['Software']['softName']."%' OR metainfo LIKE '%".str_replace(" ","_",$data[0]['Software']['softSubCat'])."%' OR metainfo LIKE '%".str_replace(" ","_",$data[0]['Software']['softCat'])."%'"));
	#split similar software
	$simSoft = explode(':',$simSoft[0]['Meta']['metaInfo']);
	#create similar software to display from meta
	foreach($simSoft as $var)
	{
		$metaSoft = $this -> Software -> find('all',array('conditions'=>"softName LIKE '%".$var."%' OR softCat LIKE '%".str_replace(" ","_",$var)."%' OR softSubCat LIKE '%".str_replace(" ","_",$var)."%'",'fields'=>array('Software.softName')));
		foreach($metaSoft as $metaSoftName)
		{
			array_push($metaSoftList,$metaSoftName['Software']['softName']);
		}
	}
	if(!empty($data))
	{
		#append subcategory to the meta array
		$list = $this->Software->find('all',array('conditions'=>'Software.softSubCat='."'".$data[0]['Software']['softSubCat']."'",'fields'=>array('Software.softName')));
		foreach($list as $var)
		{
			array_push($metaSoftList,$var['Software']['softName']);
		}
		#remove duplicates
		$metaSoftList = array_unique($metaSoftList);
		#remove test value
		array_shift($metaSoftList);
		#reverse for priority, show subcat first then meta.
		$metaSoftList = array_reverse($metaSoftList);
		$this->set('data',$data);
		#set the new meta variable, no change to view, only to the core logic!
		$this->set('list',$metaSoftList);
	}
	else
	{
			    $this->cakeError('oopsError', array('page'=>'showDesc'.$softName));
	}
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
function generatefeed(){

	$software = $this->Software->find('all',array('order'=>array('Software.entry_date DESC'),'limit' => 20));
	if(isset($this->params['requested'])) {
                         return $software;
                 }
                 $this->set('software',$software );

}
}
?>
