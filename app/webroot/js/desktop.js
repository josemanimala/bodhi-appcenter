function includeJavascript(src) {
    if (document.createElement && document.getElementsByTagName) {
        var head_tag = document.getElementsByTagName('head')[0];
        var script_tag = document.createElement('script');
        script_tag.setAttribute('type', 'text/javascript');
        script_tag.setAttribute('src', src);
        head_tag.appendChild(script_tag);
    }
}

$(document).ready(function(){
			$('#desktopView').click(function(){
				if ($('#desktopView').attr("context").indexOf("loaded")!=-1)
				{
					  $('#data').slideUp('fast', function() {
						  $('#main').html('<div id="data"><p>Loading....</p></div>');
		  				  //$('#main').animate({'marginRight' : "+=150px",'marginLeft' : "-=100px"});
						  $("#desktopView").hide();
						  $("#desktopView").attr("context","changed");
						  $("#workstationView").attr("context","changed");
						  $("#mobileView").attr("context","changed");
						  /*$.getJSON('/software/index/i386', function(data) {
							  $.each(data,function(key,value){
								$.each(value,function(key1,value1){
									$("#data").html($("#data").html()+key1+" separator "+value1+"<br />");	
								});
							 });
						  });*/
						  var softCats = [];
						   $.each(software,function(key,value){
									var Category = this.softCat;
									if (softCats.indexOf(Category) < 0)
									{
										softCats.push(Category);
									}
						   });
						   $("#data").html("");
						   $.each(softCats,function(i,val){
						   		var hrefStart = "<a class='catsubCat' data='"+val+"'>";
						   		var hrefEnd = "</a>";
						   		$("#data").html($("#data").html()+hrefStart+val.replace(/_/g,' ')+hrefEnd+"<br />");
						   });
						   includeJavascript("/js/catSubcatSoft.js");
		  			});
				}
				else if($('#desktopView').attr("context").indexOf("changed")!=-1)
				{
					 $('#data').slideUp('fast', function() {
					$('#main').html('<div id="data"><p>Loading....</p></div>');
					if (!$("#workstationView").is(":visible"))
					{
						$("#workstationView").show();
					}
					else if(!$("#mobileView").is(":visible"))
					{
						$("#mobileView").show();
					}
					$("#desktopView").hide();
					});
				}
			});
});
