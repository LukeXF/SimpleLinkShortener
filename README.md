![#Simple Link Shortener](http://puu.sh/9Ym1a/3ebd4c8fca.png)
###### I got asked if I could make a super simple link shortner. But saw potential to make it much more useful; Feel free to fork, knife or spoon my code.  Using [MIT ](http://opensource.org/licenses/MIT) Licensing. If you have any suggestions or issues with the any of the projects then feel free to raise an issue or a request a pull of the fixed version.


![###V1 - Super Simple - file storage](http://puu.sh/9Yniy/b71d20e1ee.png)
The most simple shortner is extremely easy to use. All that is needed to get this working is a quick download and dump it on the deployment zone of your choice. As this is a very short script the only downside is that to add links you must place them inside links.ini using a FTP program or editor, but you could example upon it to allow trusted users to edit the page or add new lines to it.

**Requirmenets**

1. PHP 2.5.7 or higher
2. Ability to use .htaccess files
3. File acces to be able to edit links.ini
4. Ability to upload files


| Release | Description                 | Usages                 | Download Link   | 
| -------:| --------------------------- |-----------------       |-----------------|
| V1.0    | Barebones download          | links.ini only (admin) |                 |
| V1.1    | Simple Styling              | links.ini only (admin) |                 |
| V1.2    | Bootstrap Supported         | links.ini only (admin) |                 |

![### V.2 - Simple - database storage](http://puu.sh/9YoVJ/4395ce7be1.png)
The version is personally what I expect most people to use. It allows end users to submit their own links for submission and to a point where it allows people to select their own customised link. Once they created it is stored into a database and as long as the database stays up all will be well. V2.3 Allows cname support (subdomains) using a wildcard DNS.

**Requirmenets**

1. PHP 2.5.7 or higher
2. Ability to use .htaccess files
3. Ability to upload files
4. Access and use to a MySQL database
4. (optional) Wildcard DNS.


| Release | Description                                       | Usages                 | Download Link   | 
| -------:| ------------------------------------------------- |-----------------       |-----------------|
| V2.0    | No front end access                               | Database only          |                 |
| V2.1    | Allows users to submit their own links            | DB + Web link creation |                 |
| V2.2    | Users can submit own links with custom endings    | DB + Custom links      |                 |
| V2.2    | Users can submit own links wit custom subdomains  | DB + Custom DNS        |                 |
