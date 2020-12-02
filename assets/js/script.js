/*all*/
function change_size(id_name, width, height){
	if($('#'+id_name).length > 0){
		$('#'+id_name).width(width);
		$('#'+id_name).height(height);
	}
}

/*index*/
function change_height(class_name, height){
	if($('.'+class_name).length > 0){
		$('.'+class_name).each(function(){
			$(this).height(height);
		});
	}
}
function index_row_wrapper(desktop_class, mobile_class, unit){
	if($(window).width() >= 768)
		var main_width = $('.'+desktop_class).width();
	else
		var main_width = $('.'+mobile_class).width();
	/*change_height('row-xs-'+unit+'-9', main_width);
	change_height('row-xs-'+unit+'-8', Math.round(main_width/9*8));
	change_height('row-xs-'+unit+'-7', Math.round(main_width/9*7));
	change_height('row-xs-'+unit+'-6', Math.round(main_width/9*6));
	change_height('row-xs-'+unit+'-5', Math.round(main_width/9*5));
	change_height('row-xs-'+unit+'-4', Math.round(main_width/9*4));
	change_height('row-xs-'+unit+'-3', Math.round(main_width/9*3));
	change_height('row-xs-'+unit+'-2', Math.round(main_width/9*2));
	change_height('row-xs-'+unit+'-1', Math.round(main_width/9));*/
	change_height('row-xs-4', Math.round(main_width/12*4));
	change_height('row-xs-9', Math.round(main_width/12*9));
	change_height('row-xs-12', Math.round(main_width));
	if($(window).width() >= 768){
		change_height('row-sm-'+unit+'-9', main_width);
		change_height('row-sm-'+unit+'-8', Math.round(main_width/unit*8));
		change_height('row-sm-'+unit+'-7', Math.round(main_width/unit*7));
		change_height('row-sm-'+unit+'-6', Math.round(main_width/unit*6));
		change_height('row-sm-'+unit+'-5', Math.round(main_width/unit*5));
		change_height('row-sm-'+unit+'-4', Math.round(main_width/unit*4));
		change_height('row-sm-'+unit+'-3', Math.round(main_width/unit*3));
		change_height('row-sm-'+unit+'-2', Math.round(main_width/unit*2));
		change_height('row-sm-'+unit+'-1', Math.round(main_width/unit));
	}
	if($(window).width() >= 992){
		change_height('row-md-'+unit+'-9', main_width);
		change_height('row-md-'+unit+'-8', Math.round(main_width/unit*8));
		change_height('row-md-'+unit+'-7', Math.round(main_width/unit*7));
		change_height('row-md-'+unit+'-6', Math.round(main_width/unit*6));
		change_height('row-md-'+unit+'-5', Math.round(main_width/unit*5));
		change_height('row-md-'+unit+'-4', Math.round(main_width/unit*4));
		change_height('row-md-'+unit+'-3', Math.round(main_width/unit*3));
		change_height('row-md-'+unit+'-2', Math.round(main_width/unit*2));
		change_height('row-md-'+unit+'-1', Math.round(main_width/unit));
	}
	if($(window).width() >= 1200){
		change_height('row-lg-'+unit+'-9', main_width);
		change_height('row-lg-'+unit+'-8', Math.round(main_width/unit*8));
		change_height('row-lg-'+unit+'-7', Math.round(main_width/unit*7));
		change_height('row-lg-'+unit+'-6', Math.round(main_width/unit*6));
		change_height('row-lg-'+unit+'-5', Math.round(main_width/unit*5));
		change_height('row-lg-'+unit+'-4', Math.round(main_width/unit*4));
		change_height('row-lg-'+unit+'-3', Math.round(main_width/unit*3));
		change_height('row-lg-'+unit+'-2', Math.round(main_width/unit*2));
		change_height('row-lg-'+unit+'-1', Math.round(main_width/unit));
	}
}
/*index*/

/*product*/
function product_image_height(){
	if($(window).width() < 768){
		var wrapper_width = $('.product-big-image').width();
		change_height('product-big-image', wrapper_width);
    	change_height('product-small-image', wrapper_width);
	}else{
		$('.product-big-image').attr("style", "");
    	$('.product-small-image').attr("style", "");
	}
}
/*product*/

/*product-healthcare*/
function product_healthcare_image_height(){
	if($(window).width() < 768){
		var wrapper_width = $('.healthcare .healthcare-wrapper .image-wrapper').width();
		change_height('image-wrapper', wrapper_width);
	}else{
		$('.healthcare .healthcare-wrapper .image-wrapper').attr("style", "");
	}
}
/*product-healthcare*/

$(document).ready(function() {
	var hash = document.URL.substr(document.URL.indexOf('#')+1);

	if($('.fancybox').length > 0)
		$(".fancybox").fancybox();
	if ($('.scroll-wrapper').length > 0){
		clearTimeout($.data(this, 'scroll-wrapper'));
		$.data(this, 'scroll-wrapper', setTimeout(function() {
			$('.scroll-wrapper').each(function(){
				if($(this).children().width() - $(this).width() > 10){
					nice = $(this).niceScroll();
					var _super = nice.getContentSize;
					nice.getContentSize = function() {      
						var page = _super.call(nice);
						page.h = nice.win.height();
						return page;
					}
				}
			});
		}, 800));
		$(window).resize(function() {
			clearTimeout($.data(this, 'scroll-wrapper2'));
			$.data(this, 'scroll-wrapper2', setTimeout(function() {
				$('.scroll-wrapper').each(function(){
					$(this).getNiceScroll().remove();
					if($(this).children().width() - $(this).width() > 10){
						nice = $(this).niceScroll();
						var _super = nice.getContentSize;
						nice.getContentSize = function() {      
							var page = _super.call(nice);
							page.h = nice.win.height();
							return page;
						}
					}
				});
			}, 800));
		});
	}

	if(window.location.href.indexOf("news") > -1){
		$(".fancybox_popup").fancybox().trigger('click');
	}

	/*window resize*/
	change_size('wrapper', $(window).width(), $(window).height());
	$('body').show();
	$(window).resize(function() {
		clearTimeout($.data(this, 'resizeTimer2'));
	    $.data(this, 'resizeTimer2', setTimeout(function() {
	        change_size('wrapper', $(window).width(), $(window).height());
	    }, 200));
	    if($(window).width() >= 768){
	    	if($('#wrapper').hasClass('toggled')){
	    		$('#wrapper').removeClass('toggled');
	    	}
	    	if($('.hamburger').hasClass('is-open')){
	    		$('.hamburger').removeClass('is-open');
	    		$('.hamburger').addClass('is-closed');
	    	}
	    }
	});
	/*window resize*/

	/*sidebar*/
	var trigger = $('.hamburger'),
	overlay = $('.overlay'),
	isClosed = false;

	trigger.click(function () {
		hamburger_cross();      
	});

	function hamburger_cross() {

		if (isClosed == true) {          
			//overlay.hide();
			trigger.removeClass('is-open');
			trigger.addClass('is-closed');
			isClosed = false;
		} else {   
			//overlay.show();
			trigger.removeClass('is-closed');
			trigger.addClass('is-open');
			isClosed = true;
		}
	}

	$('[data-toggle="offcanvas"]').click(function () {
		$('#wrapper').toggleClass('toggled');
	});

	$('.sidebar-nav > li').click(function(){
		if(!$(this).hasClass('parent')){
			$('.sidebar-nav > li').each(function(){
				$(this).removeClass('active');
			});
			$(this).addClass('active');
		}
	});

	$('.sidebar-nav > li.parent').click(function(){
		if($(this).hasClass('show-sub')){
			$(this).removeClass('show-sub');
		}else{
			$(this).addClass('show-sub');
		}
		$(this).find('.sub-sidebar-nav').slideToggle();
	});
	/*sidebar*/

	/*index*/
	if($('#index .main-wrapper').length > 0){
		index_row_wrapper('desktop-main', 'mobile-main', 9);
		$(window).resize(function() {
			clearTimeout($.data(this, 'resizeTimer'));
		    $.data(this, 'resizeTimer', setTimeout(function() {
		        index_row_wrapper('desktop-main', 'mobile-main', 9);
		    }, 800));
		});
	}
	if($('#banner-wrapper-mobile').length > 0){
		$('#banner-wrapper-mobile').carousel({
			interval: false
		});
	}
	/*index*/

	/*product*/
	if($('#product .product-big-image').length > 0){
		$.data(this, 'product-image', setTimeout(function() {
			product_image_height();
	    }, 200));
		$(window).resize(function() {
			clearTimeout($.data(this, 'product-image2'));
		    $.data(this, 'product-image2', setTimeout(function() {
		        product_image_height();
		    }, 800));
		});
	}

	$('#product #product-wrapper .product-small-image a').click(function(){
		var image = $(this).attr('rel');
		var fancybox_img = $(this).attr('fancyboxdata');
		$('#product #product-wrapper .product-big-image img').attr('src',image);
		$('#product #product-wrapper .product-big-image .zoom-btn').attr('href',fancybox_img);
	});

	if($('#product .tab-icon-outer-wrapper .tab-icon-wrapper li').length > 0){
		var tab_width = 0;
		var icon_width = 0;
		clearTimeout($.data(this, 'product-tab'));
	    $.data(this, 'product-tab', setTimeout(function() {
	    	$('#product .sub-tab-wrapper li').each(function(){
				tab_width += $(this).width();
			});
			$('#product .tab-icon-wrapper li').each(function(){
				icon_width += $(this).width();
			});

			$('#product .sub-tab-wrapper').width(tab_width);
			$('#product .tab-icon-wrapper').width(icon_width);
		}, 500));
	}
	
	$('#product .product-content-tab-wrapper ul li').click(function(){
		$(this).siblings().each(function(){
			if($(this).hasClass('active')){
				$('.product-content-wrapper.product-content'+$(this).attr('rel')).hide();
				$(this).removeClass('active');
			}
		});
		$(this).addClass('active');
		$('.product-content-wrapper.product-content'+$(this).attr('rel')).show();
	});
	/*product*/

	/*product-healthcare*/
	if($('#product.healthcare .image-wrapper').length > 0){
		$.data(this, 'product-healthcare', setTimeout(function() {
			product_healthcare_image_height();
	    }, 200));
		$(window).resize(function() {
			clearTimeout($.data(this, 'product-healthcare2'));
		    $.data(this, 'product-healthcare2', setTimeout(function() {
		        product_healthcare_image_height();
		    }, 800));
		});
	}
	/*product-healthcare*/

	/*lastest-offers*/
	if($('#lastest-offers #offers-wrapper').length > 0){
		$.data(this, 'lastest-offers', setTimeout(function() {
			$('#lastest-offers #offers-wrapper .img-wrapper').each(function(){
				$(this).siblings('.content-wrapper').height($(this).height());
			});
			$('#lastest-offers #offers-wrapper .content-wrapper').show();
		}, 200));
		$(window).resize(function() {
			clearTimeout($.data(this, 'lastest-offers2'));
		    $.data(this, 'lastest-offers2', setTimeout(function() {
		        $('#lastest-offers #offers-wrapper .img-wrapper').each(function(){
					$(this).siblings('.content-wrapper').height($(this).height());
				});
				$('#lastest-offers #offers-wrapper .content-wrapper').show();
		    }, 800));
		});
	}
	$('#lastest-offers #offers-wrapper .more-btn').click(function(){
		$('#lastest-offers #offers-wrapper > div.hide').each(function(key){
			if(key < 3)
				$(this).removeClass('hide');
			if($('#lastest-offers #offers-wrapper > div.hide').length == 0)
				$('#lastest-offers #offers-wrapper .more-btn').remove();
		});
		$('#lastest-offers #offers-wrapper .img-wrapper').each(function(){
			$(this).siblings('.content-wrapper').height($(this).height());
		});
	});
	/*lastest-offers*/

	/*news*/
	if($('#news .content-row').length > 0){
		$.data(this, 'news', setTimeout(function() {
			$('#news .content-row .colume2').each(function(){
				$(this).siblings('.colume1').height($(this).height());
			});
			$('#news .content-row').show();
		}, 200));
		$(window).resize(function() {
			clearTimeout($.data(this, 'news2'));
			$.data(this, 'news2', setTimeout(function() {
				$('#news .content-row .colume2').each(function(){
					$(this).siblings('.colume1').height($(this).height());
				});
				$('#news .content-row').show();
			}, 800));
		});
	}

	$('#news .content-row .colume2 .title-wrapper a').click(function(){
		if($(this).parent().parent().parent().hasClass('active')){
			$(this).parent().siblings('.content-wrapper').slideUp(400, function(){
				$(this).parent().siblings('.colume1').height($(this).parent().height());
				$(this).parent().parent().removeClass('active');
			});
		}else{
			$(this).parent().siblings('.content-wrapper').slideDown(400, function(){
				$(this).parent().siblings('.colume1').height($(this).parent().height());
				$(this).parent().parent().addClass('active');
			});
		} 
	});
	
	
	$('#news .pagination-btn.withmovebutt').click(function(){
	var page=$(this).attr('rel');
	var globalpath=$('#globalpath').attr('rel');
	var lang=$('#lang').attr('rel');
	window.location.assign(globalpath+lang+"/news/"+page);
	});
	
	
	$('#news .rightmove').click(function(){
	var current_page=$('#current_page').attr('rel');
	current_page++;
    var globalpath=$('#globalpath').attr('rel');
	var lang=$('#lang').attr('rel');
    window.location.assign(globalpath+lang+"/news/"+current_page);
	});
	
	$('#news .leftmove').click(function(){
	var current_page=$('#current_page').attr('rel');
	current_page--;
    var globalpath=$('#globalpath').attr('rel');
	var lang=$('#lang').attr('rel');
    window.location.assign(globalpath+lang+"/news/"+current_page);
	});
	

	$("#news .pagination-change").on('focus', function () {
	}).change(function() { 
    var current_page=$(this).val()-1;
    var globalpath=$('#globalpath').attr('rel');
	var lang=$('#lang').attr('rel');
    window.location.assign(globalpath+lang+"/news/"+current_page);
    });

	/*news*/

	/*product-take*/
	if($('#product-take #product-take-wrapper .content-left > div').length > 0){
		$.data(this, 'product-take', setTimeout(function() {
			$('#product-take #product-take-wrapper .content-right').each(function(){
				$(this).height($(this).width()*3/2);
			});
			index_row_wrapper('content-left', 'content-left', 12);
		}, 200));
		$(window).resize(function() {
			clearTimeout($.data(this, 'product-take2'));
			$.data(this, 'product-take2', setTimeout(function() {
				$('#product-take #product-take-wrapper .content-right').each(function(){
					$(this).height($(this).width()*3/2);
				});
				index_row_wrapper('content-left', 'content-left', 12);
			}, 800));
		});

		var product = [];
		var series =[];


		$('#product-take #product-take-wrapper .content-left .index-wrapper .clear-select').click(function(){
			$('#product-take #product-take-wrapper .content-left .index-wrapper a.wrapper').each(function() {
				$( this ).removeClass('active inactive');
			});
		});


		$('#product-take #product-take-wrapper .content-left .index-wrapper a.wrapper').click(function(){

		
			if(!$(this).hasClass('inactive')){
				
				if(!$(this).hasClass('active')){
					var target = $(this);
					$(target).addClass('active');
				}else{
					var target = $(this);
					$(this).removeClass('active');
				}
				
				var langname=$('#langname').attr('rel'); 
				var symptoms = [];
			
		
				$('#product-take #product-take-wrapper .content-left .index-wrapper a.active').each(function(){
					symptoms.unshift($(this).attr('rel'));
				});

				console.log('Seletced: '+symptoms);
				//alert(JSON.stringify(symptoms));
				 
				if(symptoms.length > 0){

					$.post('/product_take',{symptoms:symptoms,langname:langname,match:"match"},function(data){

						//console.log(data);


						$('#product-take #product-take-wrapper .content-left .index-wrapper a.wrapper').each(function(){

							//alert($(this).attr('rel'));
							//console.log(data.input_symptoms);

							if($.inArray(parseInt($(this).attr('rel')), data.first_matched_product_symptoms) != -1){
									$(this).removeClass('inactive');
									}else{
										$(this).addClass('inactive');
									}

						});
						product = data.products_details;
						series = data.series;
						//alert(series[0].main_series);

					});

				}else{
					$('#product-take #product-take-wrapper .content-left .index-wrapper a.inactive').each(function(){
						$(this).removeClass('inactive');
					});
					product = [];
					series=[];
				}
			}
		});

		$('#product-take #product-take-wrapper .content-left .index-wrapper a.result').click(function(){
			
	
        	if(product.length == 0){
        		if($(window).width() < 768){
        			$('.content-right').hide();
        		}
        		$('.level-wrapper').hide();
        		$('.matched-product-wrapper').html('');
        		$('.arrow').hide();
        		}else{
        		//console.log(product);
        		for (i = 0; i < series.length; i++) { 
        		//alert(series[i].main_series);	
        		}
				        		
        		$('.matched-product-wrapper').html('');
        		$(product).each(function(index, value){
        			var cond=value.condition;
        			var langname=$('#langname').attr('rel'); 
       				var globalpath=$('#globalpath').attr('rel'); 
       				var img_path= globalpath+"/app/storage/uploads/thumbs/"+value.product_img1;
       				var which_page=value.series_id;
       				var which_market=value.markets_id;
       			
       			
       				if (series[which_page-1].main_series=="Normal Series"){
       					which_page="product";
       				}else{
       					which_page="children-product";
       				}
       			
       				
       				if (which_market==1){
       					which_market="hongkong";
       				}else if (which_market==2){
       					which_market="china";
       				}else{
       					which_market="oversea";
       				}
       				
       				if(langname == "eng")
        			var text = '<div class="matched-product"><a href="'+globalpath+langname+'/'+which_page+'/'+which_market+'/'+value.series_id+'/0/'+value.id+'"><img src='+img_path+'><h4>'+value.name_eng+'</h4>';
        			else if(langname == "cht")
     				var text = '<div class="matched-product"><a href="'+globalpath+langname+'/'+which_page+'/'+which_market+'/'+value.series_id+'/0/'+value.id+'"><img src='+img_path+'><h4>'+value.name_cht+'</h4>';
        			else if(langname == "chs")
        			var text = '<div class="matched-product"><a href="'+globalpath+langname+'/'+which_page+'/'+which_market+'/'+value.series_id+'/0/'+value.id+'"><img src='+img_path+'><h4>'+value.name_chs+'</h4>';
        	
        			if(cond == "onset"){
        				if(langname == "eng")
        				text += '<p class="level1 grey">Onset</p>';
        				else if(langname == "cht")
        				text += '<p class="level1 grey">初發</p>';
        				else if(langname == "chs")
        				text += '<p class="level1 grey">初发</p>';
        			}else if(cond == "slight"){
        				if(langname == "eng")
        				text += '<p class="level2 grey">Slight</p>';
        				else if(langname == "cht")
        				text += '<p class="level2 grey">輕微</p>';
        				else if(langname == "chs")
        				text += '<p class="level2 grey">轻微</p>';
        			}else if(cond == "critical"){
        				if(langname == "eng")
        				text += '<p class="level3 grey">Crictical</p>';
        				else if(langname == "cht")
        				text += '<p class="level3 grey">嚴重</p>';
        				else if(langname == "chs")
        				text += '<p class="level3 grey">严重</p>';
        			}
        			text += '</a></div>';
        			$('.level-wrapper').show();
        			$('.matched-product-wrapper').append(text);
        			
        		});
        		if($('.matched-product-wrapper').height() > $('.matched-outer').height()){
        			$('.arrow-down').show();
        		}
        		if($(window).width() < 768){
        			$('.content-right').show();
        		}
        	}
    	});
    	
    	

		$('#product-take #product-take-wrapper .content-right .index-wrapper .matched-outer').scroll(function() {
			if($(this).scrollTop() == 0){
				$("#product-take #product-take-wrapper .content-right .arrow-up").hide();
			}else if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
		        $("#product-take #product-take-wrapper .content-right .arrow-down").hide();
		    }else{
		    	$("#product-take #product-take-wrapper .content-right .arrow").show();
		    }
		});

		$("#product-take #product-take-wrapper .content-right .arrow").on("click" ,function(){
			var target = $('#product-take #product-take-wrapper .content-right .index-wrapper .matched-outer');
			var arrow = $(this);
			if (!$(target).is(':animated')){
				scrolled = $(target).scrollTop();
				if($(arrow).hasClass('arrow-up')){
					scrolled -= 200;
				}
				if($(arrow).hasClass('arrow-down')){
					scrolled += 200;
				}
				$(target).animate({
					scrollTop:  scrolled
				});
			}
		});
	}
	/*product-take*/

	/*faq*/
	function faq_detail(element){
		var id = $(element).attr('rel');
		var position = $(element).parent().parent().position();
		var big_width = $('#faq .detail-wrapper').width();
		var width = $(element).parent().parent().width();
		$.ajax({
	        type: 'POST',
	        url: '/faq_detail',
	        data: {
	            id: id
	        },
	        dataType : "json",
	        async: false,
	        success: function(data){
	            $('#faq .detail-wrapper h4').html(data.title);
	            $('#faq .detail-wrapper img').attr('src', 'assets/img/faq_img_1.jpg');
	            $('#faq .detail-wrapper .description').html(data.description);

				if((position.left + big_width) > $('.content-outer-wrapper').width()){
					$('#faq .detail-wrapper').css('top',position.top).css('left','auto').css('right',0).show();
				}else{
					$('#faq .detail-wrapper').css('top',position.top).css('left',position.left).show();
				}

				var diff = ($('#faq .detail-wrapper').position().top+$('#faq .detail-wrapper').height()+10) - $('#faq .content-outer-wrapper').height();
				if(diff > 0){
					$('#faq .more-btn').css('margin-top', diff+10);
				}else{
					$('#faq .more-btn').css('margin-top', 0);
				}

			
	        }
	    });
	}
	
	
	function faq_detail2(element){
		var id = $(element).attr('rel'); 
		var position = $(element).parent().parent().position();
		var big_width = $('#faq .detail-wrapper').width();
		var width = $(element).parent().parent().width();
		var langname=$('#langname').attr('rel'); 
		var homedir=$('#homedir').attr('rel'); 
		
		if(langname=='eng'){
			var label_question='Question:';
			var label_answer='Find answer on:';
		}else if (langname=='cht'){
			var label_question='問題:';
			var label_answer='在幸福FAQ找答案:';
		}else if (langname=='chs'){
			var label_question='问题:';
			var label_answer='在幸福FAQ找答案:';
		}
	
		$.post('/faq_detail',{id:id,langname:langname,homedir:homedir},function(data){
		//console.log(data);
		
		WB2.anyWhere(function(W){
    	W.widget.publish({
        'id' : 'wb_publish',
        'default_text' : 'Fortune Pharmacal Co., Ltd.#'+label_question+data.question+"#"+label_answer+'http://www.fortunepharm.com/'+langname+'/faq/0',   
        'offset' : '0,0',
        'default_image':homedir+'app/storage/uploads/thumbs/full/'+data.img ,
        'callback' : function(o) {   
     
        }      
    		});
		});
  
	    $('#faq-wrapper div.share-wrapper > a').attr('href',"https://www.facebook.com/dialog/feed?app_id=105148586494382&display=popup&caption="+data.question+"&description="+data.answer+"&picture="+homedir+"app/storage/uploads/thumbs/full/"+data.img+"&link=http://www.fortunepharm.com/&redirect_uri=http://www.fortunepharm.com/");	
		$('#faq .detail-wrapper h4').html(data.question);	  
		$('#faq .detail-wrapper .description').html(data.answer);	 
		$('#faq .detail-wrapper img').attr('src', homedir+'app/storage/uploads/thumbs/full/'+data.img);
			
		});      
		
		
			if((position.left + big_width) > $('.content-outer-wrapper').width()){
					$('#faq .detail-wrapper').css('top',position.top).css('left','auto').css('right',0).show();
				}else{
					$('#faq .detail-wrapper').css('top',position.top).css('left',position.left).show();
				}

				var diff = ($('#faq .detail-wrapper').position().top+$('#faq .detail-wrapper').height()+10) - $('#faq .content-outer-wrapper').height();
				if(diff > 0){
					$('#faq-wrapper .content-outer-wrapper').css('margin-bottom', diff+10);
				}else{
					$('#faq-wrapper .content-outer-wrapper').css('margin-bottom', 0);
				}
				
				$('html, body').animate({
					scrollTop: $('#faq .detail-wrapper').offset().top - 5
				}, 500);
		
	}
	
	   
	
	  
	if($('#faq .sub-tab-wrapper li').length > 0){
		var tab_width = 0;
		clearTimeout($.data(this, 'faq-tab'));
	    $.data(this, 'faq-tab', setTimeout(function() {
	    	$('#faq .sub-tab-wrapper li').each(function(){
				tab_width += $(this).width();
			});

			$('#faq .sub-tab-wrapper').width(tab_width);
		}, 500));
	}
	$('#faq .content-wrapper .detail').click(function(){
		faq_detail2($(this));
	});
	$('#faq .detail-wrapper .detail').click(function(){
		$(this).parent().parent().hide();
		$('#faq-wrapper .content-outer-wrapper').css('margin-bottom', 0);
	});
	$('#faq .more-btn').click(function(){
		$('#faq div.content-wrapper.hide').each(function(key){
			if(key < 6)
				$(this).removeClass('hide');
			if($('#faq div.content-wrapper.hide').length == 0)
				$('#faq .more-btn').remove();
		});
		$('#faq-wrapper .content-outer-wrapper').css('margin-bottom', 0);
	});

	if($('#faq .content-wrapper .detail[rel="'+hash+'"]').length > 0){
		var detail = $('#faq .content-wrapper .detail[rel="'+hash+'"]');
		$(detail).parent().parent().removeClass('hide');
		faq_detail($(detail));
	}
	/*faq*/

	/*advertisements*/
	
	$('#advertisements .view-video').click(function(){

		var langname = $('#lang').attr('rel');
		var vid = $(this).attr('rel');

	
		$.ajax({
			type: 'POST',
			url: '/video_swap',
			data: {
				langname: langname,
				vid:vid
			},
			dataType : "json",
			async: false,
			success: function(data){
			
			if(data.lang_name=='eng' ||data.lang_name=='cht'){
			$('.advertisements-top .video').html('<iframe width="400" height="300" src="https://www.youtube.com/embed/'+data.link+'" frameborder="0" allowfullscreen></iframe>');
			}else{ 
			$('.advertisements-top .video').html('<iframe width="400" height="300" src="http://player.youku.com/embed/'+data.link+'" frameborder="0" allowfullscreen></iframe>');
			}
			
		
			
				$('.advertisements-top .content1 h3').html(data.title);
				$('.advertisements-top .content1 p').html(data.date);
				$('.advertisements-top .content2 p').html(data.desc);
			
				scrolled = $('.advertisements-top').scrollTop();
				$('html, body').animate({
					scrollTop:   $('.advertisements-top').offset().top - 5
				});
			
			}
		});
	});
	
	/*
	$('#advertisements .page_chage_custom .pagination-btn').click(function(){
	var yr=$(this).attr('rel'); 
	var globalpath=$('#globalpath').attr('rel');
	var lang=$('#lang').attr('rel');
	window.location.assign(globalpath+lang+"/advertisements/"+yr);
	});
	*/
	   
	$("#advertisements .pagination-change").on('focus', function () {
	}).change(function() { 
	var yr=$(this).val();
    var globalpath=$('#globalpath').attr('rel');
	var lang=$('#lang').attr('rel');
     window.location.assign(globalpath+lang+"/advertisements/"+yr);
    });
    
    $('#advertisements .pagination-btn.withmovebutt').click(function(){
	var page=$(this).attr('rel');
	var globalpath=$('#globalpath').attr('rel');
	var lang=$('#lang').attr('rel');
	window.location.assign(globalpath+lang+"/advertisements/"+page);
	});
    
    $('#advertisements .rightmove').click(function(){
	var current_page=$('#current_page').attr('rel');
	current_page++;
    var globalpath=$('#globalpath').attr('rel');
	var lang=$('#lang').attr('rel');
    window.location.assign(globalpath+lang+"/advertisements/"+current_page);
	});
	
	$('#advertisements .leftmove').click(function(){
	var current_page=$('#current_page').attr('rel');
	current_page--;
    var globalpath=$('#globalpath').attr('rel');
	var lang=$('#lang').attr('rel');
    window.location.assign(globalpath+lang+"/advertisements/"+current_page);
	});
	
	/*advertisements*/

	/*sub-tab-session*/
	if($('.sub-tab-session').length > 0){
		clearTimeout($.data(this, 'sub-tab-session'));
	    $.data(this, 'sub-tab-session', setTimeout(function() {
	    	if($('.sub-tab-outer-wrapper').width() + $('.sub-tab-outer-wrapper').scrollLeft() + 20 >= $('.sub-tab-outer-wrapper').children().width()){
				$('.sub-tab-session .arrow-right').fadeOut();
			}else{
				$('.sub-tab-session .arrow-right').fadeIn();
			}
		}, 500));


		$('.sub-tab-outer-wrapper').scroll(function() {
			if($(this).width() + $(this).scrollLeft() + 20 >= $(this).children().width()){
				$('.sub-tab-session .arrow-right').fadeOut();
			}else{
				$('.sub-tab-session .arrow-right').fadeIn();
			}

			if($(this).width() + $(this).scrollLeft() - 20 >= $(this).width()){
				$('.sub-tab-session .arrow-left').fadeIn();
			}else{
				$('.sub-tab-session .arrow-left').fadeOut();
			}
		});
		
		$(".sub-tab-session .arrow").on("click" ,function(){
			var target = $('.sub-tab-session .sub-tab-outer-wrapper');
			var arrow = $(this);
			if (!$(target).is(':animated')){
				scrolled = $(target).scrollLeft();
				if($(arrow).hasClass('arrow-left')){
					scrolled -= 100;
				}
				if($(arrow).hasClass('arrow-right')){
					scrolled += 100;
				}
				$(target).animate({
					scrollLeft:  scrolled
				});
			}
		});
	}
	/*sub-tab-session*/
	
	
	/*health-tips*/
	if($('#health-tips .sub-tab-wrapper li').length > 0){
		var tab_width = 0;
		clearTimeout($.data(this, 'health-tips-tab'));
	    $.data(this, 'health-tips-tab', setTimeout(function() {
	    	$('#health-tips .sub-tab-wrapper li').each(function(){
				tab_width += $(this).width();
			});

			$('#health-tips .sub-tab-wrapper').width(tab_width);
		}, 500));
	}
	function health_tips(){
		if($(window).width() >= 768) {
			$('#health-tips .function-wrapper .function-btn').each(function(){
				if($('#health-tips').hasClass('cold_and_flu'))
					$(this).height($(this).width()/280*195);
				else if($('#health-tips').hasClass('children'))
					$(this).height($(this).width()/100*50);
				else if($('#health-tips').hasClass('pain') || $('#health-tips').hasClass('allergy') || $('#health-tips').hasClass('gerd'))
					$(this).height($(this).width()/280*196);
			});

			$('.function-middle-wrapper').height($('.function-left-wrapper:visible').height());
		}else{
			$('#health-tips .function-wrapper .function-btn').each(function(){
				if($('#health-tips').hasClass('cold_and_flu') || $('#health-tips').hasClass('pain') || $('#health-tips').hasClass('allergy') || $('#health-tips').hasClass('gerd'))
					$(this).height(Math.floor($(this).width()/385*293));
				if($('#health-tips').hasClass('children'))
					$(this).height(Math.floor($(this).width()/516*293));
			});
		}
	}
	if($('#health-tips .function-wrapper .function-btn').length > 0){
		$.data(this, 'function', setTimeout(function() {
			health_tips();
		}, 200));
		$(window).resize(function() {
			clearTimeout($.data(this, 'health-btn'));
			$.data(this, 'health-btn', setTimeout(function() {
				health_tips();
			}, 800));
		});

		$('#health-tips .function-wrapper .function-btn').click(function(){
			if (typeof($(this).attr('rel')) !== 'undefined') {
				var rel = $(this).attr('rel');
				$('#health-tips .function-wrapper .function-btn').each(function(){
					$(this).removeClass('active');
				});
				$('#health-tips .function-wrapper .function-btn[rel="'+rel+'"]').addClass('active');

				$('#health-tips .function-wrapper .function-middle-wrapper img').each(function(){
					$(this).removeClass('active');
				});
				$('#health-tips .function-wrapper .function-middle-wrapper img[rel="'+rel+'"]').addClass('active');

				if($('#health-tips .function-wrapper .function-middle-wrapper p').length > 0){
					$('#health-tips .function-wrapper .function-middle-wrapper p').each(function(){
						$(this).removeClass('active');
					});
					$('#health-tips .function-wrapper .function-middle-wrapper p[rel="'+rel+'"]').addClass('active');
				}
				if($('#health-tips .function-detail-wrapper .detail-right-wrapper').length > 0){
					$('#health-tips .function-detail-wrapper .detail-right-wrapper').each(function(){
						$(this).removeClass('active');
					});
					$('#health-tips .function-detail-wrapper .detail-right-wrapper[rel="'+rel+'"]').addClass('active');
				}
			}
		});

		$('#health-tips .function-tab-wrapper .function-tab-btn').click(function(){
			if (typeof($(this).attr('rel')) !== 'undefined') {
				var rel = $(this).attr('rel');
				$('#health-tips .function-tab-wrapper .function-tab-btn').each(function(){
					$(this).removeClass('active');
				});
				$('#health-tips .function-tab-wrapper .function-tab-btn[rel="'+rel+'"]').addClass('active');

				if($(window).width() >= 768) {
					var temp = 'left';
				}else{
					var temp = 'right';
				}
				$('#health-tips .function-'+temp+'-wrapper').each(function(){
					$(this).removeClass('active');
				});
				$('#health-tips .function-'+temp+'-wrapper[rel="'+rel+'"]').addClass('active');
				health_tips();

				$('.function-'+temp+'-wrapper:visible .function-btn').each(function(){
					$(this).removeClass('active');
				});
				$('.function-'+temp+'-wrapper:visible .function-btn:first-child').addClass('active');

				var rel2 = $('.function-'+temp+'-wrapper:visible .function-btn:first-child').attr('rel');
				$('#health-tips .function-wrapper .function-middle-wrapper img').each(function(){
					$(this).removeClass('active');
				});
				$('#health-tips .function-wrapper .function-middle-wrapper img[rel="'+rel2+'"]').addClass('active');

				$('#health-tips .function-wrapper .function-middle-wrapper p').each(function(){
					$(this).removeClass('active');
				});
				$('#health-tips .function-wrapper .function-middle-wrapper p[rel="'+rel2+'"]').addClass('active');
				$('#health-tips .function-detail-wrapper .detail-right-wrapper').each(function(){
					$(this).removeClass('active');
				});
				$('#health-tips .function-detail-wrapper .detail-right-wrapper[rel="'+rel2+'"]').addClass('active');
			}
		});
	}
	/*health-tips*/
	
	

	
	
	
	
});

