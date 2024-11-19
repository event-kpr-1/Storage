<?php

$gameLinks = [
    1 => 'https://www.alltypehacks.net/2020/05/assassins-creed-160-gb-repack-full-pc.html',
    2 => 'https://www.alltypehacks.net/2014/01/gta-vice-city-full-pc-game-highly.html',
    3 => 'https://www.alltypehacks.net/2020/05/need-for-speed-most-wanted-18-gb-repack.html',
    4 => 'https://dodi-repacks.site/606-prince-of-persia-the-sands-of-time-goodies-dodi-repack/',
    5 => 'https://t.me/PCGames_exe/2928?single',
    6 => 'https://www.alltypehacks.net/2015/02/mafia-1-city-of-lost-heaven-highly.html',
    7 => 'https://freegogpcgames.com/2623/25-lego-pirates-of-the-caribbean-the-video-game/',
    8 => 'https://www.alltypehacks.net/2020/05/gta-san-andreas-880-mb-repack-v20-full.html',
];

$gameId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$returnUrl = isset($_GET['return_url']) ? urlencode($_GET['return_url']) : '';

if (array_key_exists($gameId, $gameLinks)) {
   
    $redirectUrl = $gameLinks[$gameId] . '?return_url=' . $returnUrl;

    
    header('Location: ' . $redirectUrl);
    exit();
} else {
    
    header('Location: /error.html');
    exit();
}
?>
