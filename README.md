# mediawiki-extensions-Manolito
An example MediaWiki extension in connection with the "Manolito Future Day 2022"


## Run tests

Make sure to run

```bash
# On your machine running Docker
manolito@manolito:~$ sudo docker exec -it manolitowiki_web_1 /bin/bash
# Inside the Docker container at /var/www/mediawiki/w/
composer install
```

before running tests.

```bash
# Inside the Docker container at /var/www/mediawiki/w/
php tests/phpunit/phpunit.php extensions/Manolito/tests/phpunit/unit/ManolitoTest.php
```