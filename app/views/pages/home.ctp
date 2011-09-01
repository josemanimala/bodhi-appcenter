<h1 class="sectionedit1"><a name="bodhi_linux_add_software_home" id="bodhi_linux_add_software_home">Bodhi Linux Add Software Home</a></h1> 
<div class="level1"> 
<p> 
Welcome to the Bodhi Linux software page. Here you will find easy to install software for any task on your Bodhi desktop! Note that Midori or Firefox are <strong>REQUIRED</strong> for the “Install Now” method. The “Download” method will work in any browser. Please see the Installation Instructions.
</p> 
 
</div> 
<h2 class="sectionedit1"><a>Software bundles</a></h2> 
<div class="level2"> 
 
<p> 
<?PHP  
echo $html->link('Nikhila Application Set', array(     'controller' => 'software',      'action' => 'softbundles',1)); ?><br/> 

An Application Suite of full featured software.
</p> 
 
<p> 
<?PHP  echo $html->link('Pratibha Application Set', array(     'controller' => 'software',      'action' => 'softbundles',2)); ?><br/> 
 
An Application Suite that focuses on packages that are light on resources but high on functionality.
</p> 
 
</div>
<h2 class="sectionedit1"><a>Software Categories</a></h2> 
<div class="level2"> 
 
<?PHP
$var="";
foreach($software as $var)
{ ?>
<h3 class="sectionedit4"><a><?PHP echo str_replace("_"," ",$var); ?></a></h3> 
<?PHP
	$flag=0;
	for($i=0;$i<$softcount;$i++)
	{ ?>
		<?PHP
		if(${'w00t' . $i}[0]['Software']['softCat'] == $var)
		{ 
			if($flag<1)
			{	
				echo '<div class="level3"> 
				     <ul>';
			}
			$count = ClassRegistry::init('Software')->find('count',array('conditions'=>'Software.softSubCat='."'".${'w00t' . $i}[0]['Software']['softSubCat']."'"));
		?> 
		<li class="level1">
		<div class="li"> 
		
			<?PHP echo $html->link(str_replace("_"," ",${'w00t' . $i}[0]['Software']['softSubCat']), array( 'controller' => 'software',      'action' => 'showL2',${'w00t' . $i}[0]['Software']['softSubCat']))."&nbsp;(".$count.")"; ?>
		</div> 
		</li> 
		
	<?PHP 	}
		if($flag<1)
		{
			echo '</ul>
			    </div>';
		}
		$flag++;
		?>
		
	<?PHP }
}
?>

</div>
