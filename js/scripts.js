
jQuery(document).ready(function($)
	{
		
		
		$(document).on('click', '#testimonial_sc_metabox .tab-nav li', function()
			{

				$(".active").removeClass("active");
				$(this).addClass("active");
				
				var nav = $(this).attr("nav");
				
				$(".box li.tab-box").css("display","none");
				$(".box"+nav).css("display","block");
		
			})
		
		
		
		
		$(document).on('click', '.testimonial_content_source', function()
			{	
				var source = $(this).val();
				var source_id = $(this).attr("id");
				
				$(".content-source-box.active").removeClass("active");
				$(".content-source-box."+source_id).addClass("active");
				
			})
		
		
		

		
	
 		

	});	







