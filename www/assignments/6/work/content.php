<?php
    /**
     *  @file   content.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A UMass Lowell Computer Science Student 91.461 Assignment
     *
     *  This file holds the content for the assignment 6. The assignment
     *  file has had its extension modified to work as a PHP file to
     *  allow for header redirects from unwanted access as well as to
     *  allow for dynamic includes as the css and image locations are not
     *  hard coded as they originally were.
     *
     *  10/20/14    Added assignment 6 content
     *  9/10/14     Modified HTML to work as PHP
     */

    //  Define guard prevents access unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

?>

<!DOCTYPE html><!-- Document type declaration for HTML5-->

<!-- Start of HTML, language of document is English -->
<html lang="en">

    <head>
        <!-- Document is utf-8 -->
        <meta charset="utf-8">

        <!--
            File: content.html
            91.461 Assignment: 6
            Jose F. Flores, UMass Lowell Computer Science Student
                jose_flores@student.uml.edu
            Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
                freely copied or excerpted for educational purposes with credit
                to the author.

            updated by JFF on 10/20/14
                Created / Updated web page comments, added form and external links

        -->

        <!-- Setting the page title-->
        <title>GUI - Assignment 6</title>

        <!-- Including jquery from Google -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <!-- Assignment 6 library -->
        <script src="<?php echo $A[ 'W_COM' ] ; ?>js/assignment6.js "></script>

        <!-- Assignment 6 onload function -->
        <script src="<?php echo $A[ 'W_COM' ] ; ?>js/assignment6Onload.js "></script>

        <!-- Including the main stylesheet -->
        <link rel="stylesheet" type="text/css"  href="<?php echo $A[ 'W_COM' ] ; ?>css/main.css" >

        <!-- Including the assignment stylesheet -->
        <link rel="stylesheet" type="text/css"  href="<?php echo $A[ 'W_COM' ] ; ?>css/assignment6.css" >

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

                                <a href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/6/' ; ?>">
                                    Instructions
                                </a>

                            </li>

                            <li>
                                <a href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/6/work/'; ?>">
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
                        Multiplication Table
                    </h3>

                    <h4 class="info">
                        Instructions
                    </h4>

                    <p>
                        To Generate a multiplication table:
                    </p>

                    <ol>
                        <li>Enter numbers for the horizontal and vertical table headers in hexadecimal ( 0xNumber) or decimal (Number).</li>
                        <li>Click the process button to generate the multiplication table.</li>
                    </ol>

                    <p>
                        The values entered are then checked to make sure they are numbers, if the number is a float then it is rounded down to the closest integer value. The table values are then calculated and displayed in decimal form. The factors are displayed with the lowest bound located to the top left increasing in values across and downwards in increments of one.
                    </p>

                </div>

                <div class="description">

                    <!-- The input form for the multiplication table application-->
                    <form id="application" name="application" >

                        <!-- The horizontal numerical bounds -->
                        <div class="input-line">
                            <label>Enter horizontal axis bounding numbers. Order does not matter.</label>
                            <input id="num_1" name="num_1" class="number" type="text"/>
                            <span id="num_1_error" class="message"></span>
                            <br/>
                            <input id="num_2" name="num_2" class="number" type="text"/>
                            <span id="num_2_error" class="message"></span>
                        </div>

                        <!-- The vertical numerical bounds -->
                        <div class="input-line">
                            <label>Enter vertical axis bounding numbers. Order does not matter.</label>
                            <input id="num_3" name="num_3" class="number" type="text"/>
                            <span id="num_3_error" class="message"></span>
                            <br/>
                            <input id="num_4" name="num_4" class="number" type="text"/>
                            <span id="num_4_error" class="message"></span>
                        </div>

                        <!-- The submission button -->
                        <button type="submit"> Process </button>

                    </form>

                    <!-- The target div for the multiplication table -->
                    <div id="table"></div>

                </div>

            </div>

        </div>

    </body>

</html>

