<?php
require_once("/var/www/newznab/www/config.php");
require_once("/var/www/newznab/www/lib/framework/db.php");

$db = new DB();

echo "This script will convert all your tables to InnoDB.\n";
echo "This may take a while depending on how large your tables are. Do not stop this script. It will finish.\n\n";

echo "Converting the parts table to InnoDB\n";
$db->query("ALTER TABLE parts ENGINE=InnoDB;");
echo "Finished converting the parts table to InnoDB.\n\n";

echo "Converting the roleexcat table to InnoDB\n";
$db->query("ALTER TABLE roleexcat ENGINE=InnoDB;");
echo "Finished converting the roleexcat table to InnoDB.\n\n";

echo "Converting the binaries table to InnoDB\n";
$db->query("ALTER TABLE binaries ENGINE=InnoDB;");
echo "Finished converting the binaries table to InnoDB.\n\n";

echo "Converting the anidb table to InnoDB\n";
$db->query("ALTER TABLE anidb ENGINE=InnoDB;");
echo "Finished converting the anidb table to InnoDB.\n\n";

echo "Converting the animetitles table to InnoDB\n";
$db->query("ALTER TABLE animetitles ENGINE=InnoDB;");
echo "Finished converting the animetitles table to InnoDB.\n\n";

echo "Converting the bookinfo table to InnoDB\n";
$db->query("ALTER TABLE bookinfo ENGINE=InnoDB;");
echo "Finished converting the bookinfo table to InnoDB.\n\n";

echo "Converting the binaryblacklist table to InnoDB\n";
$db->query("ALTER TABLE binaryblacklist ENGINE=InnoDB;");
echo "Finished converting the binaryblacklist table to InnoDB.\n\n";

echo "Converting the category table to InnoDB\n";
$db->query("ALTER TABLE category ENGINE=InnoDB;");
echo "Finished converting the category table to InnoDB.\n\n";

echo "Converting the consoleinfo table to InnoDB\n";
$db->query("ALTER TABLE consoleinfo ENGINE=InnoDB;");
echo "Finished converting the consoleinfo table to InnoDB.\n\n";

echo "Converting the content table to InnoDB\n";
$db->query("ALTER TABLE content ENGINE=InnoDB;");
echo "Finished converting the content table to InnoDB.\n\n";

echo "Converting the episodeinfo table to InnoDB\n";
$db->query("ALTER TABLE episodeinfo ENGINE=InnoDB;");
echo "Finished converting the episodeinfo table to InnoDB.\n\n";

echo "Converting the forumpost table to InnoDB\n";
$db->query("ALTER TABLE forumpost ENGINE=InnoDB;");
echo "Finished converting the forumpost table to InnoDB.\n\n";

echo "Converting the genres table to InnoDB\n";
$db->query("ALTER TABLE genres ENGINE=InnoDB;");
echo "Finished converting the genres table to InnoDB.\n\n";

echo "Converting the groups table to InnoDB\n";
$db->query("ALTER TABLE groups ENGINE=InnoDB;");
echo "Finished converting the groups table to InnoDB.\n\n";

echo "Converting the menu table to InnoDB\n";
$db->query("ALTER TABLE menu ENGINE=InnoDB;");
echo "Finished converting the menu table to InnoDB.\n\n";

echo "Converting the movieinfo table to InnoDB\n";
$db->query("ALTER TABLE movieinfo ENGINE=InnoDB;");
echo "Finished converting the movieinfo table to InnoDB.\n\n";

echo "Converting the musicinfo table to InnoDB\n";
$db->query("ALTER TABLE musicinfo ENGINE=InnoDB;");
echo "Finished converting the musicinfo table to InnoDB.\n\n";

echo "Converting the partrepair table to InnoDB\n";
$db->query("ALTER TABLE partrepair ENGINE=InnoDB;");
echo "Finished converting the partrepair table to InnoDB.\n\n";

echo "Converting the predb table to InnoDB\n";
$db->query("ALTER TABLE predb ENGINE=InnoDB;");
echo "Finished converting the predb table to InnoDB.\n\n";

echo "Converting the releaseaudio table to InnoDB\n";
$db->query("ALTER TABLE releaseaudio ENGINE=InnoDB;");
echo "Finished converting the releaseaudio table to InnoDB.\n\n";

echo "Converting the releasecomment table to InnoDB\n";
$db->query("ALTER TABLE releasecomment ENGINE=InnoDB;");
echo "Finished converting the releasecomment table to InnoDB.\n\n";

echo "Converting the releaseextrafull table to InnoDB\n";
$db->query("ALTER TABLE releaseextrafull ENGINE=InnoDB;");
echo "Finished converting the releaseextrafull table to InnoDB.\n\n";

echo "Converting the releasefiles table to InnoDB\n";
$db->query("ALTER TABLE releasefiles ENGINE=InnoDB;");
echo "Finished converting the releasefiles table to InnoDB.\n\n";

echo "Converting the releasenfo table to InnoDB\n";
$db->query("ALTER TABLE releasenfo ENGINE=InnoDB;");
echo "Finished converting the releasenfo table to InnoDB.\n\n";

echo "Converting the releaseregex table to InnoDB\n";
$db->query("ALTER TABLE releaseregex ENGINE=InnoDB;");
echo "Finished converting the releaseregex table to InnoDB.\n\n";

echo "Converting the releases table to InnoDB\n";
$db->query("ALTER TABLE releases ENGINE=InnoDB;");
echo "Finished converting the releases table to InnoDB.\n\n";

echo "Converting the releasesubs table to InnoDB\n";
$db->query("ALTER TABLE releasesubs ENGINE=InnoDB;");
echo "Finished converting the releasesubs table to InnoDB.\n\n";

echo "Converting the releasevideo table to InnoDB\n";
$db->query("ALTER TABLE releasevideo ENGINE=InnoDB;");
echo "Finished converting the releasevideo table to InnoDB.\n\n";

echo "Converting the site table to InnoDB\n";
$db->query("ALTER TABLE site ENGINE=InnoDB;");
echo "Finished converting the site table to InnoDB.\n\n";

echo "Converting the sphinx table to InnoDB\n";
$db->query("ALTER TABLE sphinx ENGINE=InnoDB;");
echo "Finished converting the sphinx table to InnoDB.\n\n";

echo "Converting the thetvdb table to InnoDB\n";
$db->query("ALTER TABLE thetvdb ENGINE=InnoDB;");
echo "Finished converting the thetvdb table to InnoDB.\n\n";

echo "Converting the tvrage table to InnoDB\n";
$db->query("ALTER TABLE tvrage ENGINE=InnoDB;");
echo "Finished converting the tvrage table to InnoDB.\n\n";

echo "Converting the upcoming table to InnoDB\n";
$db->query("ALTER TABLE upcoming ENGINE=InnoDB;");
echo "Finished converting the upcoming table to InnoDB.\n\n";

echo "Converting the usercart table to InnoDB\n";
$db->query("ALTER TABLE usercart ENGINE=InnoDB;");
echo "Finished converting the usercart table to InnoDB.\n\n";

echo "Converting the userdownloads table to InnoDB\n";
$db->query("ALTER TABLE userdownloads ENGINE=InnoDB;");
echo "Finished converting the userdownloads table to InnoDB.\n\n";

echo "Converting the userexcat table to InnoDB\n";
$db->query("ALTER TABLE userexcat ENGINE=InnoDB;");
echo "Finished converting the userexcat table to InnoDB.\n\n";

echo "Converting the userinvite table to InnoDB\n";
$db->query("ALTER TABLE userinvite ENGINE=InnoDB;");
echo "Finished converting the userinvite table to InnoDB.\n\n";

echo "Converting the usermovies table to InnoDB\n";
$db->query("ALTER TABLE usermovies ENGINE=InnoDB;");
echo "Finished converting the usermovies table to InnoDB.\n\n";

echo "Converting the userrequests table to InnoDB\n";
$db->query("ALTER TABLE userrequests ENGINE=InnoDB;");
echo "Finished converting the userrequests table to InnoDB.\n\n";

echo "Converting the userroles table to InnoDB\n";
$db->query("ALTER TABLE userroles ENGINE=InnoDB;");
echo "Finished converting the userroles table to InnoDB.\n\n";

echo "Converting the users table to InnoDB\n";
$db->query("ALTER TABLE users ENGINE=InnoDB;");
echo "Finished converting the users table to InnoDB.\n\n";

echo "Converting the userseries table to InnoDB\n";
$db->query("ALTER TABLE userseries ENGINE=InnoDB;");
echo "Finished converting the userseries table to InnoDB.\n\n";

?>
