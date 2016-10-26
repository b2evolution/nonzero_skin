<?php
/**
 * This is the template that displays the item block
 *
 * This file is not meant to be called directly.
 * It is meant to be called by an include in the main.page.php template (or other templates)
 *
 * b2evolution - {@link http://b2evolution.net/}
 * Released under GNU GPL License - {@link http://b2evolution.net/about/license.html}
 * @copyright (c)2003-2009 by Francois PLANQUE - {@link http://fplanque.net/}
 *
 * @package evoskins
 * @subpackage nonzero
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

global $Item;

// Default params:
$params = array_merge( array(
		'feature_block'   => false,
		'content_mode'    => 'auto',		// 'auto' will auto select depending on $disp-detail
		'item_class'      => 'post',
		'image_size'	    => 'fit-400x320',
		'more_link_text'  => T_('Read more'),
	), $params );

?>
<div id="<?php $Item->anchor_id() ?>" class="<?php $Item->div_classes( $params ) ?>" lang="<?php $Item->lang() ?>">

	<?php
		$Item->locale_temp_switch(); // Temporarily switch to post locale (useful for multilingual blogs)
	?>

	<p class="postinfo">
	<?php
		if( $Item->is_intro() )
		{	// Display edit link only if we're displaying an intro post:
			$Item->edit_link( array( // Link to backoffice for editing
				'before'    => '<div class="floatright">',
				'after'     => '</div>',
			) );
		}
	?>
	</p>

	<h3><?php $Item->title(); ?></h3>
		<ul class="post_info">
		<?php
		if( ! $Item->is_intro() )
		{	// Display only if we're not displaying an intro post:
			$Item->author( array(
				'before'       => T_('<li class="date">Posted by '),' ',
				'after'        => ' ',
			) );
			$Item->issue_time( array(
				'before'      => /* TRANS: date */ T_('on '),
				'after'       => '</li>',
				'time_format' => 'm.d.Y'.'',
			) );
			// Link to comments, trackbacks, etc.:
			$Item->feedback_link( array(
				'type' => 'feedbacks',
				'link_before' => '<li class="comments">',
				'link_after' => '</li>',
				'link_text_zero' => '#',
				'link_text_one' => '#',
				'link_text_more' => '#',
				'link_title' => '#',
				'use_popup' => false,
			) );
		}
		?>
		</ul>

		<?php
			// ---------------------- POST CONTENT INCLUDED HERE ----------------------
			skin_include( '_item_content.inc.php', $params );
			// Note: You can customize the default item feedback by copying the generic
			// /skins/_item_content.inc.php file into the current skin folder.
			// -------------------------- END OF POST CONTENT -------------------------
		?>

		<?php
		if( ! $Item->is_intro() ) // Do NOT apply tags, comments and feedback on intro posts
		{
			// List all tags attached to this post:
			$Item->tags( array(
					'before' =>         '<div class="posttags">'.T_('Tags').': ',
					'after' =>          '</div>',
					'separator' =>      ', ',
				) );
		}
		?>

		<p class="postinfo">
		<br/>
		<?php
		if( ! $Item->is_intro() )
		{	// Display only if we're not displaying an intro post:
			$Item->categories( array(
				'before'          => T_('In '),
				'after'           => ' ',
				'include_main'    => true,
				'include_other'   => true,
				'include_external'=> true,
				'link_categories' => true,
			) );
			$Item->edit_link( array( // Link to backoffice for editing
				'before'    => ' | ',
				'after'     => '',
			) );
		}
		?>
		</p>

	</div>

<?php
locale_restore_previous();	// Restore previous locale (Blog locale)

/*
 * $Log: _item_block.inc.php,v $
 * Revision 1.1  2009/05/23 14:12:42  fplanque
 * All default skins now support featured posts and intro posts.
 *
 */
?>
