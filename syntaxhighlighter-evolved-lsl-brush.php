<?php
/*
Plugin Name: SyntaxHighlighter Evolved: LSL Brush
Description: Adds support for the LSL language to the SyntaxHighlighter Evolved plugin.
Author: Gwyneth Llewelyn
Version: 1.0.0
Author URI: http://gwynethllewelyn.net/
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_evolved_lsl_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_evolved_lsl_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_evolved_lsl_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-lsl', plugins_url( 'shBrushLsl.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.3' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_evolved_lsl_addlang( $brushes ) {
    $brushes['lsl'] = 'lsl';
    $brushes['Linden Scripting Language'] = 'lsl';
 
    return $brushes;
}
 
?>