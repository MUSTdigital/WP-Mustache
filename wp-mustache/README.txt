=== Plugin Name ===
Contributors: mustdigital
Donate link: http://mustdigital.ru
Tags: templates, mustache
Requires at least: 4.3
Tested up to: 4.3
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Basic include of the [Mustache.php](https://github.com/bobthecow/mustache.php) in WP.

== Description ==

The only purpose of this plugin is to quickly include the [Mustache.php](https://github.com/bobthecow/mustache.php) in WP.

[Mustache](http://mustache.github.io/) is a simple, logic-less template engine.

See the [Mustache.php Wiki](https://github.com/bobthecow/mustache.php/wiki) for documentation.

== Installation ==

Upload and install. The plugin comes with just one but handy function: `mustache()`:

```
    $template = 'Hello, {{planet}}!';
    $vars = array('planet' => 'World');
    
    echo mustache($template, $vars);
```
You can pass Mustache options (which are listed [here](https://github.com/bobthecow/mustache.php/wiki#constructor-options)) as an array in a third parameter of `mustache()`.

== Changelog ==

= 1.0 =
* Initial release.