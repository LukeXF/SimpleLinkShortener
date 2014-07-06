![#Simple Link Shortener](http://puu.sh/9Ym1a/3ebd4c8fca.png)
###### I got asked if I could make a super simple link shortner. But saw potential to make it much more useful; Feel free to fork, knife or spoon my code.  Using [MIT](http://opensource.org/licenses/MIT) Licensing. If you have any suggestions or issues with the any of the projects then feel free to raise an issue or a request a pull of the fixed version.


![###V1 - Super Simple - file storage](http://puu.sh/9Yniy/b71d20e1ee.png)
The most simple shortner is extremely easy to use. All that is needed to get this working is a quick download and dump it on the deployment zone of your choice. As this is a very short script the only downside is that to add links you must place them inside links.ini using a FTP program or editor, but you could improve upon it to allow trusted users to edit the page or add new lines to it.

**Requirmenets**

1. PHP 2.5.7 or higher
2. Ability to use .htaccess files
3. File acces to be able to edit links.ini
4. Ability to upload files


| Release | Description                 | Download Link   |
| -------:| --------------------------- |:-----------------:|
| V1.0    | Extreme Barebones download  |[b62ee29](https://github.com/LukeXF/SimpleLinkShortener/releases/tag/V1.0)    |
| **V1.1**| **Reccomended Styling**     |[e572348](https://github.com/LukeXF/SimpleLinkShortener/releases/tag/V1.1)    |

![### V.2 - Simple - database storage](http://puu.sh/9YoVJ/4395ce7be1.png)
The version is personally what I expect most people to use. It allows end users to submit their own links for submission and to a point where it allows people to select their own customised link. Once they created it is stored into a database and as long as the database stays up all will be well. V2.3 Allows cname support (subdomains) using a wildcard DNS.


**Requirmenets**

1. PHP 2.5.7 or higher
2. Ability to use .htaccess files
3. Ability to upload files
4. Access and use to a MySQL database
4. (optional) Wildcard DNS.


| Release | Description                                       | Usages                 | Download Link   |
| -------:| ------------------------------------------------- |----------------------  |-----------------|
| V2.0    | No front end access                               | DB only                |[Coming Soon](https://github.com/LukeXF/SimpleLinkShortener/releases/tag/V2.0)                                   |
| V2.1    | Allows users to submit their own links            | DB + Web link creation |[Coming Soon](https://github.com/LukeXF/SimpleLinkShortener/releases/tag/V2.1)                                   |
| V2.2    | Users can submit own links with custom endings    | DB + Custom links      |[Coming Soon](https://github.com/LukeXF/SimpleLinkShortener/releases/tag/V2.2)                                   |
| V2.3    | Users can submit own links with custom subdomains | DB + Custom DNS        |[Coming Soon](https://github.com/LukeXF/SimpleLinkShortener/releases/tag/V2.3)                                   |


[Things to do and outstanding issues](http://puu.sh/9YPtw/67cedfb459.png)

**To Do**

1. None

**Remaining Issues:**

1. Create Database Versions
2. Possible MVC Release

