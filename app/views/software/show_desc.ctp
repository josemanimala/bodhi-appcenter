<h1 class="sectionedit1"><a><?PHP echo str_replace("_"," ",$data[0]['Software']['softName']);?></a></h1> 
<div class="level1"> 
<p> 
<img src="<?PHP echo $data[0]['Software']['softScreenie'];?>" class="medialeft" align="left" alt="" width="200" />
</p> 
 
<p> 
<?PHP 
echo $data[0]['Software']['softDesc'];
?>
</p> 
 
<p> 
<h4>Download size:</h4><?PHP 
echo $data[0]['Software']['softSize']; 
?>
</p> 

<p> 
<h4>md5 checksum:</h4><?PHP 
echo $data[0]['Software']['md5']; 
?> 
</p>  

</div> 
 
<h2 class="sectionedit3"><a name="installation" id="installation">Installation</a></h2> 
<div class="level2"> 
 
<p> 
Please see the <a href="/pages/install_instructions" class="wikilink1" title="installation_instructions">Installation Instructions</a> for further information.
</p> 
 
<p> 
The <strong>Install Now</strong> button is for immediate installation on machines with a good internet connection
</p> 
 
<p> 
The <strong>Download</strong> button is to download and transfer the package to a machine with no or slow internet connection.
</p> 
 
<p> 
 
<table width="35%"> 

<tr>
<?PHP
if($data[0]['Software']['softApt']!="")
{
?>
<td align="center"><a href="<?PHP echo $data[0]['Software']['softApt'].'?refresh=yep';?>"><img src="http://www.bodhilinux.com/images/installnow.png" border="0"></a></td> 
<?PHP
}
?>
<td align="center"><a href="<?PHP echo $data[0]['Software']['softDown'];?>"><img src="http://www.bodhilinux.com/images/downloadoffline.png" border="0"></a> 
 
</td></tr> 
</table> 
 <strong><a href="<?PHP echo $data[0]['Software']['softApt']?>">FAST INSTALL</a></strong> bypasses the apt-get update done with the "Install Now" button and can <strong><u>NOT</u></strong> be used with a fresh installation.
</p> 
 
</div> 
 
<h2 class="sectionedit4"><a>Related / Similar Applications</a></h2> 
<div class="level2"> 
<p>
<?PHP
$list = ClassRegistry::init('Software')->find('all',array('conditions'=>'Software.softSubCat='."'".$data[0]['Software']['softSubCat']."'",'fields'=>array('Software.softName')));
foreach($list as $var)
{
	echo $html->link(str_replace("_"," ",$var['Software']['softName']), array('controller' => 'software','action' => 'showDesc',$var['Software']['softName']))."<br/>";
}
?>
</p> 
</div> 
 
<h2 class="sectionedit5"><a>Software Homepage</a></h2> 
<div class="level2"> 
<p> 
<?PHP
echo $html->link($data[0]['Software']['softHome'],$data[0]['Software']['softHome']);
?>
</p> 
</div>
