<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Pblog
 * @since P Blog 1.0
 */
?>

		</div><!-- #main -->

			<?php 
			   $path = $_SERVER['DOCUMENT_ROOT'];
			   $path .= "/assets/footer.php";
			   include_once($path);
			?>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>