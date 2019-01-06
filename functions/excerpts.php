<?php

function remove_excerpt_more_formatting( $more ) {
    return '...';
}
add_filter('excerpt_more', 'remove_excerpt_more_formatting');