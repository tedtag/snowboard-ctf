<!-- This is to reset the db, not to break, please do not try to hack this -->
<?php
// resets db and removes uploaded files
// change db name and folder path for new instance
// set path of backup.sql
exec("/usr/bin/mysql -u root -proot snowboard-ctf < /home/ubuntu/backup.sql");
exec("rm -f /var/www/html/labs_1/super_secret_uploads_folder/*");
?>
