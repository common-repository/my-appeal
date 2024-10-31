=== My Appeal ===
Stable tag: 2.2.6
Contributors: jordanleven
Tags: my appeal, imodules, appeal code, designation id
Requires at least: 4.0.0
Requires PHP 4.3.4
Tested up to: 5.4
License: GPLv2 or later
Requires PHP: 5.2.4

My Appeal allows you to append or replace appeal codes on iModules giving links with solicitation-specific appeal codes.


== Description ==
My Appeal is the perfect companion to your WordPress site if you're using the donation platform, iModules. It automatically detects appeal codes and designations in the query string of a URL and changes all appeal codes/designation IDs on the site until users session expires.

== Features ==
- Automatically changes appeal codes for 30 minutes when users are sent to a page including the query string, \"appealcode=\"
- Automatically prioritizes designation IDs for 30 minutes when users are sent to a page including the query string, \"dids=\"

== How to Use ==
When sending traffic to a site that has this plugin activated, simply include ```appealcode=``` in the URL along with your appeal code. So, for example, if you wanted to send traffic to https://giving.virginia.edu with the appeal code ```UVA1```, the URL you'd use would be https://giving.virginia.edu?appealcode=UVA1. Now, for the next thirty minutes, all existing appeal codes for any user who was suppled think link will be ```UVA1```. After thirty minutes, the cookie that contains the solicitation-specific appeal code will expire and it will no longer be appended or replaced on giving links.

In addition, you can specify priority designations for forms that use designation IDs. Simply include ```dids=``` in the URL along with a string of your prioritized designation IDs. For example, if you wanted to send traffic to http://giving.virginia.edu and have designation 287 appear at the top of iModules giving forms, the URL you'd use would be https://giving.virginia.edu?dids=287. Multiple designations can be used where designations IDs are delimited by periods (such as 287.278). For all pages where designation IDs are used, these these designations will appear at the top of the form for 30 minutes.

== Debugging ==
By default, My Appeal doesn't log anything to the browser console. If you are debugging issues on your end, though, you can enable logging by running the command ```my_appeal_verbose_on()``` in your browser console. To turn logging off, simply run ```my_appeal_verbose_off```.

== Feature Requests and Bug Reports ==
Please report any feature requests you have or bugs you encounter under the Support tab(https://wordpress.org/support/plugin/my-appeal). This is a new plugin and I'm hoping to add more user-requested features to make this useful to developers.

== Installation ==
Upload the My Appeal plugin to your site, and then simply activate it.

== Changelog ==

=== 2.2.6 === 
Notes for this release are unavailable

=== 2.2.5 === 
Notes for this release are unavailable

=== 2.2.4 === 
Notes for this release are unavailable

=== 2.2.3 === 
Notes for this release are unavailable

=== 2.2.2 === 
Notes for this release are unavailable

=== 2.2.1 === 
Notes for this release are unavailable

=== 2.2.0 === 
==== Features ==== 
- Initial commit 

=== 2.1.0 === 
==== Features ==== 
- Initial commit 

=== 2.0.1 === 
==== Bug Fixes ==== 
- Fixes an issue where using an appeal code in a page with multiple query string parameters might cause an error

=== 2.0 === 
==== Features ==== 
- Adds support for prioritizing designation IDs

==== Bug Fixes ==== 
- Bug fixes and improvements

=== 1.1 === 
==== Features ==== 
- Add ability to enable verbose logging

==== Bug Fixes ==== 
- Bug fixes and improvements

=== 1.0 === 
==== Features ==== 
- Initial release

