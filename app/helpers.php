<?php

/**
 * this is a helper file created by developer
 */


/**
 * function set_active() is used in the navigation.blade.php file
 */
function set_active($path, $active = 'active')
{
    return Request::is($path) ? $active : '';
}