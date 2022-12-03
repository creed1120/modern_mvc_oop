## Site Coding Notes
#### MVC Folder Structure
1. App
    - /controllers
      _404.php
      Home.php
      Products.php
    - /core
      App.php
      config.php
      Controller.php
      Database.php
      functions.php
      init.php
      Model.php
    - /models
    - /views
      404.view.php
2. public
    - .htaccess
    - index.php
    - robots.txt

### Router
1. Add .htaccess file to redirect all traffic through the Index.php page
```
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.+)$ index.php?url=$1 [L,QSA]
```
> RewriteRule ^(.+)$ index.php?url<-(is the $_GET variable)=$1<-(paramater value) [L,QSA]


2. Add robots.txt file to disallow web crawlers from indexing the site (Google, Bing, etc..)
```
User-agent: *

Disallow: /admin/
Disallow: /ajax/
```