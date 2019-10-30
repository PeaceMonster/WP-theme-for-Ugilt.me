<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/page.css">
<div class="content">
    <?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
	endwhile; endif;
	?>      
</div>
<div class="sidebar" id="navBar">
	<script>
	
	var navBarStatus = 0;

	$(window).resize(function () {
		if (navBarStatus == 1) {
			$('#navBar').removeAttr('style');
			$('#navBarContent').css('display', 'none');
			navBarStatus = 0;
		}
	});

	function navBarToggle() {
		var windowWidth = window.innerWidth
		if (windowWidth <= 812) {
			if (navBarStatus == 0) {
				$('#navBar').animate({height: '400px'}, 'slow');
				$('#navBarContent').css('display', 'inline-block');
				$('#navBarContent').animate({opacity: '1'});
				navBarStatus = 1;
			} else {
				$('#navBar').animate({height: '50px'},'slow',function() {
					$('#navBar').removeAttr('style');
				});
				$('#navBarContent').animate({opacity: '0'}, 'slow', function() {
					$('#navBarContent').css('display', 'none');
				});
				
				navBarStatus = 0;
			}
		} else {
			if (navBarStatus == 0) {
				$('#navBar').animate({width: '200px'}, 'slow');
				$('#navBarContent').css('display', 'inline-block');
				$('#navBarContent').animate({opacity: '1'});
				navBarStatus = 1;
			} else {
				$('#navBar').animate({width: '50px'}, function() {
					$('#navBar').removeAttr('style');
				});
				$('#navBarContent').animate({opacity: '0'}, 'slow', function() {
					$('#navBarContent').css('display', 'none');
				});
				
				
				navBarStatus = 0;
			}
		}
		
	}
	
	</script>
	 <a href="javascript:void(0);" onclick="navBarToggle()"><i class="fa fa-bars fa-2x" style="color: white; position: relative; top: 10px; left: 10px;"></i></a><br>
	 <div class="navBar" id="navBarContent" style="display:none;opacity: 0;">
		<ul>
			<?php wp_list_pages( '&title_li=' ); ?>
		</ul>	 	
	 </div>
</div>
<?php get_footer(); ?>