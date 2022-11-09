# mediawiki-extensions-Manolito
An example MediaWiki extension in connection with the "Manolito Future Day 2022".

## Work Packages

### UNDERSTAND: "Ubuntu 22.04" [VirtualBox](https://www.virtualbox.org/) Virtual Machine

* **VBox**: start, stop, port forwarding
* **VM**: [Bash](https://www.gnu.org/software/bash/) | (ssh)

### UNDERSTAND: manolitoWiki [Docker](https://www.docker.com/) stack

* Components: web server, database
* **docker-compose**: up, down
* **docker**: ps, logs, exec

### UNDERSTAND: [manolitoWiki](https://www.mediawiki.org/wiki/MediaWiki)

* LocalSettings.php (purpose)
  * `wfLoadExtension("Manolito");`

### UNDERSTAND: [mediawiki-extensions-Manolito](https://github.com/dataspects/mediawiki-extensions-Manolito)

* [Microsoft Visual Code](https://code.visualstudio.com/)
* tree, [git](https://git-scm.com/) status|pull|push

    #### **CODE: [PHP](https://www.php.net/)** (backend, server-side, e.g. Apache)

        /home/manolito/manolitoWiki/extensions/Manolito/src/Hooks.php
            Functionality: parser function call
        /home/manolito/manolitoWiki/extensions/Manolito/includes/specials/SpecialManolito.php
            Functionality: add special function to MediaWiki
        /home/manolito/manolitoWiki/extensions/Manolito/src/TextAccounting.php
            Functionality: implement parser function
        /home/manolito/manolitoWiki/extensions/Manolito/tests/phpunit/unit/ManolitoTest.php

    * Install dependencies

        ```bash
        # On your machine running Docker
        manolito@manolito:~$ sudo docker exec -it manolitowiki_web_1 /bin/bash
        # Inside the Docker container at /var/www/mediawiki/w/
        composer install
        ```
        

    *   Run tests
        
        ```bash
        # Inside the Docker container at /var/www/mediawiki/w/
        php tests/phpunit/phpunit.php extensions/Manolito/tests/phpunit/unit/ManolitoTest.php
        ```

    #### **CODE: [Javascript](https://www.javascript.com/) and [CSS](https://www.w3schools.com/Css/)** (frontend, client-side, e.g. Firefox browser)

        /home/manolito/manolitoWiki/extensions/Manolito/resources/ext.manolito/manolito.js
            Functionality: write text into HTML element
        /home/manolito/manolitoWiki/extensions/Manolito/resources/ext.manolito/manolito.css
            Functionality: style/design user interface elements
    https://www.cypress.io

        /home/lex/mediawiki-extensions-Manolito/cypress/e2e/spec.cy.js
