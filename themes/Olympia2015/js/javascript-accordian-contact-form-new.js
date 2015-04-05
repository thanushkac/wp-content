jQuery(function($){
	$(document).ready(function(){
	    function openFirstPanel(){
		$('.accordian-formblock > dt:first-child').next().addClass('active').slideDown();
	}
	var allPanels = $('.accordian-formblock > dd').hide();
  
	openFirstPanel();

	function enableClickPanel() {
		$('.accordian-formblock > dt > h2').click(function() {
		  $this = $(this);
		  $target =  $this.parent().next();
		  

		  if($target.hasClass('active')){
		    //$target.removeClass('active').slideUp();
		  }else{
		    allPanels.removeClass('active').slideUp();
		    $target.addClass('active').slideDown();
		  }
		  
		return false;
		});
	}

	//Check class for validate
	var allinputHaveClass = $('.form-sblock input').length == $('.form-sblock input.wpcf7-not-valid').length;
	var allselectHaveClass = $('.form-sblock select').length == $('.form-sblock select.wpcf7-not-valid').length;
    
    $("input.wpcf7-form-control").submit(function() {
    	if ($('.form-sblock input').hasClass('wpcf7-not-valid')){
    	  	$('.wpcf7-not-valid-tip').show();
    	}else{
    	  
    	}
    	$('.accordian-formblock > dd').show();
    });
    
    // Open up right block for validating iputs on submission
    $(".wpcf7-form").submit(function(){
		var $ifinputErr = $('.form-sblock.first input');
		var $ifselectErr = $('.form-sblock.first select');
		var $ifinputErr2 = $('.form-sblock.second input');
		var $ifselectErr2 = $('.form-sblock.second select');

		if($ifinputErr.hasClass('wpcf7-not-valid') || $ifselectErr.hasClass('wpcf7-not-valid'))  {
		  	enableClickPanel();
	    	$('.form-sblock.first').slideDown();
	    	$('.form-sblock.second').slideUp();
		}
		else if($ifinputErr2.hasClass('wpcf7-not-valid') || $ifselectErr2.hasClass('wpcf7-not-valid'))  {
		  	enableClickPanel();
	    	$('.form-sblock.second').slideDown();
	    	$('.form-sblock.first').slideUp();
		}
	});

    // here check all the feilds are OK.
	var filledFields = [];

	function swapSections(sectionSelector, object)
	{
    	filledFields.push(object);

	  	fieldsThatNeedToBeFilled = $(sectionSelector + ' input, ' + sectionSelector + ' select').length;
	    //var allPanels = $('.accordian-formblock > dd').hide();
	  	if (filledFields.length == fieldsThatNeedToBeFilled) {
	    	enableClickPanel();
	    	$('.form-sblock.first').slideUp();
	    	$('.form-sblock.second').slideDown();
	  	} else { 
  	   		$('.form-sblock.first').slideDown();
  	   		enableClickPanel();
  		}
	}

	$(document).on('change', '.form-sblock.first select', function() {
		    swapSections('.form-sblock.first', $(this));
	});

	$(document).on('focusout', '.form-sblock.first input', function() {
  	  	if ($(this).val() !== '') {
    	    swapSections('.form-sblock.first', $(this));    
	    }
	});

	});
});