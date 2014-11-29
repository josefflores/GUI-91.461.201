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
     *  This file holds the content for the assignment 8. The assignment
     *  file has had its extension modified to work as a PHP file to
     *  allow for header redirects from unwanted access as well as to
     *  allow for dynamic includes as the css and image locations are not
     *  hard coded as they originally were.
     *
     *  11/24/14    Added assignment 8 content
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

            updated by JFF on 11/24/14
                Created web page comments, added form and external links

        -->

        <!-- Setting the page title-->
        <title>GUI - Assignment 8</title>

        <!-- Including jquery from Google -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <!-- Include jQuery UI -->
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

        <!-- Include jQuery Validation -->
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>

        <!-- Assignment 8 library -->
        <script src="<?php echo $A[ 'W_COM' ] ; ?>js/assignment8.js "></script>

        <!-- Assignment 6 onload function -->
        <script src="<?php echo $A[ 'W_COM' ] ; ?>js/assignment8Onload.js "></script>

        <!-- Including the main stylesheet -->
        <link rel="stylesheet" type="text/css"  href="<?php echo $A[ 'W_COM' ] ; ?>css/main8.css" >

        <!-- Including the assignment stylesheet -->
        <link rel="stylesheet" type="text/css"  href="<?php echo $A[ 'W_COM' ] ; ?>css/assignment8.css" >

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

                <div class="description">

                    <!-- The tab widget -->
                    <div id="tabs">

                        <!-- Tab bar -->
                        <ul>

                            <!-- The information tab  -->
                            <li class="img-info">
                                <a href="#table-information" > </a>
                            </li>

                            <li class="img-generator">
                                <a href="#table-generator"></a>
                            </li>

                        </ul>

                        <!-- Default  tabs -->

                        <!-- Information Content -->
                        <div id="table-information">

                            <!-- Table generator instructions -->
                            <fieldset>

                                <legend>Multiplication Table Generation</legend>

                                <div class="input-line">

                                    <ol>
                                        <li class="instruction">Click on the <span class="table-generator"></span> tab to bring up the multiplication table generator.</li>
                                        <li class="instruction">Enter numbers for the horizontal and vertical table ranges in decimal integer form.</li>
                                        <li class="instruction">Click the process button to generate the multiplication table.</li>
                                    </ol>

                                    <p>The factors are then used to generate a multiplication table in their own tab, which has the lowest bound located to the top left of the table increasing in values across and downwards in increments of one.</p>

                                </div>

                            </fieldset>

                            <!-- Tab closing instructions -->
                            <fieldset>

                                <legend>
                                    Tab Management
                                </legend>

                                <div class="input-line">

                                    <ol>
                                        <li class="instruction">To close tabs click on the <span class="tab-close-button"></span> on the specific tab to close it.</li>
                                    </ol>

                                    <p>OR</p>

                                    <ol>
                                        <li class="instruction">Use the close tabs form that appears on the <span class="table-generator"></span> tab when table tabs are present.</li>
                                        <li class="instruction">Select the checkboxes that correlate to the tabs you wish to close.</li>
                                        <li class="instruction">Click the close button.</li>
                                    </ol>

                                </div>

                            </fieldset>

                        </div>

                        <!-- Form Content -->
                        <div id="table-generator">

                            <!-- The input form for the multiplication table application-->
                            <form class="cmxform" id="application" name="application" >

                               <fieldset>

                                    <legend>
                                            Table Generator
                                    </legend>

                                    <!-- The horizontal numerical bounds -->
                                    <div class="input-line">
                                        <label for="num_1">Enter a horizontal axis bounding number.</label>
                                        <input id="num_1" name="num_1" type="number"/>
                                    </div>

                                    <div class="input-line">
                                        <label for="num_2">Enter a horizontal axis bounding number.</label>
                                        <input id="num_2" name="num_2" type="number"/>
                                    </div>

                                    <!-- The vertical numerical bounds -->
                                    <div class="input-line">
                                        <label for="num_3">Enter a vertical axis bounding number.</label>
                                        <input id="num_3" name="num_3" type="number"/>
                                    </div>

                                    <div class="input-line">
                                        <label for="num_4">Enter a horiverticalzontal axis bounding number.</label>
                                        <input id="num_4" name="num_4" type="number"/>
                                    </div>

                                    <!-- The submission button -->
                                    <div class="input-line">
                                        <input class="submit" type="submit" value="Generate" />
                                    </div>

                                </fieldset>

                            </form>

                            <form class="cmxform" id="settings" name="settings" >

                                <fieldset id="closer">

                                    <legend>
                                        Close Tabs
                                    </legend>

                                    <ul>

                                    </ul>

                                    <!-- The submission button -->
                                    <div class="input-line">
                                        <input class="submit" type="submit" value="Close" />
                                    </div>

                                </fieldset>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>

