PHP Assessments
==================================================

This is my  solutions to php assessment questions:

Files:
 * src/fileOwners.php
 * src/palindrome.php
 * src/path.php
 * src/thesaurus.php

## Installation

You need to have composer globally installed.

You need to have Apache 2.4 HTTP server, PHP v.5.6 or later plus `gd` and `mbstring` PHP extensions.

Download the sample to some directory (it can be your home dir or `/var/www/html`) and run Composer as follows:

```
composer install
```

Run this command to update dependencies.

```
composer update
```

Then create an Apache virtual host. It should look like below:

```
<VirtualHost *:80>
    DocumentRoot /path/to/file/
    
	<Directory /path/to/file>
        AllowOverride All
        Require all granted
    </Directory>

</VirtualHost>
```

Now you can navigate through the files by visiting the link "http://localhost/". 
 