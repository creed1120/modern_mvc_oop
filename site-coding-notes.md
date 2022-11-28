## Site Coding Notes
#### MVC Folder Structure
1. App
    - app.php
2. config
    - init.php

### Router
1. Add .htaccess file to redirect all traffic through the Index.php page
```
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.+)$ index.php?url=$1 [L,QSA]
```
2. Add robots.txt file to disallow web crawlers from indexing the site (Google, Bing, etc..)
```
User-agent: *

Disallow: /admin/
Disallow: /ajax/
```