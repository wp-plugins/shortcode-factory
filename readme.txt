=== Plugin Name ===
Contributors: wpmadeasy
Donate link: http://wpscf.com/
Tags: short codes, posts, pages, utility
Requires at least: 3.5
Tested up to: 4.3
Stable tag: 1.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create short codes for almost everything in the Word Press and use in Pages, Posts or anywhere.

== Description ==

<h4>WHAT's NEW in v1.5</h4>

* <strong>New Attributes</strong> to support HTML Output Tag and apply CSS Classes.
* <strong>'output'</strong> attribute lets you wrap the output of short code in an HTML tag. i.e. output="p" will wrap the output of a short code in HTML Paragraph tag.
* <strong>'class'</strong> attribute lets you add the CSS Class(es) to the wrapping tag. i.e. class="my-posts" - default is short code name.

Shortcode Factory offers a wide range of ready-to-use short codes for your daily WordPress operations. There are plenty of short codes available at hand. We have tried to bring most common to most wanted features of WordPress, to these short codes.

Short codes are available for following purposes:

<h4>Posts and Pages</h4>
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

<h4>Users and Roles</h4>
* User Role Based Content Display

<h4>Utility</h4>
* Login Form
* Login/Logout Link
* Register/Site Admin Link


See User's Guide at http://wpscf.com/users-guide/

== Installation ==

Shortcode Factory is easy to install.

1. Download plugin zip file to your computer and extract in a folder
1. Upload `shortcode-factory` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Why [scf-register-link] is not showing a register link, while I am logged out? =

The "Register" link is not offered if the Administration > Settings > General > Membership: 'Anyone can register' box is not checked.

= Why [scf-register-link] is not working with WPMU? =

On WordPressMU, there is no /wp-register.php file, and /wp-login.php?action=register is not a valid registration form. Thus, wp_register function does not show a registration link.

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

= 1.5 =
* New attributes (output and class) to support HTML Output Tag and apply CSS Classes.
* Added attributes support in plugin UI.
* Some performance improvements.

= 1.4 =
* New short code: [scf-login-form] to display WordPress login form.
* New short code: [scf-login-link] to display a login link, or if a user is logged in, displays a logout link.
* New short code: [scf-register-link] to display either the "Site Admin" link if the user is logged in or "Register" link if the user is not logged in.
* Enhanced UI to accommodate more short codes.

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

= 1.3 =
Upgrade to version 1.3 for new short code: [scf-allow]. See change log for more details.

= 1.4 =
Upgrade to version 1.4 for new short codes: [scf-login-form], [scf-login-link] and [scf-register-link]. See change log for more details.

= 1.5 =
Upgrade to version 1.5 for new supported attributes in short codes. See change log for more details.