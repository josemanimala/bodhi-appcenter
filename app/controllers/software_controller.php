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
	#fetch params
	$params = $this->params['pass'];
	$softSubCat= $params[0];
	#search for subcategory
	$data = $this->Software->find('all',array('conditions'=>'Software.softSubCat='."'".$softSubCat."'",'order'=>array('Software.softName ASC'),'fields' => array('Software.softName')));
	#create error handler
	if(!empty($data))
	{
		#set display variables
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
	$params = $this->params['pass'];
	$softName= $params[0];
	$data = $this->Software->find('all',array('conditions'=>'Software.softName='."'".$softName."'"));
	#Call to meta Handler
	$metaSoftList = $this->metaHandler($data[0]['Software']['softName'],$data[0]['Software']['softSubCat'],$data[0]['Software']['softCat']);
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

#live search handler
function search() {
	#postback characters
	if (!empty($this->data['Software']['search']))
	{
	#santize and remove any stupid typo errors/ sql injection code
	$query = $this -> Sanitize -> paranoid($this->data['Software']['search'],array(' '));
	#future handler to ensure that we can limit the search to trigger only for more than N characters
	if (strlen($query) > 3)
	{
		#woah launch a mega DB search
		$result = $this -> Software -> find('all',array('conditions'=>"softName LIKE '%".$query."%' OR softCat LIKE '%".str_replace(" ","_",$query)."%' OR softSubCat LIKE '%".str_replace(" ","_",$query)."%'"));
		$this->set('result', $result);
		$this->layout = 'ajax';
	}
	}
}

#description similar to search function, but handles only on clicking enter button in the search box. (Future disable the enter button).
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

#Lets burn a feed for the people.
function generatefeed(){
	#grab the top 20 changed/updated softwares
	$software = $this->Software->find('all',array('order'=>array('Software.entry_date DESC'),'limit' => 20));
	#hmm checking for particular feed (feed.rss).
	if(isset($this->params['requested'])) {
                         return $software;
                 }
                 $this->set('software',$software );
}

function metaHandler($softName,$softSubCat,$softCat)
{
	#meta search results added :)
	$metaSoftList[]="test";
	#find similar soft
	$simSoft = $this->Meta-> find('all',array('conditions'=>"metainfo LIKE '%".$softName."%' OR metainfo LIKE '%".str_replace(" ","_",$softSubCat)."%' OR metainfo LIKE '%".str_replace(" ","_",$softCat)."%'"));
	#split similar software
	$simSoft = explode(':',$simSoft[0]['Meta']['metaInfo']);
	#create similar software to display from meta
	foreach($simSoft as $var)
	{
		#take a crack with each meta record to find a match, this is a greedy database search command.
		$metaSoft = $this -> Software -> find('all',array('conditions'=>"softName LIKE '%".$var."%' OR softCat LIKE '%".str_replace(" ","_",$var)."%' OR softSubCat LIKE '%".str_replace(" ","_",$var)."%'",'fields'=>array('Software.softName')));
		foreach($metaSoft as $metaSoftName)
		{
			#push everything into a single array, easier to manage
			array_push($metaSoftList,$metaSoftName['Software']['softName']);
		}
	}
	#chuck back the data
	return $metaSoftList;
}

}
?>
