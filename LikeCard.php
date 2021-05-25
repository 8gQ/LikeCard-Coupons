<?php

$content = file_get_contents("https://influencer.redeemly.com/influencer/5f7b125e8539127b2e2c617c");
$code = '/code\":\"([^"]+)/';
preg_match($code,$content,$matches);
echo " _____  _         _____                              _     
|  __ \| |       / ____|                            ( )    
| |__) | |      | |     ___  _   _ _ __   ___  _ __ |/ ___ 
|  _  /| |      | |    / _ \| | | | '_ \ / _ \| '_ \  / __|
| | \ \| |____  | |____ (_) | |_| | |_) | (_) | | | | \__ \
|_|  \_\______|  \_____\___/ \__,_| .__/ \___/|_| |_| |___/
                                  | |                      
                                  |_|                      
                                    
[+] - Congratulations, you got a free coupon for LikeCard \n";
echo "[+] - Coder : @RRLRR , Channel : @CoderStock \n";
echo "[+] - Your Code : " . $matches[1] . "\n";

# telegram : https://t.me/RRLRR #
?>