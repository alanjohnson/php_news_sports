<?php
    $NewsSource="http://rss.news.yahoo.com/rss/sports";
    header("Content-Type: text/xml");
    header("Content-Length: " . strlen(file_get_contents($NewsSource)));
    header("Cache-Control: no-cache");
    readfile($NewsSource);
?>