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
     *      Styling Your First Web Page With CSS
     *
     *  This file holds the content for the assignment 3. The assignment
     *  file has had its extension modified to work as a PHP file to
     *  allow for header redirects from unwanted access as well as to
     *  allow for dynamic includes as the css and image locations are not
     *  hard coded as they originally were. This assignments purpose is to
     *  show knowledge of text styling with css, So I have created a quick
     *  tutorial on how to format text.
     *
     *  9/10/14 Modified HTML to work as PHP
     */

    //  Define guard preventsaccess unless from the index.php file at
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
            91.461 Assignment: Assignment 4
            Jose F. Flores, UMass Lowell Computer Science Student
                jose_flores@student.uml.edu
            Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
                freely copied or excerpted for educational purposes with credit
                to the author.

            updated by JFF on October 6, 2014 at 21:30
                Updated web page for assignment 5
            updated by JFF on October 1, 2014 at 21:30
                Updated web page comments
            updated by JFF on September 9, 2014 at 13:30
                Updated web page comments
            updated by JFF on September 5, 2014 at 14:00
                Created Web page
            updated by JFF on September 4, 2014 at 14:00
                Added header comment
        -->

        <!-- Setting the page title-->
        <title>
            GUI Programming I
        </title>

        <!-- Adding link to main css style sheet file -->
        <link type="text/css" rel="stylesheet" href="<?php echo $A[ 'W_CSS' ] ; ?>main.css">

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
                    <img class="logo" src="<?php echo $A[ 'W_IMG' ] ; ?>mouse.png" alt="Page Logo">

                    <div class="header-right" >

                        <!-- Title of the page -->
                        <h1 class="title">
                            91.461 GUI Programming I
                        </h1>

                        <!-- Subtitle description -->
                        <h2 class="title-sub">
                            Fall 2014 Semester, Section 201
                        </h2>

                    </div>

                    <!-- Navigation menu -->
                    <nav class="horizontal">

                        <ul>

                            <li>

                                <a href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/5/' ; ?>">
                                    Instructions
                                </a>

                            </li>

                            <li>
                                <a href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/5/work/' ; ?>">
                                    Work
                                </a>
                            </li>

                        </ul>

                    </nav>
                <!-- End header wrapper-->
                </div>

            <!-- End header -->
            </div>


            <!-- Begin content -->
            <div class="content">

                <img class="description" src="<?php echo $A[ 'W_IMG' ] ; ?>assignment.png" alt="assignment logo" >

                <div class="description" >

                    <h3>
                        Assignment 5
                    </h3>

                    <h4 class="info">
                        Instructions
                    </h4>

                    <p>
                        <a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2014-15f/461-assn/FormattingText-v04.jsp">
                            Assignment 5 Instructions - Formatting Dynamic Text
                        </a>
                    </p>

                    <!-- The actions taken to complete the assignment -->
                    <ul>

                        <li>
                            Read chapters 1 -3 , 6 of the textbook.
                        </li>

                        <li>
                            Did Tutorial on 138.
                        </li>

                        <li>
                            Read the excerpts on JSON.
                        </li>

                        <li>
                            Chose Longfellow's poem Paul Revere's ride.
                        </li>

                        <li>
                            Convereted poem to JSON.
                        </li>

                        <li>
                            Wrote HTML page, copied and modified the JavaScript needed to load the JSON file from instructor example.
                        </li>

                        <li>
                            Validated with Google Chrome's debug tools.
                        </li>

                        <li>
                            Modified instructor code to display the text.
                        </li>

                        <li>
                            Styled content in external css file.
                        </li>

                   </ul>

                </div>

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

                    <!-- Github link where versioning of code is being stored -->
                    <div class="notice">

                        <a href="https://github.com/josefflores/GUI-91.461.201">
                            Github Repository
                        </a>

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
