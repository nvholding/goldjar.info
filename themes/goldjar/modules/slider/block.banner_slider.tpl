<!-- BEGIN: main -->
<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/{TEMPLATE}/css/owl.carousel.min.css">
<script src="{NV_BASE_SITEURL}themes/{TEMPLATE}/js/owl.carousel.min.js"></script>

<script>
	$(document).ready(function() { 
	  $("#slider").owlCarousel({ 
		autoplay:true,
		autoplayTimeout:6000,
		autoplayHoverPause:true,
		items: 1,
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		loop: true,
		nav: false,
		dots: true,
		responsiveClass:true
	  });
	});
</script>
<div class="ent-container-background slider-s" >
	<div class="skidehome owl-carousel owl-theme" id="slider">
		<!-- BEGIN: loop -->
		<div class="item item-slide">
			<a href="{ROW.link_href}">
				<img class="ent-image lazyloaded"src="{ROW.image}" alt="{ROW.image_alt}"/>
				<div class="containermo_ta_slide">
					
						<div class="mo_ta_slide">
							<div class="div1">
								
								<!-- BEGIN: title -->
								<p><span style="font-size: 18px; color: #1d4789;"><strong>{ROW.title}</h4></strong></span></p>
								<!-- END: title -->
								<!-- BEGIN: title1 -->
								<p><span style="font-size: 13px;"><strong>{ROW.title1}</strong></span></p>
								<!-- END: title1 -->
								<!-- BEGIN: title2 -->
								<p>
								<span style="font-size: 14px;">{ROW.title2}</span></p>
								<!-- END: title2 -->
							</div>
							<!-- BEGIN: more -->
								<span class="xthemsl">{ROW.more} <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
							<!-- END: more -->
						</div>
				</div>
			
			</a>
		</div>
		<!-- END: loop -->
	</div>
</div>
<!-- END: main -->