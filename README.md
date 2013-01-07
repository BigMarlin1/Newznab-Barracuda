Newznab-Barracuda
=================

---------------------------------------------------Intro------------------------------------------------------------

First you will change mysql to use the barracuda file format. Then you will convert your tables to innodb, using either the compressed, compact or dynamic row format (I recommend compressed).

There are 5 folders, Binaries + Parts (recommended), Binaries + Parts + Releases, the full folder (all the tables) (not recommended),

the Binaries + Groups + Parts + Releases + Releasefiles + Releasenfo (requested by zombu2) and the Binaries + parts + partrepair folder.


-----------------------------------------------Installation----------------------------------------------------------

I recommend using mariadb or percona.

First, do a full backup of the mysql database. mysqldump -l --user=root -p newznab > newznab.sql

Edit with a text editor my.cnf and add : innodb_file_format = Barracuda then restart MYSQL. While you are there you can add this for extra performance: innodb_flush_log_at_trx_commit = 0

To get the script, browse to it in the browser, click raw, copy the link in your browser's address bar, go in a CLI (terminal for example) type wget www.example.com  ;; change www.example.com for the link you copied.

With a text editor, open the script you picked (innodb_compressed.php for example), change the paths at the beggining to match the location of your newznab installation.

I recommend truncating the parts and binaries tables. Login to mysql: mysql -p newznab   type in the following command : truncate binaries;truncate parts

From a command line interface (terminal for example in linux), browse to the location of the script you picked and type php innodb_compressed.php (change innodb_compressed.php for the script you picked) be patient.

------------------------------------------------Disabling Barracuda---------------------------------------------------

If you want to disable barracuda do the following steps:

In the my.cnf file, change innodb_file_format = Antelope

Restart the mysql server, and mysql will convert back to antelope.

------------------------------------------------newznab-tmux---------------------------------------------------------

Please see the newznab-tmux git : https://github.com/jonnyboy/newznab-tmux
