$.fn.serializeObject = function () {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

(function ($) {

	QueryLoader.init();

	$('body').on('click', '.flag_language', function(event) {
		event.preventDefault();
		var lang = $(this).attr('data-language');
		var home_url = $(this).attr('data-href');
		var redirectUrl = $(this).parents('.dropdown-menu').attr('data-current-url');
		$.ajax({
			url:home_url+'home/setLanguage',
			type:'POST',
			dataType:'json',
			data:{redirect:redirectUrl,lang:lang},
			success:function (res) {
				if (res.status==true) {
					window.location.reload();
				}
			},
			error:function (error) {
				console.log(error);
			}
		});
	});

/*	var modalBtn = $('.apply-btn');
	var modal = $('#myModalApply');
	var animInClass = "";
	var animOutClass = "";

	modalBtn.on('click', function() {
		animInClass = 'bounceIn';
		animOutClass = 'zoomOut';
		modal.addClass(animInClass);
		modal.modal({backdrop: false});
	});*/

	function reqAnimate(x) {
		$('.modal .modal-dialog').attr('class', 'modal-dialog  ' + x + '  animated');
	};
	$('#myModalApply').on('show.bs.modal', function (e) {
		var anim = 'bounceIn';
		reqAnimate(anim);
	});
	$('#myModalApply').on('hide.bs.modal', function (e) {
		var anim = 'zoomOut';
		reqAnimate(anim);
	});

	$(window).scroll(function(){
		if($(window).scrollTop() > 200){
			$("#back-to-top").fadeIn(200);
		} else{
			$("#back-to-top").fadeOut(200);
		}
	});

	$('#back-to-top, .back-to-top').click(function() {
		$('html, body').animate({ scrollTop:0 }, '800');
		return false;
	});

	$('#banner').parallax("50%", 0.3);
	$('#service').parallax("50%", 0.3);


		/*var owl = $('.owl-carousel');
		owl.owlCarousel({
			margin: 10,
			nav: false,
			loop: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 5
				}
			}
		});*/


		/** OWL CAROUSEL**/
		$(".owl-carousel-customer").each(function(index, el) {
			var config = $(this).data();
			config.smartSpeed="300";
			config.autoplay="true";
			if($(this).hasClass('owl-style2')){
				config.animateOut="fadeOut";
				config.animateIn="fadeIn";
			}
			$(this).owlCarousel(config);
		});
	$(".owl-carousel-news").each(function(index, el) {
		var config = $(this).data();
		config.navText = ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];
		config.smartSpeed="300";
		config.touchDrag="false";
		config.mouseDrag="false";
		config.autoplay="true";
		if($(this).hasClass('owl-style2')){
			config.animateOut="fadeOut";
			config.animateIn="fadeIn";
		}
		$(this).owlCarousel(config);
	});

		$('ul.da-thumbs > li').hoverdir();
		//smooth scroll to href value
		$(".scroll").click(function(event){
			event.preventDefault();
			//calculate destination place
			var dest=0;
			if($(this.hash).offset().top > $(document).height()-$(window).height()){
				dest=$(document).height()-$(window).height();
			}else{
				dest=$(this.hash).offset().top;
			}
			//go to destination
			$('html,body').animate({scrollTop:dest}, 1000,'swing');
		});



    // all ajax urls should go here
    var ajax_urls = {
        medical_group_ajax_save: "/medical-group/ajax/save",

    };


    var ThemeController = function () {

        var theMan = this;

        this.els = {
            the_body: $("body"),


        }; //


        // =====================================
        // end of load-dropdown-on-change
        // =====================================


    }; //


    var EnableLoading = function LoadingEnable() {
        $("#page-loading").removeClass("hidden");
    };

    var DisableLoading = function LoadingDisable() {
        $("#page-loading").addClass("hidden");
    };

    $(document).ready(function () {

        var theme_controller = new ThemeController();



    }); //


})(jQuery);
