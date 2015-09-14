<?php
/**
 * This is the SIDEBAR include template.
 *
 * This is meant to be included in a page template.
 *
 * @package evoskins
 * @subpackage nonzero
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

// By default, this does nothing.  It's just here to simplify the includes of different sidebars, minimizing edits.

?>

<?php
if( $Skin->get_setting('column_count') == '3' )
{
	echo '<div id="secondaryContent_3columns">';
}
elseif( $Skin->get_setting('column_count') == '2' )
{
	echo '<div id="secondaryContent_2columns">';
}

	// ------------------------- SIDEBAR INCLUDED HERE --------------------------
	skin_include( '_sidebar-1.inc.php' );
	// Note: You can customize the default BODY footer by copying the
	// _body_footer.inc.php file into the current skin folder.
	// ----------------------------- END OF SIDEBAR -----------------------------

	if( $Skin->get_setting('column_count') == '3' )
	{
	// ------------------------- SIDEBAR INCLUDED HERE --------------------------
	skin_include( '_sidebar-2.inc.php' );
	// Note: You can customize the default BODY footer by copying the
	// _body_footer.inc.php file into the current skin folder.
	// ----------------------------- END OF SIDEBAR -----------------------------
	}
?>

	<div class="clear"></div>

</div> <!-- end of id="secondaryContent_Xcolumns" -->
<div class="clear"></div>
