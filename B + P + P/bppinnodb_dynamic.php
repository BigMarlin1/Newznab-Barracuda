<?php
require_once("/var/www/newznab/www/config.php");
require_once("/var/www/newznab/www/lib/framework/db.php");

$db = new DB();

echo "This script will convert only your partrepair, parts and binaries table to InnoDB using dynamic row format..\n";
echo "This may take a while depending on how large your tables are. Do not stop this script. It will finish.\n\n";

echo "Converting the partrepair table to InnoDB using dynamic row format.\n";
$db->query("ALTER TABLE partrepair ENGINE=InnoDB ROW_FORMAT=DYNAMIC;");
echo "Finished converting the partrepair table to InnoDB using dynamic row format.\n\n";

echo "Converting the binaries table to InnoDB using dynamic row format.\n";
$db->query("ALTER TABLE binaries ENGINE=InnoDB ROW_FORMAT=DYNAMIC;");
echo "Finished converting the binaries table to InnoDB using dynamic row format.\n\n";

echo "Converting the parts table to InnoDB using dynamic row format.\n";
$db->query("ALTER TABLE parts ENGINE=InnoDB ROW_FORMAT=DYNAMIC;");
echo "Finished converting the parts table to InnoDB using dynamic row format.\n\n";

?>
