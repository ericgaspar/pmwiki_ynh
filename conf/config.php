<?php if (!defined('PmWiki')) exit();
$WikiTitle = "My New Wiki";
#$PageLogoUrl = "http://example.com/mylogo.gif";

# Uncomment and correct these if PmWiki fails to detect the browser-reachable URLs
#$ScriptUrl = 'http://example.com/pmwiki/pmwiki.php';
#$PubDirUrl = 'http://example.com/pmwiki/pub';

$DefaultPasswords['admin'] = pmcrypt('__PASSWORD__');

$EnableUpload = 1;
$DefaultPasswords['upload'] = pmcrypt('secrettwo');

# Uncomment and change these if your server is not in your timezone
# date_default_timezone_set('America/New_York'); # if you run PHP 5.1 or newer
# putenv("TZ=EST5EDT"); # if you run PHP 5.0 or older

$TimeFmt = '%B %d, %Y, at %I:%M %p %Z';