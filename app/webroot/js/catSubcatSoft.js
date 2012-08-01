$(document).ready(function(){
		
		$(".catsubCat").click(function(){
				var softsubCats = [];
	                        $.each(software,function(key,value){
					var Category = this.softCat;
					var subCat = this.softSubCat;
					if (Category.indexOf($.attr('data'))==0)
					{
						if (softsubCats.indexOf(subCat) < 0)
						{
							softsubCats.push(subCat);
						}
					}
				});
				$("#data").html("");
	       		        $.each(softsubCats,function(i,val){
		   		var hrefStart = "<a class='software' data='"+val+"'>";
		   		var hrefEnd = "</a>";
		   		$("#data").html($("#data").html()+hrefStart+val.replace(/_/g,' ')+hrefEnd+"<br />");
		   });
		   });
		   
		  // includeJavascript("/js/catSubcatSoft.js");
});
