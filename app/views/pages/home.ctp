<h1 class="sectionedit1"><a name="bodhi_linux_add_software_home" id="bodhi_linux_add_software_home">Bodhi Linux AppCenter</a></h1> 
<div class="level1"> 
<p> 
Welcome to the Bodhi Linux software page. Here you will find easy to install software for any task on your Bodhi desktop! Note that Midori or Firefox are <strong>REQUIRED</strong> for the “Install Now” method. The “Download” method will work in any browser. Please see the Installation Instructions.
</p> 
 
</div> 
<h2 class="sectionedit1"><a>Software bundles</a></h2> 
<div class="level2"> 
 

<?PHP  

#History
#Show The Bodhi store first hack
#Softbundles added
#Completed Software list

foreach($softbundle as $var)
{
	echo "<p>";
	echo $html->link($var['Softbundle']['bundleName'], array('controller' => 'software',      'action' => 'softbundles',$var['Softbundle']['id']));
	echo "<br/>";

	echo $var['Softbundle']['bundleShrtDesc'];
	echo "</p>";
 } ?>
 
</div>
<h2 class="sectionedit1"><a>Software Categories</a></h2> 
<div class="level2"> 
 
<?PHP
$var="";
foreach($software as $var)
{ 
?>
<h3 class="sectionedit4"><a><?PHP echo str_replace("_"," ",$var); ?></a></h3> 
<?PHP
}
	
	for($i=0;$i<$softcount;$i++)
	{ 
		foreach(${'w00t' . $i} as $w01t)
		{
			if($w01t['Software']['softCat'] == $var)
			{
			echo '<div class="level3"> 
						 <ul>';
			}
			if($w01t['Software']['softCat'] == $var)
			{ 
				$count = ClassRegistry::init('Software')->find('count',array('conditions'=>'Software.softSubCat='."'".$w01t['Software']['softSubCat']."'"));
		?> 
			<li class="level1">
			<div class="li"> 
			
				<?PHP echo $html->link(str_replace("_"," ",$w01t['Software']['softSubCat']), array( 'controller' => 'software',      'action' => 'showL2',$w01t['Software']['softSubCat']))."&nbsp;(".$count.")"; ?>
			</div> 
			</li> 
		
	<?PHP 	}
			if($w01t['Software']['softCat'] == $var)
			{
				echo '</ul></div>';
			}
		}
		?>
		
	<?PHP
}
?>

</div>
