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
     *  This file holds the instructions for the assignment 8.
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

            updated by JFF on November 20, 2014 at 12:30
                Updated web page for assignment 8
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

                                <a href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/8/' ; ?>">
                                    Instructions
                                </a>

                            </li>

                            <li>
                                <a href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/8/work/'; ?>">
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
                        Assignment 8
                    </h3>

                    <h4 class="info">
                        Instructions
                    </h4>

                    <p>
                        <a href="//teaching.cs.uml.edu/~heines/91.461/91.461-2014-15f/461-assn/UsingThejQueryValidationPlugin-v03.jsp">
                            Assignment 8 Instructions - Creating an Interactive Dynamic Table
                        </a>
                    </p>

                    <ul>
                        <li>Copied program for the dynamic table assignment:
                            <ul>
                                <li> assignment/6/ &#8594; assignment/8/</li>
                                <li>assignment6.js &#8594; assignment8.js</li>
                                <li>assignment6onload.js &#8594;  assignment8onload.js</li>
                                <li>assignment6.css &#8594; assignment8.css </li>
                            </ul>
                        </li>
                        <li>Investigated jQuery Validation plugin. Read the text, and examples.</li>
                        <li>Added jQuery Validation plugin, and modified assignment validation to use the plugin.</li>
                        <li>Customize error messages displayed by the plugin; customizations were both in location and content.</li>
                        <li>Moved table to a jQuery UI tab interface.
                            <ul>
                                <li>The first tab contains the parameter form.</li>
                                <li>New tables were added to a new tab.</li>
                                <li>Tab was labeled with the four parameters used to create it.</li>
                                <li>Generated tabs were given an X icon to close them, the form tab can not be closed.</li>
                                <li>Multiple tab closeing was implemented with layout editing page.</li>
                            </ul>
                        </li>
                        <li>Application was tested by:
                            <ul>
                                <li>me for all functionality use cases.</li>
                                <li>family members who are both engineers and non engineers of various age groups and technology skills.</li>
                            </ul>
                        </li>
                        <li>1 discovered bug was fixed. - Overflow of large tables</li>
                        <li>1 recomendation was attempted - overlay that ran during long executions, did not include because the overlay was not appearing until after the process was done. Have to look into callbacks and figure out why this was not working. </li>
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
