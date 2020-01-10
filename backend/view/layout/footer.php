				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ujian Online</span>
							CMS &copy; <?php echo date('Y')?>
						</span>

						
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
		

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url()?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/buttons.flash.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/buttons.colVis.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/dataTables.select.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/moment.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/daterangepicker.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="<?php echo base_url()?>assets/summernote/summernote.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="<?php echo base_url()?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			$('.data-table').DataTable();
			$('.aksi-hapus').click(function(){
				var url = $(this).attr('data-href');
				var u_reload = $(this).attr('data-reload');
				var confirm = window.confirm('Yakin akan menghapus data?');
				if(confirm){
					$.ajax({
						url:url,
						type:'GET',
						success:function(){
							location.href=u_reload;
						}
					})
				}
			});
			$('.date-timepicker').datetimepicker({
				 defaultDate:new Date(),
				 format: 'YYYY-MM-DD HH:mm:ss',//use this option to display seconds
				 icons: {
					time: 'fa fa-clock-o',
					date: 'fa fa-calendar',
					up: 'fa fa-chevron-up',
					down: 'fa fa-chevron-down',
					previous: 'fa fa-chevron-left',
					next: 'fa fa-chevron-right',
					today: 'fa fa-arrows ',
					clear: 'fa fa-trash',
					close: 'fa fa-times'
				 }
				});

			$('.editor').summernote({height:300});
			jQuery(function($) {
			 var $sidebar = $('.sidebar').eq(0);
			 if( !$sidebar.hasClass('h-sidebar') ) return;
			
			 $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
				if( event_name !== 'sidebar_fixed' ) return;
			
				var sidebar = $sidebar.get(0);
				var $window = $(window);
			
				//return if sidebar is not fixed or in mobile view mode
				var sidebar_vars = $sidebar.ace_sidebar('vars');
				if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
					$sidebar.removeClass('lower-highlight');
					//restore original, default marginTop
					sidebar.style.marginTop = '';
			
					$window.off('scroll.ace.top_menu')
					return;
				}
			
			
				 var done = false;
				 $window.on('scroll.ace.top_menu', function(e) {
			
					var scroll = $window.scrollTop();
					scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
					if (scroll > 17) scroll = 17;
			
			
					if (scroll > 16) {			
						if(!done) {
							$sidebar.addClass('lower-highlight');
							done = true;
						}
					}
					else {
						if(done) {
							$sidebar.removeClass('lower-highlight');
							done = false;
						}
					}
			
					sidebar.style['marginTop'] = (17-scroll)+'px';
				 }).triggerHandler('scroll.ace.top_menu');
			
			 }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			
			 $(window).on('resize.ace.top_menu', function() {
				$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			 });
			
			
			});
		</script>
	</body>
</html>





				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		
		<script type="text/javascript">
			
		</script>
		<!-- inline scripts related to this page -->
	</body>
</html>

