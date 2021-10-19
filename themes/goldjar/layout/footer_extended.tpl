	<script type="text/javascript">jQuery(document).ready(function(){
		  jQuery('.counter').countUp({
			'time': 2000,
			'delay': 10
		  });
	  });</script>
	<footer class="ent-footer">
		<div class="ent-container">
			[FOOTER]
		</div>
		<div class="ent-container info-footer">
			<div class="footer1">
				 [MENU_FOOTER]
			</div>
			<div class="footer2">
				[FEATURED_PRODUCT]
				
			</div>
			<div class="footer3">
				[COMPANY_INFO]
			</div>
		</div>
		<div class="ent-container">
			[FOOTER_SITE]
			<nav class="section-footer-bottom footerNav2">
				<div class="wraper">
					<div class="container">
						<!-- BEGIN: theme_type -->
						<div class="theme-change">
						<!-- BEGIN: loop -->
							<!-- BEGIN: other -->
							<a href="{STHEME_TYPE}" rel="nofollow" title="{STHEME_INFO}"><i class="fa fa-{STHEME_ICON}"></i></a>
							<!-- END: other -->
							<!-- BEGIN: current -->
							<span title="{LANG.theme_type_select}: {STHEME_TITLE}"><i class="fa fa-{STHEME_ICON}"></i></span>
							<!-- END: current -->
							
						<!-- END: loop -->
							<span class="bttop">
								<a class="pointer"><i class="fa fa-eject fa-lg"></i></a>
							</span>
						</div>
						<!-- END: theme_type -->
						
					</div>
				</div>
			</nav>
		</div>
	</footer>
    
    {ADMINTOOLBAR}
    <!-- SiteModal Required!!! -->
    <div id="sitemodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <i class="fa fa-spinner fa-spin"></i>
                </div>
                <button type="button" class="close" data-dismiss="modal"><span class="fa fa-times"></span></button>
            </div>
        </div>
    </div>
    <div class="fix_banner_left">
        [FIX_BANNER_LEFT]
    </div>
    <div class="fix_banner_right">
        [FIX_BANNER_RIGHT]
    </div>
