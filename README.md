# mysql_wrapper
Since PHP 7 removed mysql connector and only left mysqli, but lot of legacy software is out there, we made this wrapper.

# How to Use
Just add the following line to a central php file:

`if (!function_exists('mysql_connect')) require_once 'mysqli_wrapper.php';`

If there are functions missing, please add them to mysqli_wrapper.php and ask us to merge your changes.
