=== Bootstrap MCE Elements ===
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=EQARCEQA2A5WG&lc=US&item_name=Daniel%20Nice%20Coding&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_LG%2egif%3aNonHosted
Contributors: Daniel Nice
Tags: bootstrap, tinymce, buttons, labels, elements
Requires at least: 3.5.0
Tested up to: 3.5.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Creates button within WP TinyMCE which inserts Bootstrap Buttons, Wells, Labels & Badges of different sizes and styles into your post/page.

== Description ==

This plugin creates a button inside of every rich text editor within WordPress which allows the user to insert pre-built Bootstrap compatible code into the editor.  This plugin includes the ability to add Buttons, Wells, Labels & Badges of different sizes and styles easily into your WordPress pages or posts.  It also allows you to include the default Bootstrap CSS for these objects in your WordPress editor and your template if you wish.

In addition if you want to you can modify the "display.css" to customize the look of the bootstrap elements.

This is a great plugin if you use a bootstrap theme such as the Roots theme.


== Installation ==

1. Upload the plugin dir to the `/wp-content/plugins/` directory or add the `bootstrap-mce-elements.zip` through the wordpress add plugin dialog
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to the 'Bootstrap MCE' menu under settings and make to select whether or not you wish the bootstrap CSS to be included for you in the Wordpress editor and/or the theme.
1. Open any page/post that uses a rich text editor and see the new "B" icon on the top row of the editor

== Frequently Asked Questions ==

= Why does the plugin only insert text into my editor? =

It actually is wrapping that text in a span with bootstrap classes but if you do not have the editor style enabled through the plugins settings or have the bootstrap classes in your Wordpress's editor-style.css file then all it will look like is unformatted text.

= The elements look correct in the editor but they do not show up on my sites front end? =

You either don't have the correct Bootstrap classes added to your themes classes or you do not have the front end css enabled on the plugins settings.

== Screenshots ==

1. Added options panel on the "labels" tab
2. Added options panel on the "buttons" tab
3. Example of built in Bootstrap CSS classes

== Changelog ==

= 1.0 =
* Initial Release