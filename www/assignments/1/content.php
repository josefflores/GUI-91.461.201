<?php
    /**
     *  @file   content.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A UMass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Your First Web Page
     *
     *  This file holds the content for the assignment 1. The assignment
     *  file has had its extension modified to work as a PHP file to
     *  allow for header redirects from unwanted access as well as to
     *  allow for dynamic includes as the css and image locations are not
     *  hard coded as they originally were.
     *
     *  9/10/14 Modified HTML to work as PHP
     *  9/9/14  Generated HTML content
     */

    //  Define guard prevents access unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin

?>

<!DOCTYPE html> <!-- Document type declaration for HTML5-->

<!-- Start of HTML, language of document is English -->
<html lang="en">

    <head>

        <!-- Document is utf-8 -->
        <meta charset="utf-8">

        <!--
            File: index.html
            91.461 Assignment: Creating Your First Web Page
            Jose F. Flores, UMass Lowell Computer Science Student
                jose_flores@student.uml.edu
            Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
                freely copied or excerpted for educational purposes with credit
                to the author.

            updated by JFF on September 9, 2014 at 13:30
                Updated web page comments
            updated by JFF on September 5, 2014 at 14:00
                Created Web page
            updated by JFF on September 4, 2014 at 14:00
                Added header comment
        -->

        <!-- Setting the page title-->
        <title> GUI Programming I </title>

        <!-- Adding link to main css style sheet file -->
        <link type="text/css" rel="stylesheet" href="<?php echo $A[ 'W_CSS' ] ; ?>assignment2.css">

    </head>

    <body><!-- Assignment entry -->

        <h2> Assignments </h2>
            <!--
                Ordered list of assignments entries that follows the format :
                    list item containing
                        an anchor tag with Link to Instructions
                        paragraph tag with actions taken to complete
            -->
            <ol>
                <li> <a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2014-15f/461-assn/InstallingXAMPP-v02.jsp"> Assignment 1 Instructions - Setting Up to Take This Course </a>
                    <p> I set up a Windows 8 IIS Server </p>
                </li>
            </ol>

    <!-- End of body -->
    </body>

<!-- End of HTML document -->
</html>
