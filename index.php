<?php
/**
 * @version 0.1
 */
/*
   Plugin Name: Login Never Expire
   Plugin URI: http://www.wordpressmatrix.com/plugin/214/wordpress-plugin-login-never-expire/
   Description: Set login cookie expired after 100 years.
   Author: Tonvin Tian <itonvin@gmail.com>
 */
add_filter('auth_cookie_expiration', 'Login_Never_Expire', 10, 3);
function Login_Never_Expire() {
    return time()+3600*24*365*100;
}

