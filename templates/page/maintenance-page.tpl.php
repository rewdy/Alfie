<?php

/**
 * Alfie Theme
 * Maintenance Page
 *
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

$theme_path = $base_path . $directory;

?><!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

	<head>
		<?php print $head; ?>
		<title><?php print $head_title; ?></title>

		<!-- Styles -->
		<?php print $styles; ?>
		
		<!-- IE Styles -->
		<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php echo $theme_path; ?>/css/style-ie.css">
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if IE 7]>
		<link rel="stylesheet" href="<?php echo $theme_path; ?>/font/font-awesome-plus-ie7.css">
		<![endif]-->

		<?php print $scripts; ?>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	</head>

	<body class="<?php print $classes; ?>" <?php print $attributes;?>>
		
		<div id="jump-nav"><a href="#content">Skip to Content</a></div>
		<div id="control">

			<div id="page">

				<div id="wrapper">
					<header id="site-header">
						<div class="grid">
							<div class="g12">
								<?php $title_tag = ($title) ? 'div' : 'h1'; ?>
								<<?php echo $title_tag; ?> id="site-title">
									<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
										<?php if ($logo): ?><span class="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></span><?php endif; ?>
										<span class="text"><?php print $site_name; ?></span>
									</a>
								</<?php echo $title_tag; ?>>
							</div>
						</div> <!-- close .grid -->
					</header> <!-- close header#site-header -->

					<?php if ($messages!=''): ?>
					<div id="messages">
						<?php print $messages; ?>

					</div>
					<?php endif; ?>


					<div id="content-body">
						<div class="grid">

							<header id="page-header" class="g12">
								<?php print render($title_prefix); ?>

								<?php if ($title): ?><h1 id="page-title"><?php print $title; ?></h1><?php endif; ?>
								
								<?php print render($title_suffix); ?>

							</header>

							<div id="content" class="g12">

								<a id="main-content"></a>

								<?php print render($page['content']); ?>

							</div> <!-- /div#content -->

						</div> <!-- close .grid.row -->
					</div> <!-- close #content-body -->

				</div> <!-- close #wrapper -->

			</div> <!-- close div#page -->
		</div> <!-- close div#control -->
		
	</body>

</html>