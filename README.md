Newznab-Barracuda
=================

Converts parts binaries and releases tables to barracuda.

Make sure that innodb_file_format = Barracuda is set in my.cnf then restart MYSQL.
Change the paths at the start of the php file.

Run php barracuda.php from cli.
Run barracuda_undo.php to convert those tables back to innodb.

See: https://github.com/jonnyboy/newznab-tmux
