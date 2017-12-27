# EasyAds Classified Ads Optimization Tips
Optimization tips, notes and updates for EasyAds Classified Ads script

# Force https redirect in .htaccess file

After you have set up the SEO option and generated the .htaccess file from EasyAds, to force a https redirect, use the following code.

Place this at the top, above all other code:

```
# https://stackoverflow.com/questions/13977851/htaccess-redirect-to-https-www
# First rewrite any request to the wrong domain to use the correct one (here www.)
RewriteCond %{HTTP_HOST} !^www\.
RewriteRule ^(.*)$ https://www.%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
#Now, rewrite to HTTPS:
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

# Making changes to the home page

Modify file: engine > views > site > index.php


#Support

Visit the vendor website for support


References

https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet

