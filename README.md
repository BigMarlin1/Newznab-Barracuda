Newznab-Barracuda
=================

---------------------------------------------------Intro------------------------------------------------------------

First you will change mysql to use the barracuda file format. Then you will convert your tables to innodb, using either the compressed, compact or dynamic row format, I recommend compressed.

There are 4 folders, Binaries + Parts (recommended), Binaries + Parts + Releases and all the tables (not recommended)

The 4th folder is for the Binaries + Groups + Parts + Releases + Releasefiles + Releasenfo (requested by zombu2)


-----------------------------------------------Installation----------------------------------------------------------

First, do a full backup of the mysql database. mysqldump -l --user=root -p newznab > newznab.sql

Edit with a text editor my.cnf and add : innodb_file_format = Barracuda then restart MYSQL. While you are there you can add this for extra performance: innodb_flush_log_at_trx_commit = 0

With a text editor, open the script you picked (innodb_compressed.php for example), change the paths at the beggining to match the location of your newznab installation.

I recommend truncating the parts and binaries tables. Login to mysql: mysql -p newznab   type in the following command : truncate binaries;truncate parts

From a command line interface (terminal for example in linux), browse to the location of the script you picked and type php innodb_compressed.php (change compressed for the script you picked) be patient.

------------------------------------------------Disabling Barracuda---------------------------------------------------

In the my.cnf file, change innodb_file_format = Antelope

------------------------------------------------newznab-tmux---------------------------------------------------------

Please see the newznab-tmux git : https://github.com/jonnyboy/newznab-tmux
