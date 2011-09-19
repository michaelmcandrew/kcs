<?php
// $Id: page.tpl.php,v 1.47 2010/11/05 01:25:33 dries Exp $

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<div id="wrapper">
	<div id="header">	
		<div id="header_left">	
			<?php if ($site_name || $site_slogan): ?>
				<?php if ($site_name): ?>
					<h1><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
				<?php endif; ?>
				<?php if ($site_slogan): ?>
					<h2 id="site-slogan"><?php print $site_slogan; ?></h2>
				<?php endif; ?>
			<?php endif; ?>
		</div>

		<?php print render($page['header']); ?>
	</div>
	
	<div id="top_nav">
    	<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main_menu'))); ?>
		<div id="secondary-menu-wrap">
        	<?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary_menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
		</div>
    </div>

	
	<?php print $messages; ?>
	
	<div id="main">
		<div id="left_col">			
			<?php if ($page['sidebar_first']): ?>    
				<?php print render($page['sidebar_first']); ?>  		
			<?php endif; ?>
		</div>
		
		<div id="content_wrap">		
			<?php if ($title): ?>
				<h2 class="title" id="page-title">
					<?php print $title; ?>
				</h2>
			<?php endif; ?>
			<?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
			<?php print render($page['content']); ?>
		</div>
		
		<div class="clear"></div>
	</div>

	<div id="footer">
		<div id="addresses">
			Keeping Children Safe Coalition<br />
			CAN Mezzanine<br />
			49-51 East Road<br />
			London<br />
			N1 6AH<br />
			Tel. 44 (0) 207 250 8325<br />
			Email: <a href="mailto:info@kcs-coalition.com">info@kcs-coalition.com</a><br />
			Registered charity number - 1142328		
		</div>
	
		<div id="credits">
			All content &copy; Keeping Children Safe<br />
			<a href="http://www.thirdsectordesign.org" target="_blank">Developed by Third Sector Design</a>
		</div>		
	</div>
	<div class="clear"></div>
</div>
