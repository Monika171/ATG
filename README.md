# THE STUPiD PHONE

## Installation (OS: Windows)

1. Go to-  "C:\xampp\apache\conf\extra\httpd-vhosts.conf" and add:
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/project-name/public"
    ServerName project-name.localhost
</VirtualHost>

2. Go to-  "C:\Windows\System32\drivers\etc\hosts"
(OPEN AS ADMIN and add:)
127.0.0.1 localhost
127.0.0.1 project-name.localhost

(more details soon..)






