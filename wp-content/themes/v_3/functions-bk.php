<?php
/**
 * starter theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package starter_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'starter_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function starter_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on starter theme, use a find and replace
		 * to change 'starter-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'starter-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'starter-theme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'starter_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'starter_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starter_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starter_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'starter_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starter_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'starter-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'starter-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'starter_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starter_theme_scripts() {
	wp_enqueue_style( 'starter-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'starter-theme-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'starter-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starter_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// get the taxonomy terms list by custom post type
function wpdocs_custom_taxonomies_terms_links($taxonomy) {

	// Get terms.
	$terms = get_terms( array(
    'taxonomy' => $taxonomy,
    'hide_empty' => false,
		'order' => 'DESC',
	));

	$out = array();
	foreach ( $terms as $term ) {

		$term_link = get_term_link( $term->term_id, $taxonomy );
		$out[] = '<li><a href="'.esc_url( $term_link ).'">'.esc_html( $term->name ).'</a></li>';
	}
	return implode( '', $out );
}

// chage eng month to jp
function encode_date($m) {
	switch ($m) {
	case 'January':
		return '1月';
		break;
	case 'February':
		return '2月';
		break;
	case 'March':
		return '3月';
		break;
	case 'April':
		return '4月';
		break;
	case 'May':
		return '5月';
		break;
	case 'June':
		return '6月';
		break;
	case 'July':
		return '7月';
		break;
	case 'August':
		return '8月';
		break;
	case 'September':
		return '9月';
		break;
	case 'October':
		return '10月';
		break;
	case 'November':
		return '11月';
		break;
	case 'December':
		return '12月';
		break;
	}
}

// get monthly archive
function wpdocs_custom_get_monthly_archive_array($cpt, $echo = true) {

	global $wpdb;
    $sql = $wpdb->prepare("SELECT * FROM $wpdb->posts WHERE post_type = %s AND post_status = 'publish' GROUP BY YEAR($wpdb->posts.post_date), MONTH($wpdb->posts.post_date) ORDER BY $wpdb->posts.post_date DESC", $cpt);
    $results = $wpdb->get_results($sql);

    if ( $results )
    {
        $archive = array();
        foreach ($results as $r)
        {
            $year = date('Y', strtotime( $r->post_date ) );
            $month = date('F', strtotime( $r->post_date ) );
            $month_num = date('m', strtotime( $r->post_date ) );
            $link = get_bloginfo('siteurl'). '/date/' . $year . '/' . $month_num.'?post_type='.$cpt;
            $this_archive = array( 'month' => $month, 'year' => $year, 'link' => $link );
            array_push( $archive, $this_archive );
        }

        if( !$echo )
            return $archive;
        foreach( $archive as $a )
        {
            echo '<li><a href="' . $a['link'] . '">' . $a['year'] . '年 ' . encode_date($a['month']) . ' </a></li>';
        }
    }
    return false;

}

add_filter( 'show_admin_bar', '__return_false' );



function custom_cron_schedule($schedules) {
	if (!isset($schedules['1min'])) {
		$schedules['5011200sec'] = array(
			'interval' => 5011200,
			'display' => __('Once every 58 days'),
		);
	}

	return $schedules;
}
add_filter('cron_schedules', 'custom_cron_schedule');

// Your function
function my_schedule_hook() {

	//do your stuff
	global $wpdb;
	$results = $wpdb->get_results('SELECT * FROM cts_insta_api');

	foreach ($results as $result) {
		update_insta_accessToken($result);
	}

}

// Schedule Cron Job Event
if (!wp_next_scheduled('name_your_cron')) {

	wp_schedule_event(time(), '5011200sec', 'name_your_cron');
}
add_action('name_your_cron', 'my_schedule_hook');

// Update the insta accesstoken before expired
function update_insta_accessToken($arg1) {

	//do your stuff
	global $wpdb;
	$id = $arg1->id;
	$userId = $arg1->user_id;
	$_userAccessToken = $arg1->api_token;
	$_graphBaseUrl = 'https://graph.instagram.com/';

	$params = array(
		'endpoint_url' => $_graphBaseUrl . '/refresh_access_token',
		'type' => 'GET',
		'url_params' => array(
			'grant_type' => 'ig_refresh_token',
		),
	);
	$ch = curl_init();
	$endpoint = $params['endpoint_url'];

	if ('POST' == $params['type']) {
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params['url_params']));
		curl_setopt($ch, CURLOPT_POST, 1);
	} elseif ('GET' == $params['type']) {
		$params['url_params']['access_token'] = $_userAccessToken;
		// add params to endpoint
		$endpoint .= '?' . http_build_query($params['url_params']);
	}

	// general curl options
	curl_setopt($ch, CURLOPT_URL, $endpoint);

	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$response = curl_exec($ch);

	curl_close($ch);

	$responseArray = json_decode($response, true);

	$updatedDate = new DateTime();
	$formatUpdatedDate = $updatedDate->format('Y-m-d');

	if (isset($responseArray['access_token'])) {

		$data = array(
			'api_key' => $responseArray['access_token'],
			'updated_date' => $formatUpdatedDate,
		);
		$wpdb->update('cts_insta_api', $data, array('id' => $id));
	}
}

// instagram feed
function get_insta_feeds($arg1){
    global $wpdb;
    $_graphBaseUrl = 'https://graph.instagram.com/';
    // $userId = '17841452264431605';
    $results = $wpdb->get_results("SELECT * FROM cts_insta_api WHERE user_id='".$arg1."'");
    foreach ($results as $result) {
        $_userAccessToken = $result->api_key;
    }
    $instaFeed = '';
    $params = array(
        'endpoint_url' => $_graphBaseUrl . $arg1 . '/media',
        'type' => 'GET',

        'url_params' => array(
            'fields' => 'id,caption,media_type,media_url,permalink'
        )
    );
    $ch = curl_init();
    $endpoint = $params['endpoint_url'];
    if ('POST' == $params['type']) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params['url_params']));
        curl_setopt($ch, CURLOPT_POST, 1);
    } elseif ('GET' == $params['type']) {
        $params['url_params']['access_token'] = $_userAccessToken;
        $endpoint .= '?' . http_build_query($params['url_params']);
    }
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $responseArray = json_decode($response, true);
    if (isset($responseArray['error'])) {
        echo $responseArray['error']['message'];
    } else {
		$count = 0;
		foreach ($responseArray['data'] as $post) {
			if($post['media_type'] != 'VIDEO') {

				if ($count == 5) {
					break;
				}

				$instaFeed .='<li><a href="' . $post['permalink'] . '" rel="noreferrer" target="_blank"><figure><img src="' . $post['media_url'] . '"
							alt="instagram"></figure></a></li>';

				$count++;
			}
		}
	}
	echo $instaFeed;
}
add_action('insta_feed', 'get_insta_feeds', 10, 1);

/// case post_per_page
function wpd_testimonials_query( $query ){
    if( ! is_admin()
        && $query->is_post_type_archive( 'case' )
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', 15 );
    }
}
add_action( 'pre_get_posts', 'wpd_testimonials_query' );
