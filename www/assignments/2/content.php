<?php
    /**
     *  @file   content.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A Umass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Your First Web Page
     *
     *  This file holds the content for the assignment 2. The assignment
     *  file has had its extension modified to work as a php file to
     *  allow for header redirects from unwanted access as well as to
     *  allow for dynamic includes as the css and image locations are not
     *  hardcoded as they originally were.
     *
     *  9/10/14 Modified html to work as php
     *  9/9/14  Generated html content
     */

    //  Define guard prevents acces unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin
?>

<!DOCTYPE html> <!-- Document type declaration for HTML5-->

<!-- Start of html, language of document is english -->
<html lang="en">

    <head>

        <!-- Document is utf-8 -->
        <meta charset="utf-8">

        <!--
            File: index.html
            91.461 Assignment: Creating Your First Web Page
            Jose F. Flores, Umass Lowell Computer Science Student
                jose_flores@student.uml.edu
            Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
                freely copied or excerpted for educational purposes with credit
                to the author.

            updated by JFF on September 9, 2014 at 13:30
                Updated web page comments
            updated by JFF on September 5, 2014 at 14:00
                Created web page
            updated by JFF on September 4, 2014 at 14:00
                Added header comment
        -->

        <!-- Setting the page title-->
        <title> GUI Programming I </title>

        <!-- Adding link to main css stylesheet file -->
        <link type="text/css" rel="stylesheet" href="<?php echo $A[ 'W_CSS' ] ; ?>assignment2.css">

    </head>

    <body>

        <!--
            Begin page wrapper, the wrapper will allow for future
            positional modifications in page layout such as centering.
        -->
        <div class="wrapper">

            <!-- Start header -->
            <div class="header">

                <!--
                    Begin wrapper, this wrapper allows for the whole
                    header to be positioned as an item while maintaining
                    a full header bar.
                -->
                <div class="title-wrapper">

                    <!-- logo -->
                    <img class="uml" src="<?php echo $A[ 'W_IMG' ] ; ?>UML.jpg" alt="University of Massachussetss Lowell Logo">

                    <!-- Title of the page -->
                    <h1 class="title">91.461 GUI Programming I</h1>

                    <!-- Subtitle description -->
                    <h2 class="title-sub">Fall 2014 Semester, Section 201</h2>

                <!-- End header wrapper-->
                </div>

            <!-- End header -->
            </div>


            <!-- Begin content -->
            <div class="content">

                <!-- About section -->
                <h2> About </h2>
                <p> My name is Jose Flores and I am a senior majoring in Computer Science. This is my GUI Programming I home page which was setup as. </p>

                <!-- Assignment section -->
                <h2> Assignments </h2>
                <!--
                    Ordered list of assignments entries that follows the format :
                        list item containing
                            an anchor tag with Link to Instructions
                            paragraph tag with actions taken to complete
                -->
                <ol>

                    <!-- Assignment entry -->
                    <li> <a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2014-15f/461-assn/InstallingXAMPP-v02.jsp"> Assignment 1 Instructions - Setting Up to Take This Course </a>
                        <p> I set up a Windows 8 IIS Server </p>
                    </li>

                    <!-- Assignment entry -->
                    <li> <a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2014-15f/461-assn/FirstWebPage-v04.jsp"> Assignment 2 Instructions - Creating Your First Web Page </a>
                        <p> This webpage was constructed to completes the assignment </p>
                    </li>
                <!-- End ordered list -->
                </ol>

            <!-- End content -->
            </div>

            <!-- Begin footer with page information-->
            <div class="footer">

                <!-- Wrapper to allow for centering -->
                <div class="footer-wrapper">

                    <!-- Copyright statement -->
                    <div class="copyright">
                        Copyright &copy; 2014 by Jose F. Flores. All rights reserved
                    </div>

                    <!-- Github link where versioning code is being stored -->
                    <div class="notice">
                        <a href="https://github.com/josefflores/GUI-91.461.201">Github Repository</a>
                    </div>

                <!-- End wrapper -->
                </div>

            <!-- End footer -->
            </div>

        <!-- End page wrapper -->
        </div>

    <!-- End of body -->
    </body>

<!-- End of HTML document -->
</html>
