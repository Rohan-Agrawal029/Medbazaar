#!C:\Users\Rohan\Anaconda3\python.exe
print("Content-Type: text/html\n")

# import cgi
# form=cgi.FieldStorage()
# searchterm=form.getvalue('search_str')

import sys
argumentList=sys.argv
searchterm=argumentList[1]

from bs4 import BeautifulSoup
import requests
import json

def pharmeasy_scraper():
    url="https://pharmeasy.in/search/all?name=" + searchterm
    response=requests.get(url, timeout=5)
    content=BeautifulSoup(response.content, "html.parser")
    
    medArr=[]
    
    for med in content.findAll('div', attrs={"class": "_1jald"}):
        medobj={
                "source": "pharmeasy",
                "search_term": searchterm,
                "med_name": med.find('h1', attrs={"class": "ooufh"}).text,
                "comp_name": str(med.find('div', attrs={"class": "_3JVGI"})),
                "quantity": str(med.find('div', attrs={"class": "_36aef"})),
                "price": str(med.find('div', attrs={"class": "_1_yM9"})),
                "link" : str(med.find('a')['href'])
                }
        
        s=medobj["search_term"]
        i=s.find("'")
        s=s[i+1:]
        i=s.find("'")
        if(i!=-1):
            s=s[:i]
        medobj["search_term"]=s

        p=medobj["price"]
        p=p[29:]
        i=p.find("<")
        p=p[:i]
        medobj["price"]=p
        
        c=medobj["comp_name"]
        c1=c[20:23]
        c=c[31:]
        i=c.find("<")
        c=c1 + c[:i]
        medobj["comp_name"]=c
        
        q=medobj["quantity"]
        q=q[20:]
        i=q.find("<")
        q=q[:i]
        medobj["quantity"]=q
        
        medArr.append(medobj)
    
    with open("pharmeasy.json", "w") as ofile:
        json.dump(medArr, ofile)
    
    print("pharmeasy Script completed")
        
pharmeasy_scraper()

import subprocess
subprocess.call(["C:\\xampp\\php\\php.exe", "C:\\xampp\\htdocs\\Medbazaar\\json_store.php"])
