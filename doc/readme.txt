
    File: readme.txt
    Jose F. Flores, Umass Lowell Computer Science Student
        jose_flores@student.uml.edu
    Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
        freely copied or excerpted for educational purposes with credit
        to the author.

    Updated by JFF on September 8, 2014 at 14:00
        Created directory structure readme

    ABOUT

    This Document is here to relay as much information about the inner
    workings of the application, certain elements have been documented
    that do not exist, but when they are need will conform to the outline
    given here. If modifications to the application structure and purpose
    are made this document will reflect those changes.

    DIRECTORY STRUCTURE

    THIS SECTION OF THE APPLICATION IS PRIVATE AND CANNOT BE ACCESSED
    BY THE CLIENT

    /                           Directory root
    + doc/                      Documentation files directory
    |   + readme.txt            This readme file
    |   + ...                   Other Documentation files
    |
    + ini/                      Configurations Directory
    |   + application.php       Application information configuration
    |   + paths.php             Relative paths stucture of the document configurations
    |   + ...                   Other configuration files
    |
    + php/                      PHP source file directory
    |   + lib/                  PHP libraries directory
    |   |   + ...               PHP libraries
    |   |
    |   + classes/              PHP classes directory
    |   |   + ...               PHP classes
    |   |
    |   + library.php           User generated PHP library
    |   + ...                   php source files such as templates and
    |                           other multi-purpose scripts
    |
    + psd/                      PSD File directory
    |   + ...                   Adobe psd files used to create page images
    |

    THIS SECTION OF THE APPLICATION IS PUBLIC AND IS ACCESSED BY THE CLIENT

    |
    + www/                      The web root Directory
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
        |   + localLib.php      The root finding functions
        |
        + assignment/           The Assignment page directory
        |   + content.php       The content of the assignment page, holds
        |   |                   a directory listing of the assignments and
        |   |                   displays them
        |   + index.php         The landing page for the assignment page
        |   + localLib.php      The root finding functions
        |   + #/                The assigment directories they may have
        |   ...                 other subdirectories but are beyond the
        |                       scope of this document
        |
        + phpSource             The phpSource directory
        |   + content.php       The content of the phpSource page holds
        |   |                   a directory listing of the php source files and
        |   |                   displays them
        |   + index.php         The landing page for the phpSource page
        |   + localLib.php      The root finding functions
        |
        + WEB-INF               Instructor supplied directory Assignment 1
        |   + classes           Instructor supplied directory Assignment 1
        |   + lib               Instructor supplied directory Assignment 1
        |
        + content.php           The content of the home page
        + index.php             The home page created for the application
        + localLib.php          The root finding functions

