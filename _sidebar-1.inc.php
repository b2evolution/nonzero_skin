<?php
/**
 * This is the sidebar include template.
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

<?php
if( $Skin->get_setting('column_count') == '3' )
{
	echo '<div id="columnB_3columns">';
}
elseif( $Skin->get_setting('column_count') == '2' )
{
	echo '<div id="columnC_2columns">';
}
?>
	
	<?php
		// ------------------------- "Sidebar" CONTAINER EMBEDDED HERE --------------------------
		// Display container contents:
		skin_container( NT_('Sidebar'), array(
				// The following (optional) params will be used as defaults for widgets included in this container:
				// This will enclose each widget in a block:
				'block_start' => '<div class="$wi_class$">',
				'block_end' => '</div>',
				// This will enclose the title of each widget:
				'block_title_start' => '<h4><span>',
				'block_title_end' => '</span></h4>',
				// If a widget displays a list, this will enclose that list:
				'list_start' => '<ul class="links">',
				'list_end' => '</ul>',
				// This will enclose each item in a list:
				'item_start' => '<li>',
				'item_end' => '</li>',
				// This will enclose sub-lists in a list:
				'group_start' => '<ul>',
				'group_end' => '</ul>',
				// This will enclose (foot)notes:
				'notes_start' => '<div class="notes">',
				'notes_end' => '</div> <!-- end of class="notes" -->',
			) );
		// ----------------------------- END OF "Sidebar" CONTAINER -----------------------------
	?>

	
</div> <!-- end of id="columnN_Xcolumns" -->