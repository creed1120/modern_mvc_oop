## Site Coding Notes
#### MVC Folder Structure
1. App
    - app.php
2. config
    - init.php

### Router
1. Need a .htaccess file to redirect all traffic through the Index.php page
```
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.+)$ index.php?url=$1 [L,QSA]
```