<?php

$request = file_get_contents("https://influencer.redeemly.com/influencer/5f7b125e8539127b2e2c617c");
preg_match_all('/{"props":{"pageProps":{"code":"(.*?)"}/', $request, $code);
echo " _____                         _     
/ ____|                            ( )    
| |     ___  _   _ _ __   ___  _ __ |/ ___ 
| |    / _ \| | | | '_ \ / _ \| '_ \  / __|
| |____ (_) | |_| | |_) | (_) | | | | \__ \
 \_____\___/ \__,_| .__/ \___/|_| |_| |___/
                                  | |                      
                                  |_|                      
                                            
[+] - This Tool For Free . Made By HMD @e31L
[+] - Your Code : " . $code[1][0] . "\n";

# telegram : https://t.me/RRLRR #
?>
