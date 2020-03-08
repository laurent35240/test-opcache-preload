# Test opcache preload

Test of opcache preload for one issue with anonymous class.

Run this command to see abnormal fatal error:
```shell script
php -d opcache.enable_cli=1 -d opcache.preload=`pwd`/opcache.preload.php index.php
```
