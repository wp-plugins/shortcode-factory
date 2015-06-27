=== Plugin Name ===
Contributors: wpmadeasy
Donate link: http://wpscf.com/
Tags: short codes, posts, pages, utility
Requires at least: 3.5
Tested up to: 4.2.2
Stable tag: 1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create short codes for almost everything in the Word Press and use in Pages, Posts or anywhere.

== Description ==

<h4>WHAT's NEW</h4>

* <strong>[scf-allow]</strong> Displays selected content for specified role(s) only. If no role is specified, simply returns the content.

Shortcode Factory offers a wide range of ready-to-use short codes for your daily WordPress operations. There are plenty of short codes available at hand. We have tried to bring most common to most wanted features of WordPress, to these short codes.

Short codes are available for following purposes:

* Post ID
* Post Title
* Post Content
* Post Excerpt
* Post Meta (Publish Date, Modified Date, Comments Feed Link)
* Post Permalink
* Post Author (ID, Display Name, First Name, Last Name, Biography, Jabber, AIM, YIM, Google Plus, Twitter, Login Name, Password, Email, URL, Registration Date/Time, Account Status, Activation Key, Roles, Access Level)
* Post Featured Image (ID, URL, HTML Image / Thumbnail, Medium, Full)
* Post Custom Field
* Post Categories (Names or Links / with Separator)
* Post Tags (Names or Links / with Separator)
* Post Custom Taxonomies (Names or Links / with Separator)
* Post Attachments (Custom Output / with Separator)
* Next Post (Custom Link Label, Position and Output Format)
* Previous Post (Custom Link Label, Position and Output Format)
* User Role Based Content Display

See User's Guide at http://wpscf.com/users-guide/

== Installation ==

Shortcode Factory is easy to install.

1. Download plugin zip file to your computer and extract in a folder
1. Upload `shortcode-factory` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Does this plugin has a known conflict with Wordpress or other plugins? =

Although, we have tested it in very much detail. But technically, it shouldn’t create a conflict, since it does not try to change anything in the Wordpress System.

= What if I use another short code in [scf-allow]...[/scf-allow]? =

[scf-allow] supports "short code within short code", so your other short codes in an [scf-allow]...[/scf-allow] block are rendered pretty fine.

== Screenshots ==

1. Plenty of short codes
2. Every short code has different attributes and options
3. Insert anywhere in a Post or Page
4. Works as expected, see it in action on front website

== Changelog ==

= 1.3 =
* New short code [scf-allow] introduced to control the display of certain content in a post/page, based on User Role
* Performance improvements

= 1.2 =
* Built-in pages for plugin Settings, Help and Support
* Dedicated menu option for plugin, in Word Press Admin left side menu
* Settings Page: Control plugin icon's visibility
* Help Page: Quick reference to available short codes, and link to online User's Guide
* Support Page: Links to plugin support, questions, change log and previous versions
* Some performance improvements

= 1.1.1 =
* add_query_arg() vulnerability fix for potential XSS attack vectors
* Compatibility testing up to Word Press 4.2

= 1.1 =
* Added user guide link in the short code UI, for an easy access to quick reference.

= 1.0 =
* First release, with basic Posts/Pages short codes

== Upgrade Notice ==

= 1.0 =
This is the first release and does not require an upgrade.

= 1.2 =
Upgrade to version 1.2 for some useful stuff built-in to the plugin's option pages. See change log for more details.