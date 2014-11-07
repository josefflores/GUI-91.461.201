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
<!-- Document type declaration for HTML5-->

<!-- Start of html -->
<html lang="en">

    <head>

        <meta charset="utf-8">

        <!--
          File:  F:\Github\prescottmerrimack.com\www
          91.461 Assignment:  Assignments 7
          Jose F. Flores, UMass Lowell Computer Science, jose_flores@gmail.com
          Copyright (c) 2014 by Jose F. Flores.  All rights reserved.  May be freely
            copied or excerpted for educational purposes with credit to the author.
                 updated by Jose F. Flores on
            -->

        <!-- Setting meta information -->
        <meta name="keywords" content="health, care, lobbying,  Massachusetts, MA,  Lowell, legislative, research, regulatory, consulting, nancy, mcgovern, prescott, merrimack">
        <meta name="description" content="This is the Prescott &amp; Merrimack website.">
        <meta name="author" content="Jose F. Flores">
        <meta name="generator" content="Geany IDE">

        <!-- Setting Document title -->
        <title>Prescott &amp; Merrimack</title>

        <!-- Giving document tab bar icons -->
        <link rel="icon" href="<?php echo $A[ 'W_IMG' ] ; ?>a7/icon_32.png" type="image/png">
        <link rel="shortcut icon" href="<?php echo $A[ 'W_IMG' ] ; ?>a7/icon_32.png" type="image/png">

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Cinzel:900,400,700">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu">

        <!-- Adding css files -->
        <link rel="stylesheet" type="text/css" href="<?php echo $A[ 'W_CSS' ] ; ?>assignment7.css">

        <!-- Adding Google jquery APIs -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

        <!-- Validation Plugin -->
        <script src="<?php echo $A[ 'W_JS' ] ; ?>/lib/validate/jquery.validate.js"></script>

        <!-- Loading script -->
        <script type="text/javascript" src="<?php echo $A[ 'W_JS' ] ; ?>assignment7.js"></script>

    </head>

    <!--
        The body is given the overflow class so that a scrollbar is
        always present, this prevents background jumps when different
        sized pages are loaded.
    -->
    <body class="overflow-y">

        <!-- holds a background image -->
        <div class="image-bg"></div>

        <div class="wrapper">

            <!-- The page header including menu -->
            <div class="header">

                <div class="title-wrapper">

                    <!-- The company Name -->
                    <img class="logo" src="<?php echo $A[ 'W_IMG' ] ; ?>a7/header.png" alt="Prescott &amp; Merrimack">

                    <!-- navigation menu uses hashes and Java script to load the pages -->
                    <nav class="horizontal">

                        <ul>

                            <li><a href="#about"> About </a></li>

                            <li><a href="#blog"> Blog </a></li>

                            <li><a href="#staff"> Staff </a></li>

                            <li><a href="#contact"> Contact </a></li>

                        </ul>

                    </nav>

                </div>

            </div>

            <!-- Begin content -->
            <div class="content">

                <!-- holds the content div that is filled dynamically -->
                <div class="content-wrapper">

                    <div id="content">
                    </div>

                </div>

            <!-- End content -->
            </div>

            <!-- Begin footer with page information -->
            <div class="footer">

                <!-- Wrapper to allow for centering -->
                <div class="footer-wrapper">

                    Copyright &copy; 2014 Prescott &amp; Merrimack

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
