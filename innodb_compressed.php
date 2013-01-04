<?php
require_once("/var/www/newznab/www/config.php");
require_once("/var/www/newznab/www/lib/framework/db.php");

$db = new DB();

echo "This script will convert only your releases, parts and binaries table to Innodb with Compressed Row_Format.\n";
echo "This may take a while depending on how large your tables are. Do not stop this script. It will finish.\n\n";

echo "Converting the binaries table to InnoDB with Row_Format Compressed.\n";
$db->query("ALTER TABLE binaries ENGINE=InnoDB ROW_FORMAT=COMPRESSED KEY_BLOCK_SIZE=8;");
echo "Finished converting the binaries table to InnoDB with Row_Format Compressed.\n\n";

echo "Converting the parts table to InnoDB with Row_Format Compressed.\n";
$db->query("ALTER TABLE parts ENGINE=InnoDB ROW_FORMAT=COMPRESSED KEY_BLOCK_SIZE=8;");
echo "Finished converting the parts table to InnoDB with Row_Format Compressed.\n\n";

echo "Converting the releases table to InnoDB with Row_Format Compressed.\n";
$db->query("ALTER TABLE releases ENGINE=InnoDB ROW_FORMAT=COMPRESSED KEY_BLOCK_SIZE=8;");
echo "Finished converting the releases table to InnoDB with Row_Format Compressed.\n\n";

?>
