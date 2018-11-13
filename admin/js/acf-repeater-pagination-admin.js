(function($){
	
	'use strict';
	
	var offset=0;
	
	$(document).on("click",'.acf-field-repeater.pagination .acf-actions .acf-button[data-event="add-row"]',function(){
		$(this).parent().parent().parent().find(".acf-table .acf-row:last").prev().show();
	});
	
	$(document).on("click",'.acf-field-repeater.pagination .acf-actions .acf-button[data-event="show-all-row"]',function(){
		$(this).parent().parent().parent().find(".acf-table .acf-row").show();
	});
	
	$(document).on("click",'.acf-field-repeater.pagination .acf-actions .acf-button[data-event="show-next-rows"]',function(){
		var table=$(this).parent().parent().parent().find(".acf-table");

		var currentOffset=0;		
		
		if(table.data("offset")){
			var offset=table.data("offset");
		}else{
			var offset=0;
		}
			
		table.find(".acf-row").each(function(){
			if($(this).is(":visible") || currentOffset>=10){
				return true;
			}else{
				$(this).show();
				offset++;
				currentOffset++;
			}
		});
		
		table.data("offset",offset);		
	});
	
	setTimeout(function(){	
		$(".acf-field-repeater.pagination").each(function(){				
			var $clone = $(this).find(".acf-actions li a").clone().attr("data-event","show-all-row").text("Show all rows");
			$clone=$($clone).wrap("<li></li>");
			$(this).find(".acf-actions").append($clone);
			
			var $clone = $(this).find(".acf-actions li a").clone().attr("data-event","show-next-rows").text("Show next 10 rows");
			$clone=$($clone).wrap("<li></li>");
			$(this).find(".acf-actions").append($clone);
			
			var currentOffset=0;
			
			if($(this).data("offset")){
				var offset=$(this).data("offset");
			}else{
				var offset=0;
			}
	
			$(this).find(".acf-row").each(function(){
				if($(this).is(":visible") || currentOffset>=10){
					return true;
				}else{
					$(this).show();
					offset++;
					currentOffset++;
				}
			});
							
			$(this).data("offset",offset);
		});
	},1000);

})(window.jQuery);