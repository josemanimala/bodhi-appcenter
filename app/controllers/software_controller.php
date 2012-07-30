<?php
App::import('Sanitize');
class SoftwareController extends AppController {
  #controller name
  var $name = 'Software';
  #load the helpers we need
  var $helpers = array('Html', 'Javascript', 'Ajax','Rss');
  #load the tables we are going to use
  var $uses = array('Software','Softbundle','Meta');
  #component handler for RSS feed
  var $components = array('RequestHandler');
  
  #load the Sanitize module, we need this to prevent XSS and sql injection attacks.
  function beforeFilter()
  {
	$this->Sanitize = new Sanitize();
	#Adding in data for the Arch menu for every page.
	$archTypeDBList = $archTypeDBList = $this->Software->find('all',array('fields'=>'DISTINCT arch'));
	$this->set('archTypeDBList',$archTypeDBList);
  }

  #softbundles are here!
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
  #function to handle subcategories.
  function showL2()
  {
	#fetch params
	$params = $this->params['pass'];
	$softSubCat= $params[0];
	#arch type
	if($params[1]!="")
        {
                $archType = $params[1];
        }
        else
        {#defaults to i386 if no arch is specified.
                $archType = "i386";
        }
	$this->Session->write('arch', $archType);
	#search for subcategory
	$data = $this->Software->find('all',array('conditions'=>'Software.softSubCat='."'".$softSubCat."'  AND Software.arch='".$archType."'",'order'=>array('Software.softName ASC'),'fields' => array('DISTINCT Software.softName')));
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
  
  #show each software and its full description, added meta.
  function showDesc()
  {	
	$params = $this->params['pass'];
	$softName= $params[0];
	#Filter and handle architecture parameters
	if($params[1]!="")
	{
		$archType = $params[1];
	}
	else
	{#defaults to i386 if no arch is specified.
		$archType = "i386";	
	}
	$this->Session->write('arch', $archType);
	#added architecture filter condition
	$data = $this->Software->find('all',array('conditions'=>'Software.softName='."'".$softName."' AND Software.arch='".$archType."'"));
	#Total architectures supported for a particular application
	$archTypeList = $this->Software->find('all',array('fields'=>'DISTINCT arch','conditions'=>'Software.softName='."'".$softName."'"));
	#Call to meta Handler
	$metaSoftList = $this->metaHandler($data[0]['Software']['softName'],$data[0]['Software']['softSubCat'],$data[0]['Software']['softCat'],$archType);
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
		#set the archtype list for display
		$this->set('archTypeList',$archTypeList);
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
		if (strlen($query) >= 3)
		{
			#Call to meta Handler
			$metaSoftList = $this->metaHandler($query,$query,$query);
			#woah launch a mega DB search
			$result = $this -> Software -> find('all',array('conditions'=>"softName LIKE '%".$query."%' OR softCat LIKE '%".str_replace(" ","_",$query)."%' OR softSubCat LIKE '%".str_replace(" ","_",$query)."%'"));
			foreach($result as $var)
			{
				array_push($metaSoftList,$var['Software']['softName']);
			}
			#remove duplicates
			$metaSoftList = array_unique($metaSoftList);
			#remove test value
			array_shift($metaSoftList);
			#reverse for priority, show subcat first then meta.
			$metaSoftList = array_reverse($metaSoftList);
			$this->set('result', $metaSoftList);
			$this->layout = 'ajax';
		}
	}
}

#description similar to search function, but handles only on clicking enter button in the search box. (Future disable the enter button).
#duplicated code, need a fix for this in a future version.
function searchPost()
{
	#postback characters
	if (!empty($this->data['Software']['search']))
	{
		#santize and remove any stupid typo errors/ sql injection code
		$query = $this -> Sanitize -> paranoid($this->data['Software']['search'],array(' '));
		#future handler to ensure that we can limit the search to trigger only for more than N characters
		if (strlen($query) >= 3)
		{
			#Call to meta Handler
			$metaSoftList = $this->metaHandler($query,$query,$queryi,$this->Session->read('arch'));
			#woah launch a mega DB search
			$result = $this -> Software -> find('all',array('conditions'=>"softName LIKE '%".$query."%' OR softCat LIKE '%".str_replace(" ","_",$query)."%' OR softSubCat LIKE '%".str_replace(" ","_",$query)."%'"));
			foreach($result as $var)
			{
				array_push($metaSoftList,$var['Software']['softName'].",".$var['Software']['arch']);
			}
			#remove duplicates
			$metaSoftList = array_unique($metaSoftList);
			#remove test value
			array_shift($metaSoftList);
			#reverse for priority, show subcat first then meta.
			$metaSoftList = array_reverse($metaSoftList);
			$this->set('result', $metaSoftList);	
			$this->render('search');
		}
	}
}

#Lets burn a feed for the people.
function generatefeed(){
	#Filter and handle architecture parameters
        if($params[0]!="")
        {
                $archType = $params[0];
        }
        else
        {#defaults to i386 if no arch is specified.
                $archType = "i386";
        }
	#grab the top 20 changed/updated softwares
	$software = $this->Software->find('all',array('condition'=>'Software.arch="'.$archType.'"'),array('order'=>array('Software.entry_date DESC'),'limit' => 20));
	#hmm checking for particular feed (feed.rss).
	if(isset($this->params['requested'])) {
                         return $software;
                 }
                 $this->set('software',$software );
}

function metaHandler($softName,$softSubCat,$softCat,$archType='i386')
{
	#meta search results added :)
	$metaSoftList[]="test";
	#find similar soft
	$simSoft = $this->Meta-> find('all',array('conditions'=>"metainfo LIKE '%".$softName."%' OR metainfo LIKE '%".str_replace(" ","_",$softSubCat)."%' OR metainfo LIKE '%".str_replace(" ","_",$softCat)."%'"));
	#split similar software
	$simSoft = explode(':',$simSoft[0]['Meta']['metaInfo']);
	#prevent sql table dump
	if ($simSoft[0]!="")
	{
		#create similar software to display from meta
		foreach($simSoft as $var)
		{
			#take a crack with each meta record to find a match, this is a greedy database search statement.
			$metaSoft = $this -> Software -> find('all',array('conditions'=>"Software.arch='".$archType."' and  softName LIKE '%".$var."%' OR softCat LIKE '%".str_replace(" ","_",$var)."%' OR softSubCat LIKE '%".str_replace(" ","_",$var)."%'",'fields'=>array('Software.softName')));
			foreach($metaSoft as $metaSoftName)
			{
				#push everything into a single array, easier to manage
				array_push($metaSoftList,$metaSoftName['Software']['softName']);
			}
		}
		#chuck back the data
	}
	return $metaSoftList;
}

#Arch pages and listing.
function arch()
{
	$params = $this->params['pass'];
	if($params[0]!="")
	{
		$archType = $params[0];
	}
	else
	{#defaults to i386 if no arch is specified.
		$archType = "i386";	
	}
	$archTypeDBList = $archTypeDBList = $this->Software->find('all',array('fields'=>'DISTINCT arch'));
	$flag = "noSupport";
	foreach($archTypeDBList as $var)
	{
		if($var['Software']['arch']==$archType)
		{
			$flag = "archSupported";
		}
	}
	if($flag=="archSupported")
	{
		$data = $this->Software->find('all',array('fields'=>'DISTINCT Software.softName','conditions'=>"Software.arch='".$archType."' ORDER BY Software.softName ASC"));
		$this->set('softNames',$data);
		$this->set('archType',$archType);
	}
	else
	{
		$this->set('archError',"Not supported");
	}
}


}
?>
