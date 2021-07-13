<?php

$request = file_get_contents("https://influencer.redeemly.com/influencer/5f7b125e8539127b2e2c617c");
preg_match_all('/{"props":{"pageProps":{"code":"(.*?)"}/', $request, $code);
echo " _____  _         _____                              _     
|   \| |       / ____|                            ( )    
| |) | |      | |     ___  _   _ _    ___  _  |/ ___ 
|  _  /| |      | |    / _ \| | | | '_ \ / _ \| '_ \  / |
| | \ \| |____  | |____ (_) | |_| | |_) | (_) | | | | \ \
|_|  \_\______|  \_____\___/ \__,_| .__/ \___/|_| |_| |___/
                                  | |                      
                                  |_|                      
                                    
[+] - This Tool For Free . Made By HMD @e31L \n";
echo "[+] - Coder : @RRLRR , Channel : @CoderStock \n";
echo "[+] - Your Code : " . print_r($code[1]) . "\n";

# telegram : https://t.me/RRLRR #
?>
