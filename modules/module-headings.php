<?php
// Do not edit this file. It's generated by jetpack/tools/build-module-headings-translations.php

/**
 * For a given module, return an array with translated name, description and recommended description.
 *
 * @param string $key Module file name without .php
 *
 * @return array
 */
function jetpack_get_module_i18n( $key ) {
	static $modules;
	if ( ! isset( $modules ) ) {
		$modules = array(
			'after-the-deadline' => array(
				'name' => _x( 'Spelling and Grammar', 'Module Name', 'jetpack' ),
				'description' => _x( 'Check your spelling, style, and grammar', 'Module Description', 'jetpack' ),
			),

			'carousel' => array(
				'name' => _x( 'Carousel', 'Module Name', 'jetpack' ),
				'description' => _x( 'Display images and galleries in a gorgeous, full-screen browsing experience', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Brings your photos and images to life as full-size, easily navigable galleries.', 'Jumpstart Description', 'jetpack' ),
			),

			'comment-likes' => array(
				'name' => _x( 'Comment Likes', 'Module Name', 'jetpack' ),
				'description' => _x( 'Increase visitor engagement by adding a Like button to comments.', 'Module Description', 'jetpack' ),
			),

			'comments' => array(
				'name' => _x( 'Comments', 'Module Name', 'jetpack' ),
				'description' => _x( 'Let readers use WordPress.com, Twitter, Facebook, or Google+ accounts to comment', 'Module Description', 'jetpack' ),
			),

			'contact-form' => array(
				'name' => _x( 'Contact Form', 'Module Name', 'jetpack' ),
				'description' => _x( 'Insert a customizable contact form anywhere on your site.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Adds a button to your post and page editors, allowing you to build simple forms to help visitors stay in touch.', 'Jumpstart Description', 'jetpack' ),
			),

			'copy-post' => array(
				'name' => _x( 'Copy Post', 'Module Name', 'jetpack' ),
				'description' => _x( 'Copy an existing post\'s content into a new draft post', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Copy an existing post\'s content into a new draft post', 'Jumpstart Description', 'jetpack' ),
			),

			'custom-content-types' => array(
				'name' => _x( 'Custom content types', 'Module Name', 'jetpack' ),
				'description' => _x( 'Display different types of content on your site with custom content types.', 'Module Description', 'jetpack' ),
			),

			'custom-css' => array(
				'name' => _x( 'Custom CSS', 'Module Name', 'jetpack' ),
				'description' => _x( 'Tweak your site’s CSS without modifying your theme.', 'Module Description', 'jetpack' ),
			),

			'enhanced-distribution' => array(
				'name' => _x( 'Enhanced Distribution', 'Module Name', 'jetpack' ),
				'description' => _x( 'Increase reach and traffic.', 'Module Description', 'jetpack' ),
			),

			'google-analytics' => array(
				'name' => _x( 'Google Analytics', 'Module Name', 'jetpack' ),
				'description' => _x( 'Set up Google Analytics without touching a line of code.', 'Module Description', 'jetpack' ),
			),

			'gravatar-hovercards' => array(
				'name' => _x( 'Gravatar Hovercards', 'Module Name', 'jetpack' ),
				'description' => _x( 'Enable pop-up business cards over commenters’ Gravatars.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Let commenters link their profiles to their Gravatar accounts, making it easy for your visitors to learn more about your community.', 'Jumpstart Description', 'jetpack' ),
			),

			'infinite-scroll' => array(
				'name' => _x( 'Infinite Scroll', 'Module Name', 'jetpack' ),
				'description' => _x( 'Automatically load new content when a visitor scrolls', 'Module Description', 'jetpack' ),
			),

			'json-api' => array(
				'name' => _x( 'JSON API', 'Module Name', 'jetpack' ),
				'description' => _x( 'Allow applications to securely access your content.', 'Module Description', 'jetpack' ),
			),

			'latex' => array(
				'name' => _x( 'Beautiful Math', 'Module Name', 'jetpack' ),
				'description' => _x( 'Use LaTeX markup for complex equations and other geekery.', 'Module Description', 'jetpack' ),
			),

			'lazy-images' => array(
				'name' => _x( 'Lazy Images', 'Module Name', 'jetpack' ),
				'description' => _x( 'Lazy load images', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Lazy-loading images improve your site\'s speed and create a smoother viewing experience. Images will load as visitors scroll down the screen, instead of all at once.', 'Jumpstart Description', 'jetpack' ),
			),

			'likes' => array(
				'name' => _x( 'Likes', 'Module Name', 'jetpack' ),
				'description' => _x( 'Give visitors an easy way to show they appreciate your content.', 'Module Description', 'jetpack' ),
			),

			'manage' => array(
				'name' => _x( 'Manage', 'Module Name', 'jetpack' ),
				'description' => _x( 'Manage all of your sites from a centralized dashboard.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Helps you remotely manage plugins, turn on automated updates, and more from <a href="https://wordpress.com/plugins/" target="_blank">wordpress.com</a>.', 'Jumpstart Description', 'jetpack' ),
			),

			'markdown' => array(
				'name' => _x( 'Markdown', 'Module Name', 'jetpack' ),
				'description' => _x( 'Write posts or pages in plain-text Markdown syntax', 'Module Description', 'jetpack' ),
			),

			'masterbar' => array(
				'name' => _x( 'WordPress.com Toolbar', 'Module Name', 'jetpack' ),
				'description' => _x( 'Replaces the admin bar with a useful toolbar to quickly manage your site via WordPress.com.', 'Module Description', 'jetpack' ),
			),

			'minileven' => array(
				'name' => _x( 'Mobile Theme', 'Module Name', 'jetpack' ),
				'description' => _x( 'Enable the Jetpack Mobile theme', 'Module Description', 'jetpack' ),
			),

			'monitor' => array(
				'name' => _x( 'Monitor', 'Module Name', 'jetpack' ),
				'description' => _x( 'Receive immediate notifications if your site goes down, 24/7.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Receive immediate notifications if your site goes down, 24/7.', 'Jumpstart Description', 'jetpack' ),
			),

			'notes' => array(
				'name' => _x( 'Notifications', 'Module Name', 'jetpack' ),
				'description' => _x( 'Receive instant notifications of site comments and likes.', 'Module Description', 'jetpack' ),
			),

			'photon-cdn' => array(
				'name' => _x( 'Asset CDN', 'Module Name', 'jetpack' ),
				'description' => _x( 'Serve static assets from our servers', 'Module Description', 'jetpack' ),
			),

			'photon' => array(
				'name' => _x( 'Photon', 'Module Name', 'jetpack' ),
				'description' => _x( 'Serve images from our servers', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Mirrors and serves your images from our free and fast image CDN, improving your site’s performance with no additional load on your servers.', 'Jumpstart Description', 'jetpack' ),
			),

			'post-by-email' => array(
				'name' => _x( 'Post by email', 'Module Name', 'jetpack' ),
				'description' => _x( 'Publish posts by sending an email', 'Module Description', 'jetpack' ),
			),

			'protect' => array(
				'name' => _x( 'Protect', 'Module Name', 'jetpack' ),
				'description' => _x( 'Block suspicious-looking sign in activity', 'Module Description', 'jetpack' ),
			),

			'publicize' => array(
				'name' => _x( 'Publicize', 'Module Name', 'jetpack' ),
				'description' => _x( 'Automated social marketing.', 'Module Description', 'jetpack' ),
			),

			'pwa' => array(
				'name' => _x( 'Progressive Web Apps', 'Module Name', 'jetpack' ),
				'description' => _x( 'Speed up and improve the reliability of your site using the latest in web technology.', 'Module Description', 'jetpack' ),
			),

			'related-posts' => array(
				'name' => _x( 'Related posts', 'Module Name', 'jetpack' ),
				'description' => _x( 'Increase page views by showing related content to your visitors.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Keep visitors engaged on your blog by highlighting relevant and new content at the bottom of each published post.', 'Jumpstart Description', 'jetpack' ),
			),

			'search' => array(
				'name' => _x( 'Search', 'Module Name', 'jetpack' ),
				'description' => _x( 'Enhanced search, powered by Elasticsearch', 'Module Description', 'jetpack' ),
			),

			'seo-tools' => array(
				'name' => _x( 'SEO Tools', 'Module Name', 'jetpack' ),
				'description' => _x( 'Better results on search engines and social media.', 'Module Description', 'jetpack' ),
			),

			'sharedaddy' => array(
				'name' => _x( 'Sharing', 'Module Name', 'jetpack' ),
				'description' => _x( 'Allow visitors to share your content.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Twitter, Facebook and many other buttons at the bottom of each post, making it easy for visitors to share your content.', 'Jumpstart Description', 'jetpack' ),
			),

			'shortcodes' => array(
				'name' => _x( 'Shortcode Embeds', 'Module Name', 'jetpack' ),
				'description' => _x( 'Embed media from popular sites without any coding.', 'Module Description', 'jetpack' ),
			),

			'shortlinks' => array(
				'name' => _x( 'WP.me Shortlinks', 'Module Name', 'jetpack' ),
				'description' => _x( 'Create short and simple links for all posts and pages.', 'Module Description', 'jetpack' ),
			),

			'sitemaps' => array(
				'name' => _x( 'Sitemaps', 'Module Name', 'jetpack' ),
				'description' => _x( 'Make it easy for search engines to find your site.', 'Module Description', 'jetpack' ),
			),

			'sso' => array(
				'name' => _x( 'Secure Sign On', 'Module Name', 'jetpack' ),
				'description' => _x( 'Allow users to log into this site using WordPress.com accounts', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Lets you log in to all your Jetpack-enabled sites with one click using your WordPress.com account.', 'Jumpstart Description', 'jetpack' ),
			),

			'stats' => array(
				'name' => _x( 'Site Stats', 'Module Name', 'jetpack' ),
				'description' => _x( 'Collect valuable traffic stats and insights.', 'Module Description', 'jetpack' ),
			),

			'subscriptions' => array(
				'name' => _x( 'Subscriptions', 'Module Name', 'jetpack' ),
				'description' => _x( 'Allow users to subscribe to your posts and comments and receive notifications via email', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Give visitors two easy subscription options — while commenting, or via a separate email subscription widget you can display.', 'Jumpstart Description', 'jetpack' ),
			),

			'tiled-gallery' => array(
				'name' => _x( 'Tiled Galleries', 'Module Name', 'jetpack' ),
				'description' => _x( 'Display image galleries in a variety of elegant arrangements.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Display image galleries in a variety of elegant arrangements.', 'Jumpstart Description', 'jetpack' ),
			),

			'vaultpress' => array(
				'name' => _x( 'Data Backups', 'Module Name', 'jetpack' ),
				'description' => _x( 'Off-site backups, security scans, and automatic fixes.', 'Module Description', 'jetpack' ),
			),

			'verification-tools' => array(
				'name' => _x( 'Site verification', 'Module Name', 'jetpack' ),
				'description' => _x( 'Establish your site\'s authenticity with external services.', 'Module Description', 'jetpack' ),
			),

			'videopress' => array(
				'name' => _x( 'VideoPress', 'Module Name', 'jetpack' ),
				'description' => _x( 'Fast, ad-free video hosting', 'Module Description', 'jetpack' ),
			),

			'widget-visibility' => array(
				'name' => _x( 'Widget Visibility', 'Module Name', 'jetpack' ),
				'description' => _x( 'Control where widgets appear on your site.', 'Module Description', 'jetpack' ),
			),

			'widgets' => array(
				'name' => _x( 'Extra Sidebar Widgets', 'Module Name', 'jetpack' ),
				'description' => _x( 'Add images, Twitter streams, and more to your sidebar.', 'Module Description', 'jetpack' ),
			),

			'wordads' => array(
				'name' => _x( 'Ads', 'Module Name', 'jetpack' ),
				'description' => _x( 'Earn income by allowing Jetpack to display high quality ads.', 'Module Description', 'jetpack' ),
			),

			'wordpress-com-compose' => array(
				'name' => _x( 'WordPress.com Compose', 'Module Name', 'jetpack' ),
				'description' => _x( 'Allow new block editor posts to be composed on WordPress.com.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Allow new block editor posts to be composed on WordPress.com.', 'Jumpstart Description', 'jetpack' ),
			),
		);
	}
	return $modules[ $key ];
}
/**
 * For a given module tag, return its translated version.
 *
 * @param string $key Module tag as is in each module heading.
 *
 * @return string
 */
function jetpack_get_module_i18n_tag( $key ) {
	static $module_tags;
	if ( ! isset( $module_tags ) ) {
		$module_tags = array(
			// Modules with `Other` tag:
			//  - modules/contact-form.php
			//  - modules/notes.php
			'Other' =>_x( 'Other', 'Module Tag', 'jetpack' ),

			// Modules with `Writing` tag:
			//  - modules/after-the-deadline.php
			//  - modules/copy-post.php
			//  - modules/custom-content-types.php
			//  - modules/enhanced-distribution.php
			//  - modules/json-api.php
			//  - modules/latex.php
			//  - modules/markdown.php
			//  - modules/post-by-email.php
			//  - modules/shortcodes.php
			//  - modules/wordpress-com-compose.php
			'Writing' =>_x( 'Writing', 'Module Tag', 'jetpack' ),

			// Modules with `Photos and Videos` tag:
			//  - modules/carousel.php
			//  - modules/photon-cdn.php
			//  - modules/photon.php
			//  - modules/shortcodes.php
			//  - modules/tiled-gallery.php
			//  - modules/videopress.php
			'Photos and Videos' =>_x( 'Photos and Videos', 'Module Tag', 'jetpack' ),

			// Modules with `Social` tag:
			//  - modules/comment-likes.php
			//  - modules/comments.php
			//  - modules/gravatar-hovercards.php
			//  - modules/likes.php
			//  - modules/publicize.php
			//  - modules/seo-tools.php
			//  - modules/sharedaddy.php
			//  - modules/shortcodes.php
			//  - modules/shortlinks.php
			//  - modules/subscriptions.php
			//  - modules/widgets.php
			'Social' =>_x( 'Social', 'Module Tag', 'jetpack' ),

			// Modules with `Appearance` tag:
			//  - modules/custom-css.php
			//  - modules/gravatar-hovercards.php
			//  - modules/infinite-scroll.php
			//  - modules/lazy-images.php
			//  - modules/minileven.php
			//  - modules/photon-cdn.php
			//  - modules/photon.php
			//  - modules/seo-tools.php
			//  - modules/shortcodes.php
			//  - modules/widget-visibility.php
			//  - modules/widgets.php
			//  - modules/wordads.php
			'Appearance' =>_x( 'Appearance', 'Module Tag', 'jetpack' ),

			// Modules with `Developers` tag:
			//  - modules/json-api.php
			//  - modules/pwa.php
			//  - modules/sso.php
			'Developers' =>_x( 'Developers', 'Module Tag', 'jetpack' ),

			// Modules with `Recommended` tag:
			//  - modules/lazy-images.php
			//  - modules/manage.php
			//  - modules/minileven.php
			//  - modules/monitor.php
			//  - modules/photon-cdn.php
			//  - modules/photon.php
			//  - modules/protect.php
			//  - modules/publicize.php
			//  - modules/related-posts.php
			//  - modules/sharedaddy.php
			//  - modules/sitemaps.php
			//  - modules/stats.php
			'Recommended' =>_x( 'Recommended', 'Module Tag', 'jetpack' ),

			// Modules with `Centralized Management` tag:
			//  - modules/manage.php
			'Centralized Management' =>_x( 'Centralized Management', 'Module Tag', 'jetpack' ),

			// Modules with `General` tag:
			//  - modules/masterbar.php
			'General' =>_x( 'General', 'Module Tag', 'jetpack' ),

			// Modules with `Mobile` tag:
			//  - modules/minileven.php
			'Mobile' =>_x( 'Mobile', 'Module Tag', 'jetpack' ),

			// Modules with `Traffic` tag:
			//  - modules/sitemaps.php
			//  - modules/wordads.php
			'Traffic' =>_x( 'Traffic', 'Module Tag', 'jetpack' ),

			// Modules with `Site Stats` tag:
			//  - modules/stats.php
			'Site Stats' =>_x( 'Site Stats', 'Module Tag', 'jetpack' ),
		);
	}
	return $module_tags[ $key ];
}
