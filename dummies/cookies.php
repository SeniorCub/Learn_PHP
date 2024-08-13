<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
// Delete cookie
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
// Modify cookie
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
// Check if cookies are embeded
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled. ". count($_COOKIE);
} else {
  echo "Cookies are disabled.". count($_COOKIE);
}
?>

</body>
</html>