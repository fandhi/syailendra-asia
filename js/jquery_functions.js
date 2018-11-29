$(document).ready(function() {
	
	//slider home
	$('.flexslider').flexslider({
        //animation: "slide",
		slideshowSpeed: 8000,       
		animationSpeed: 1500, 
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
	  
	// toggle language 
	$(".clickLang").click(function(){
		$(".showLang").toggle();
	});	
	 $(".showLang").mouseup(function() {
		return false
	});
	$(document).mouseup(function(e) {
		if($(e.target).parent(".clickLang").length==0) {
			$(".clickLang").removeClass("open");
			$(".showLang").hide();
		}
	});
	
	  
	//toggle team
        $('.our_team li .thumb').click(function() {
        var temp = $(this)
        var filterNum = $(this).attr('class').match(/\d+/);
        $('.showExpand_' + filterNum).fadeToggle();
        $('.our_team li.oiyuh').each(function() {
            $(this).append('<div class="ovrl"></div>');
        });
        $('.close_' + filterNum).click(function() {
            $('.showExpand_' + filterNum).fadeOut();
            $('.our_team li.oiyuh').each(function() {
                $('.ovrl').remove();
            });
        });
            return false;
        });

        // generate height
        $(window).load(function() {
        var max_height = -1;
        var max_height2 = -1;
        $("#widget_home div.widget").each(function() {
            var h = $(this).height();
            max_height = h > max_height ? h : max_height;
        });
        $("#widget_home div.widget").height(max_height);
        
        $("#widget_home h3").each(function() {
            var j = $(this).height();
            max_height2 = j > max_height2 ? j : max_height2;
        });
        $("#widget_home h3").height(max_height2);
    });
    

});
