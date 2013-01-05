<?php
require_once("/var/www/newznab/www/config.php");
require_once("/var/www/newznab/www/lib/framework/db.php");

$db = new DB();

echo "This script will convert only your eleasefiles, releasenfo, groups, releases, parts and binaries table to InnoDB.\n";
echo "This may take a while depending on how large your tables are. Do not stop this script. It will finish.\n\n";

echo "Converting the binaries table to InnoDB\n";
$db->query("ALTER TABLE binaries ENGINE=InnoDB;");
echo "Finished converting the binaries table to InnoDB.\n\n";

echo "Converting the parts table to InnoDB\n";
$db->query("ALTER TABLE parts ENGINE=InnoDB;");
echo "Finished converting the parts table to InnoDB.\n\n";

echo "Converting the releases table to InnoDB\n";
$db->query("ALTER TABLE releases ENGINE=InnoDB;");
echo "Finished converting the releases table to InnoDB.\n\n";

echo "Converting the groups table to InnoDB\n";
$db->query("ALTER TABLE groups ENGINE=InnoDB;");
echo "Finished converting the groups table to InnoDB.\n\n";

echo "Converting the releasefiles table to InnoDB\n";
$db->query("ALTER TABLE releasefiles ENGINE=InnoDB;");
echo "Finished converting the releasefiles table to InnoDB.\n\n";

echo "Converting the releasenfo table to InnoDB\n";
$db->query("ALTER TABLE releasenfo ENGINE=InnoDB;");
echo "Finished converting the releasenfo table to InnoDB.\n\n";

?>
