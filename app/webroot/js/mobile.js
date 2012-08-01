$(document).ready(function(){
			$('#mobileView').click(function(){
				if ($('#mobileView').attr("context").indexOf("loaded")!=-1)
				{
					  $('#data').slideUp('fast', function() {
					  $('#main').html('<div id="data"><p>Loading....</p></div>');
					  $("#mobileView").hide();
					  $("#mobileView").attr("context","changed");
					  $("#workstationView").attr("context","changed");
					  $("#desktopView").attr("context","changed");
		  		});
				}
				else if($('#mobileView').attr("context").indexOf("changed")!=-1)
				{
					 $('#data').slideUp('fast', function() {
					$('#main').html('<div id="data"><p>Loading....</p></div>');
					if (!$("#desktopView").is(":visible"))
					{
						$("#desktopView").show();
					}
					else if(!$("#workstationView").is(":visible"))
					{
						$("#workstationView").show();
					}
					$("#mobileView").hide();
					});
				}
			});
});
