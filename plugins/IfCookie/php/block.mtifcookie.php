<?php
function smarty_block_mtifcookie ( $args, $content, &$ctx, &$repeat ) {
    $name = $args[ 'name' ];
    $key = $args[ 'key' ];
    if (! $key ) {
        $key = 'cookie_val';
    }
    $cookie_val = $_COOKIE[ $name ];
    $ctx->__stash[ 'vars' ][ $key ] = $cookie_val;
    $args[ 'name' ] = $key;
    require_once( 'block.mtif.php' );
    return smarty_block_mtif( $args, $content, $ctx, $repeat );
}
?>