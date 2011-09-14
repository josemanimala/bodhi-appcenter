<h1 class="sectionedit1"><a><?PHP echo str_replace("_"," ",$data[0]['Software']['softName']);?></a></h1> 
<?PHP debug($data); ?>
<div class="level1"> 
<p> 
<img src="<?PHP ?>" class="medialeft" align="left" alt="" width="200" />
</p> 
 
<p> 
<?PHP 
echo $data[0]['Software']['softDesc'];
?>
</p> 
 
<p> 
Download size: <?PHP 
echo $data[0]['Software']['softSize']; 
?>
 
</p> 
 
</div> 
 
<h2 class="sectionedit3"><a name="installation" id="installation">Installation</a></h2> 
<div class="level2"> 
 
<p> 
Please see the <a href="/software/doku.php?id=installation_instructions" class="wikilink1" title="installation_instructions">Installation Instructions</a> for further information.
</p> 
 
<p> 
The <strong>Install Now</strong> button is for immediate installation on machines with a good internet connection
</p> 
 
<p> 
The <strong>Download</strong> button is to download and transfer the package to a machine with no or slow internet connection.
</p> 
 
<p> 
 
<table width="35%"> 
<tr><td align="center"><a href="<?PHP echo $data[0]['Software']['softApt'];?>"><img src="http://www.bodhilinux.com/images/installnow.png" border="0"></a></td> 
 
<td align="center"><a href="<?PHP eco $data[0]['Software']['softDown'];?>"><img src="http://www.bodhilinux.com/images/downloadoffline.png" border="0"></a> 
 
</td></tr> 
</table> 
 
</p> 
 
</div> 
 
<h2 class="sectionedit4"><a>Related / Similar Applications</a></h2> 
<div class="level2"> 
<p> 
related software
anchor <br/> 
</p> 
</div> 
 
<h2 class="sectionedit5"><a>Software Homepage</a></h2> 
<div class="level2"> 
<p> 
homepage
</p> 
</div>
