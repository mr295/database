<?php
if (!defined('PDO::ATTR_DRIVER_NAME')) {
echo 'PDO Unsuccessful<br/>';
}
elseif (defined('PDO::ATTR_DRIVER_NAME')) {
echo 'PDO Successful<br/>';
}
?>