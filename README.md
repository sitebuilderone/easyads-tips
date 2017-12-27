# easyads-tips
Optimization tips, notes and updates for EasyAds Classified Ads script

# Force https redirect in .htaccess file

After you have set up the SEO option and generated the .htaccess file from EasyAds, to force a https redirect, use the following

```
# https://stackoverflow.com/questions/13977851/htaccess-redirect-to-https-www
# First rewrite any request to the wrong domain to use the correct one (here www.)
RewriteCond %{HTTP_HOST} !^www\.
RewriteRule ^(.*)$ https://www.%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
#Now, rewrite to HTTPS:
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```



References

https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet

