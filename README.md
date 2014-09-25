# GUI-91.461.201

_This Prjoect is my GUI programming software project. It holds a information about me, a repository of assignments, a source viewer, and a w3c validator. This Document is here to relay as much information about the inner workings of the application, certain elements have been documented that do not exist, but when they are need will conform to the outline given here. If modifications to the application structure and purpose are made this document will reflect those changes._

## Project Setup
### Directory Structure
#### Server Side
This section of the application is private and can not be caccessed by the client
``` text
    /                           Directory root
    + doc/                      Documentation files directory
    |   + readme.txt            This readme file
    |   + ...                   Other Documentation files
    |
    + ini/                      Configurations Directory
    |   + application.php       Application information configuration
    |   + paths.php             Relative paths structure of the document configurations
    |   + ...                   Other configuration files
    |
    + php/                      PHP source file directory
    |   + lib/                  PHP libraries directory
    |   |   + library.php       User generated PHP library
    |   |   + ...               PHP libraries
    |   |
    |   + class/                PHP classes directory
    |   |   + framework.php     The web framework I have developed to allow for
    |   |                       application OS and directory self detection,
    |   |                       as well as orchestrating the generation of files
    |   |   + ...               PHP classes
    |   |
    |   + ...                   php source files such as templates and
    |                           other multi-purpose scripts
    |
    + psd/                      PSD File directory
    |   + ...                   Adobe psd files used to create page images
    |
```
#### Client Side
This section of the application is public and is accessed by the client.

``` text
    |
    + www/                      The web root Directory
        + _api/                 This is the api directory it holds a restful
        |   |                   that returns json responses
        |   + init/             The system initialization call
        |   + .../              Api landing points, the
        |
        + _com/                 The common component directory
        |   + css/              The CSS directory
        |   |   + main.css      The main document css styling file, this file
        |   |   |               defines common document attributes
        |   |   + ...           Other css files
        |   |
        |   + img/              The image directory
        |   |   + ...           Images used by the application
        |   |
        |   + js/               Javascript or jQuery directory
        |       + lib/          Javascript or jQuery libraries directory
        |       |   + ...       Javascript or jQuery libraries
        |       |
        |       + classes/      Javascript or jQuery classes directory
        |       |   + ...       Javascript or jQuery class files
        |       |
        |       + constants.js  Javascript or jQuery globals
        |       + onload.js     Javascript or jQuery onload functions
        |       + library.js    Javascript or jQuery user generated library
        |
        + about/                The about page directory
        |   + content.php       The content of the about page, holds
        |   |                   a blurb about the author
        |   + index.php         The landing page for the about page
        |
        + assignment/           The Assignment page directory
        |   + content.php       The content of the assignment page, holds
        |   |                   a directory listing of the assignments and
        |   |                   displays them
        |   + index.php         The landing page for the assignment page
        |   + #/                The assignment directories they may have
        |   ...                 other subdirectories but are beyond the
        |                       scope of this document
        |
        + php-source            The php source directory
        |   + content.php       The content of the php-source page holds
        |   |                   a directory listing of the php source files and
        |   |                   displays them
        |   + index.php         The landing page for the php-source page
        |
        + validation            The validation directory
        |   + content.php       The content of the validation page holds
        |   |                   a listing of all links and whether they
        |   |                   validate or not.
        |   + index.php         The landing page for the php-source page
        |
        + WEB-INF               Instructor supplied directory Assignment 1
        |   + classes           Instructor supplied directory Assignment 1
        |   + lib               Instructor supplied directory Assignment 1
        |
        + content.php           The content of the home page
        + index.php             The home page created for the application
```

## Requirements
### Environment

* PHP_5.3+ 
* OS ( Tested on Linux and Windows )
* A web server (Tested on Tomcat and IIS) 

### Dependencies
+ [simple_html_dom]( http://simplehtmldom.sourceforge.net/ ) : This is used for Dom parsing of href and src properties, it is included by default.
+ Update of the configuration files : Only project specific configurations such as your name, email, titles, etc. Paths self detect.

##Installation
1. Install [Git](http://git-scm.com/downloads) on your server.
2. Clone the project [repository](https://github.com/josefflores/GUI-91.461.201.git).
3. Add the repository's web root to your server either as a virtual directory or a domain.
``` html
repository_name/www/
```

4. At this point you might need to change necessary permission for execution, changing permission is OS specific so look up how to do it on your system.
5. Run the init api call where 
``` html
web_root
```
is your web application root.
``` html
http://web_root/_api/init 
```

6. To view your copy of the upto date application, go to 
``` html
http://web_root/
```

## Deployment
I have automated my deployment to use a [Jenkins CI]() server to automatically 
- detect a github webhook: This allows the server to figure out when a commit was made and start deployment
- Pull the repository to my production environment
- kick off a permission modifying script 
- and run the init api call which performs the testing in the following section
I will add The specific steps to how I set up my continous integration server at a a following date.

## Testing
Testing is kicked off by the init api call. It should be run as part of the install, but is good practice to also run before commiting changes from your develoment environment to guarantee that output is valid before storing. Note: The testing methods are planned to move into 
``` html
_api/test/?test_parameters
```
so they can be run independently of each other.
### Unit Tests
_No unit tests at the moment_

### Integration Tests
By running the init _api call the following components are validated
1. The framework
2. includes
3. W3C validation of all html and css within project

### End to End Tests
_No end to end tests tests at the moment_

## License
GUI-91.461.201
Copyright (C) 2014  Jose Flores

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

=========
