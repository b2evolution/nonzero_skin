<?php
/**
 * This is the BODY footer include template.
 *
 * For a quick explanation of b2evo 2.0 skins, please start here:
 * {@link http://manual.b2evolution.net/Skins_2.0}
 *
 * This is meant to be included in a page template.
 *
 * @package evoskins
 * @subpackage nonzero
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );
?>
<div id="footer" class="widthlayout">
	<p>
		A <a href="http://b2evolution.net/" title="b2evolution">b2evolution</a> port by <a href="http://Laibcoms.asia/" title="Snow World">JC John Sese Cuneta</a>.
		<br/>nonzero Theme by <a href="http://www.nodethirtythree.com/" title="nonzero">NodeThirtyThree Design</a>.
	</p>
	<p>
		<?php
			// Display footer text (text can be edited in Blog Settings):
			$Blog->footer_text( array(
					'before'      => '',
					'after'       => ' - ',
				) );
		?>

		<?php
		// Display a link to contact the owner of this blog (if owner accepts messages):
		$Blog->contact_link( array(
				'before'      => '',
				'after'       => ' - ',
				'text'   => T_('Contact'),
				'title'  => T_('Send a message to the owner of this blog...'),
			) );
		?>

		<a href="http://www.evocamp.com/" target="_blank">evoCamp skin</a>
		: <a href="http://www.solostream.com" target="_blank">Blog Design</a>
		<?php
		// Display additional credits:
		// If you can add your own credits without removing the defaults, you'll be very cool :))
		// Please leave this at the bottom of the page to make sure your blog gets listed on b2evolution.net
		credits( array(
				'list_start'  => ' : ',
				'list_end'    => ' ',
				'separator'   => ':',
				'item_start'  => ' ',
				'item_end'    => ' ',
			) );
		?>
	</p>
</div> <!-- end of id="footer" -->
</div> <!-- end of id="outer" -->