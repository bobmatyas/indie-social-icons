=== Indie Social Icons ===
Contributors: lastsplash
Tags: social links
Requires at least: 4.5
Tested up to: 6.3
Requires PHP: 5.6
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds the h-card "u-url" class to links to your social links.

== Description ==

This plugin facilitates connections between your WordPress site social profiles by adding the Microformat "u-url" field to your social links. It is useful for validating ownership of third-party profiles and inter-connecting 
your various web properties. The Microformat `h-card` is commonly used on sites associated with the IndieWeb movement.

== Installation ==

1. Upload or install plugin via WordPress.org Plugin Directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add social icons with the `rel="me"` attribute.
1. The plugin will add the `u-url` class to any social links with the `rel="me"` attribute.

== Frequently Asked Questions ==

= How do I add the `rel="me"` attribute to my social links? =

In the Block Editor, click on a social link and in the sidebar, select "Advanced" and for the "Link Rel" enter the value "me".

= Where can I test my `h-card` implementation? =

You can test at [https://indiewebify.me/validate-h-card/](https://indiewebify.me/validate-h-card/)

= Where can I learn more about the `h-card` format? =

[https://microformats.org/wiki/h-card](https://microformats.org/wiki/h-card)

= What is the Indieweb? Where can I learn more? =

The IndieWeb is a community of independent & personal websites connected by simple standards, based on the principles of: owning your domain & using it as your primary identity, publishing on your own site (optionally syndicating elsewhere), and owning your data.

You can learn more at [Indieweb.org](https://indieweb.org/). There are WordPress-specific resources at [https://indieweb.org/WordPress](https://indieweb.org/WordPress)


== Changelog ==

= 1.0 =
* Initial version
