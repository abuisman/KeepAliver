<?php

// Set the bookmarklet variable.
$bookmarklet = <<<JS
var s=document.createElement('script');
    s.setAttribute('src','http://jquery.com/src/jquery-latest.js');
    document.getElementsByTagName('body')[0].appendChild(s);
    var s2=document.createElement('script');
    s2.setAttribute('type','text/javascript');
    s2.text = "var ti=function(){jQuery.ajax({url:''});setTimeout('ti()', 36000);};ti();";
    document.getElementsByTagName('body')[0].appendChild(s2);
JS;

$bookmarklet = "javascript:".str_replace("\n", '', $bookmarklet);
print str_replace(' ', '%20', $bookmarklet);