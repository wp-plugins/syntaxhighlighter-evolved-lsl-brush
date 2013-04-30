<?php
/*
Plugin Name: SyntaxHighlighter Evolved: LSL Brush
Plugin URI: http://gwynethllewelyn.net/syntaxhighlighter-evolved-lsl-brush/
Description: Adds support for the LSL language to the SyntaxHighlighter Evolved plugin.
Author: Gwyneth Llewelyn
License: Simplified BSD License
Version: 1.2.0
Author URI: http://gwynethllewelyn.net/
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_evolved_lsl_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_evolved_lsl_addlang' );

// Tell SyntaxHighlighter Evolved about this new theme 
add_filter( 'syntaxhighlighter_themes', 'syntaxhighlighter_evolved_lsl_theme' );
 
 
// Register the brush file with WordPress
function syntaxhighlighter_evolved_lsl_regscript() {
    wp_register_script('syntaxhighlighter-brush-lsl',
    	plugins_url('shBrushLsl.js', __FILE__), 
    	array('syntaxhighlighter-core'), '1.1.0' );
    	
    // now add a new style too, to make it display closer to what the SL Viewer 2 shows
    //  Based on the "default" style
    wp_register_style('syntaxhighlighter-theme-lsl', 
    	plugins_url('shThemeLsl.css', __FILE__),
    	array(), '1.1.0');
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_evolved_lsl_addlang( $brushes ) {
    $brushes['lsl'] = 'lsl';
    $brushes['Linden Scripting Language'] = 'lsl';
 
    return $brushes;
}

// Add a new theme
function syntaxhighlighter_evolved_lsl_theme( $themes ) {
    $themes['lsl'] = 'LSL';
 
    return $themes;
}

?>