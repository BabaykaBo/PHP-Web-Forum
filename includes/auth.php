<?php 

/**
 * Check if user is logged in
 * 
 * @return boolean true if user is logged in or false if not
 */
function isLoggedIn(){
    return (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']);
}