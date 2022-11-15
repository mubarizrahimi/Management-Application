<?php
### Note: fore ssh connection you have to install 2 packeges ( libssh2-1 php-ssh2 ) and restart apache




echo "Proxmox Memory -----------------------------------------------------------------------------------------";

$connection = ssh2_connect('pve.rahimi.lan', 22);
ssh2_auth_password($connection, 'root', '8012#WSaas');
$stream = ssh2_exec($connection, 'df -h --type ext4 --type zfs');
#$stream = ssh2_exec($connection, 'df -h');
stream_set_blocking($stream, true);
$output = stream_get_contents($stream);
echo "<h3><pre>$output</pre></h3>";

echo "Server Memory -----------------------------------------------------------------------------------------";
$memory_server = shell_exec("df -h --type zfs");
#$memory_bacula_server = shell_exec("sudo ssh mubariz@bacula-server.rahimi.lan df -h --type zfs --type ext4");
echo "<h3><pre>$memory_server</pre></h3>";
#echo "<h1><pre>$memory_bacula_server</pre></h1>";

echo "Bacula server Memory ----------------------------------------------------------------------------------";
#$memory2 = shell_exec("curl http://bacula-server.rahimi.lan");
#echo $memory2;
$connection = ssh2_connect('bacula-server.rahimi.lan', 22);
ssh2_auth_password($connection, 'mubariz', '8012#WSaas');
$stream = ssh2_exec($connection, 'df -h --type ext4 --type zfs');
stream_set_blocking($stream, true);
$output = stream_get_contents($stream);
echo "<h3><pre>$output</pre></h3>";


echo "Mail server Memory ----------------------------------------------------------------------------------";
#$memory2 = shell_exec("curl http://bacula-server.rahimi.lan");
#echo $memory2;
$connection = ssh2_connect('mail-server.rahimi.lan', 22);
ssh2_auth_password($connection, 'mubariz', '8012#WSaas');
$stream = ssh2_exec($connection, 'df -h --type ext4');
stream_set_blocking($stream, true);
$output = stream_get_contents($stream);
echo "<h3><pre>$output</pre></h3>";

echo "IONOS server Memory ----------------------------------------------------------------------------------";
#$memory2 = shell_exec("curl http://bacula-server.rahimi.lan");
#echo $memory2;
$connection = ssh2_connect('212.227.71.55', 22);
ssh2_auth_password($connection, 'root', '8012#WSaas');
$stream = ssh2_exec($connection, 'df -h --type ext4');
stream_set_blocking($stream, true);
$output = stream_get_contents($stream);
echo "<h3><pre>$output</pre></h3>";

#echo $stream;
?>
