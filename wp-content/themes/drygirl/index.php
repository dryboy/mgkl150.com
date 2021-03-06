<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>










		<div id="container">
			<div id="content" role="main">
<?php
	// Home featured widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>


			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 /*get_template_part( 'loop', 'index' );*/
			?>
			</div><!-- #content -->
		</div><!-- #container -->


<script type="text/javascript">
/*adding relevent class on each recent posts items*/
/*$(".advanced-recent-posts li.item:last").addClass("last");*/
$(".advanced-recent-posts li.item::nth-child(10n+1)").addClass("one");
$(".advanced-recent-posts li.item::nth-child(10n+2)").addClass("two");
$(".advanced-recent-posts li.item::nth-child(10n+3)").addClass("three");
$(".advanced-recent-posts li.item::nth-child(10n+4)").addClass("four");
$(".advanced-recent-posts li.item::nth-child(10n+5)").addClass("five");
$(".advanced-recent-posts li.item::nth-child(10n+6)").addClass("six");
$(".advanced-recent-posts li.item::nth-child(10n+7)").addClass("seven");
$(".advanced-recent-posts li.item::nth-child(10n+8)").addClass("eight");
$(".advanced-recent-posts li.item::nth-child(10n+9)").addClass("nine");
$(".advanced-recent-posts li.item::nth-child(10n)").addClass("ten");

/*IE adds compelte attributes to images - remove this */

$(window).load( function() {
        $('.widget_advancedrecentposts .advanced-recent-posts .item a .text').animate({opacity:'0',bottom:'-60',right:'-200'},{duration:'1'});
    });


/*hover animation: opacity changes as mouse hovers*/
/*need to add logit to calculate the container height/width and apply to animation*/


$(".home .advanced-recent-posts .item").hover(
function() {
	if ( $.browser.msie ) {
		$(this).children().children('.mask').css("display","block");
	}
	else {
		$(this).children().children('.mask').css("display","block");
		$(this).children().children('.mask').stop(true,true).animate({opacity:'0.8'},{duration:'5000'});
	}
	$(this).children().children('.text').stop(true,true).animate({opacity:'1',bottom:'10',right:'10'} , {duration:'5000'});
	$(this).children().children('canvas').stop(true,true).animate({top:'0'}, {duration:'5000'});
	$(this).children().children('img').stop(true,true).animate({top:'0'}, {duration:'8000'});
},
function() {
	if ($.browser.msie) {
		$(this).children().children('.mask').css("display","none");
	}
	else {
		$(this).children().children('.mask').stop(true,true).animate({opacity:'0'},{duration:'5000'}).delay(2000);
	}
	$(this).children().children('.text').stop(true,true).animate({opacity:'0',bottom:'-60',right:'-200'} , {duration:'5000'}).delay(2000);
	$(this).children().children('canvas').stop(true,true).animate({top:'-50'}, {duration:'5000'}).delay(2000);
	$(this).children().children('img').stop(true,true).animate({top:'-50'},{duration:'5000'}).delay(2000);
});





</script>
<?php get_footer(); ?>
