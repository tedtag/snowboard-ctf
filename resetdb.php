<!-- This is to reset the db, not to break, please do not try to hack this -->
<?php
    exec("/usr/bin/mysql -u root -proot snowobard-ctf < /home/ubuntu/backup.sql");
?>