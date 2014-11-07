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

<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">

        <title> In class assignment</title>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script type="text/javascript" src="<?php echo $A[ 'W_JS' ] ; ?>assignment6.2.js"></script>

        <!-- Adding link to main css style sheet file -->
        <link type="text/css" rel="stylesheet" href="<?php echo $A[ 'W_CSS' ] ; ?>main.css">

        <!-- Adding link to assignment css -->
        <link type="text/css" rel="stylesheet" href="<?php echo $A[ 'W_CSS' ] ; ?>assignment6.2.css">

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

                                <a href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/6.1/' ; ?>">
                                    Instructions
                                </a>

                            </li>

                            <li>
                                <a href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/6.1/work/'; ?>">
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

                    <nav class="assignment">

                        <ul>

                            <li>
                                <a href="#page1">Page1</a>
                            </li>

                            <li>
                                <a href="#page2">Page2</a>
                            </li>

                            <li>
                                <a href="#page3">Intentionally Broken Page3</a>
                            </li>

                        </ul>

                    </nav>

                    <div id="content"></div>

                </div>

            </div>

        </div>

    </body>

</html>
