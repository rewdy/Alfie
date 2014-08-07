<?php
function alfie_form_system_theme_settings_alter(&$form, $form_state) {

	/* ----------------------------- DEVELOPMENT ----------------------------- */
	$form['alfie_info'] = array(
		'#prefix' => '<h3>Alfie Theme Configuration</h3> ',
		'#weight'=> -20
	);

	/* ----------------------------- Layout  --------------------------------- */
	$form['layout'] = array(
		'#type'          => 'fieldset',
		'#title'         => t('Layout Options'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
		'#description'   => t('The following are layout options for your site.'),
		'#weight'=> 5
	);
	$form['layout']['alfie_layout_breadcrumbs'] = array(
		'#type'          => 'radios',
		'#title'         => t('Breadcrumbs'),
		'#default_value' => theme_get_setting('alfie_layout_breadcrumbs'),
		'#description'   => t('Breadcrumbs are the list of links at the top of each page that tells the user which page they are on. (e.g. "<u>Home</u> &gt; About")'),
		'#options'		 => array(
			0 => 'Don\'t show breadcrumbs',
			1 => 'Show breadcrumbs'
		)
	);

	/* ----------------------------- Grid setup  --------------------------------- */
	$form['layout']['grid'] = array(
		'#type'          => 'fieldset',
		'#title'         => t('Grid Setup'),
		'#collapsible' 	 => TRUE,
		'#collapsed' 	 => TRUE,
		'#description'   => t('<strong>Column Configuration:</strong> This theme uses a 12 column grid. In this section you can select how many columns wide each sidebar should be. The main content column will be set to take up as many columns as remain after inserting the sidebar(s).'),
	);
	$form['layout']['grid']['alfie_layout_sidebar_first'] = array(
		'#type'          => 'select',
		'#title'         => t('Left sidebar number of columns'),
		'#default_value' => theme_get_setting('alfie_layout_sidebar_first'),
		'#options'		 => array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6)
	);
	$form['layout']['grid']['alfie_layout_sidebar_second'] = array(
		'#type'          => 'select',
		'#title'         => t('Right sidebar number of columns'),
		'#default_value' => theme_get_setting('alfie_layout_sidebar_second'),
		'#options'		 => array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6)
	);
	$form['layout']['grid']['alfie_layout_front_sidebar_first'] = array(
		'#type'          => 'select',
		'#title'         => t('Left sidebar number of columns <em>on the front page</em>'),
		'#default_value' => theme_get_setting('alfie_layout_front_sidebar_first'),
		'#options'		 => array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6)
	);
	$form['layout']['grid']['alfie_layout_front_sidebar_second'] = array(
		'#type'          => 'select',
		'#title'         => t('Right sidebar number of columns <em>on the front page</em>'),
		'#default_value' => theme_get_setting('alfie_layout_front_sidebar_second'),
		'#options'		 => array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6)
	);

	/* ----------------------------- GOOGLE ANALYTICS  ---------------------- */
	$form['GA'] = array(
		'#type'          => 'fieldset',
		'#title'         => t('Google Analytics'),
		'#collapsible' => TRUE,
		'#collapsed' => false,
		'#description'   => t('Include Google Analytics code'),
		'#weight'=> 5
	);
	$form['GA']['alfie_google_analytics'] = array(
		'#type'          => 'checkbox',
		'#title'         => t('Google Analytics'),
		'#default_value' => theme_get_setting('alfie_google_analytics'),
		'#description'   => t('Adds 
		<a href="http://www.google.com/analytics">Google Analytics</a> to your site.'),
	);
	$form['GA']['alfie_google_analytics_code'] = array(
		'#type'          => 'textarea',
		'#title'         => t('Google Analytics Site ID'),
		'#default_value' => theme_get_setting('alfie_google_analytics_code'),
		'#description'   => t('Enter the code from Google analytics to add to your site.'),
	);

}