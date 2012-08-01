$(document).ready(function(){
			$('#workstationView').click(function(){
				if ($('#workstationView').attr("context").indexOf("loaded")!=-1)
				{
					  $('#data').slideUp('fast', function() {
					  $('#main').html('<div id="data"><p>Loading....</p></div>');
	  				  //$('#main').animate({'marginRight' : "+=150px",'marginLeft' : "-=100px"});
					  //$('#footer').animate({'marginTop':"-=150"});
					  $("#workstationView").hide();
					   $("#workstationView").attr("context","changed");
					  $("#mobileView").attr("context","changed");
					  $("#desktopView").attr("context","changed");
		  			});
				}
				else if($('#workstationView').attr("context").indexOf("changed")!=-1)
				{
					 $('#data').slideUp('fast', function() {
					$('#main').html('<div id="data"><p>Loading....</p></div>'); 
					if (!$("#desktopView").is(":visible"))
					{
						$("#desktopView").show();
					}
					else if(!$("#mobileView").is(":visible"))
					{
						$("#mobileView").show();
					}
					$("#workstationView").hide();
					});
				}
			});
});
