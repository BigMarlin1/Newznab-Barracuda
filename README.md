Newznab-Barracuda
=================

These scripts convert your parts, binaries and releases tables to innodb with a choice of dynamic, compressed, or compact row format, dynamic is recommended.

First, edit my.cnf and add : innodb_file_format = Barracuda then restart MYSQL.
You can also add (gives a boost in speed) innodb_flush_log_at_trx_commit = 0

To disable barracuda, change innodb_file_format = Antelope in my.cnf

Change the paths at the start of the php file you picked (innodb_dynamic for example).

Usage: from a command line interface, browse to the location and type php innodb_dynamic.php

Use innodb_undo.php to convert dynamic or compressed tables back to compact(the default InnoDB Row format).

For newznab innodb scripts, see: https://github.com/jonnyboy/newznab-tmux
