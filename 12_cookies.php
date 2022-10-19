<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

// Since cookies are stored on the client, you shouldn't store sensitive data in them. Sessions are a better choice for storing sensitive data.

// Set a cookie
setcookie('name[one]', 'Brad', time() + 60); // 86400 = 1 day
setcookie('name[two]', 'Kevin', time() + 60); // 86400 = 1 day
setcookie('name[three]', 'Ryo', time() + 60); // 86400 = 1 day
// echo time();

// Get a cookie
if (isset($_COOKIE['name'])) {
  foreach($_COOKIE['name']  as $name => $value){
    echo '<p>' . $name . ':' . $value . '</p>';
  }

}

// Delete a cookie
// setcookie('name', '', time() - 86400);
