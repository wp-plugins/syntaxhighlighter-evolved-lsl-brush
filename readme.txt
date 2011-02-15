=== SyntaxHighlighter Evolved: LSL Brush ===
Contributors: gwynethllewelyn
Donate link: http://gwynethllewelyn.net/
Tags: code, sourcecode, php, xhtml, html, css, highlight, syntax, second life, lsl, linden scripting language
Requires at least: 3.0
Tested up to: 3.0.5
Stable tag: trunk

This is a Linden Scripting Language (LSL) brush for the "SyntaxHighlighter Evolved" plugin, the scripting language used in Second Life.

== Description ==

Programmer bloggers writing about Second Life and using Linden Scripting Language (LSL) examples on their WordPress sites often tend to have problems in displaying LSL properly so that it can be easily copied & pasted; it happens to me all the time! Fortunately, there is a way out: Viper007Bond wrote an excellent syntax highlighter (*SyntaxHighlighter Evolved*) which has easy support for additional languages. This is what this plugin does: it just extends Viper007Bond's plugin without fuss.

It is a brush designed to work with the [SyntaxHighlighter Evolved](http://wordpress.org/extend/plugins/syntaxhighlighter/) WordPress plugin (written by Viper), itself based on the SyntaxHighlighter JavaScript package by Alex Gorbatchev. To be able to use this brush, you will need the SyntaxHighlighter Evolved plugin installed.

To highlight your LSL code, simply wrap it between `[lsl]` and `[/lsl]` tags.

LSL syntax is current as of February 2011 (source: Official SL Wiki) and recognises a few obsolete keywords as well.

Instructions follow the same outline as the *asm-brush*, a brush for *SyntaxHighlighter Evolved* developed by chlankboot, and the plugin structure itself is as suggested by Viper007Bond. 

== Installation ==

= Uploading The Plugin =

Extract all files from the ZIP file, making sure to keep the file/folder structure intact, and then upload it to `/wp-content/plugins/`.

= Plugin Usage =

Make sure you have the "SyntaxHighlighter Evolved" plugin installed first!

Wrap your Linden Scripting Language code between `[lsl]` and `[/lsl]`.

== Frequently Asked Questions ==

= How can I add instructions to the brush? =

By editing the `shBrushLsl.js` file.

== Screenshots ==

1. Sample LSL code formatted with syntaxhighlighter-evolved-lsl

== Changelog ==

= 1.0.0 =

First release. LSL syntax as of February 2011.

== Upgrade Notice ==

= 1.0.0 =

First release. LSL syntax as of February 2011.
