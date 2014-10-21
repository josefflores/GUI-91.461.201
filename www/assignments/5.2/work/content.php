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
     *      Styling Your First Web Page With CSS
     *
     *  This file holds the content for the assignment 5. The assignment
     *  file has had its extension modified to work as a PHP file to
     *  allow for header redirects from unwanted access as well as to
     *  allow for dynamic includes as the css and image locations are not
     *  hard coded as they originally were.
     *
     *  9/10/14 Modified HTML to work as PHP
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
            91.461 Assignment: 5
            Jose F. Flores, UMass Lowell Computer Science Student
                jose_flores@student.uml.edu
            Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
                freely copied or excerpted for educational purposes with credit
                to the author.

            updated by JFF on 10/7/14
                Created Updated web page comments

        -->

        <!-- Setting the page title-->
        <title>GUI - Assignment 5</title>

        <!-- Including jquery from Google -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <!-- Including assignment js file -->
        <script src="<?php echo $A[ 'W_JS' ] ; ?>assignment5.js" type="text/javascript"></script>

        <!-- Including google fonts -->
        <link href='//fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

        <!-- Including assignment css file -->
        <link href='<?php echo $A[ 'W_CSS' ]; ?>assignment5.css' rel='stylesheet' type='text/css'>

    </head>

    <body>
         <input type="hidden" id="column" name="column" value="<?php

         // Validate Get input for that it exists and is a number and that when rounded to an integer is positive

         if ( isset( $_GET[ 'col' ] ) &&
              is_numeric( $_GET[ 'col' ] ) &&
              round( $_GET[ 'col' ] ) >= 1 ) {

                  // return positive number
                  echo round( $_GET[ 'col' ] ) ;

            } else {

                //  return 1 if nothing given or value was not valid
                echo "1" ;

            }

        ?>"/>

        <!--
            Applying multiple classes  to give constitution background
            and stretch div across page
        -->
        <div class="wide constitution">

            <!-- Centering content -->
            <div class="wrapper">

                <!-- Generating header -->
                <div class="header">

                    <!--
                        image sourced from

                        http://www.sonofthesouth.net/revolutionary-war/battles/battle-lexington-concord.htm

                        The image was then manipulated to have faded edges.
                    -->
                    <img class="banner" src="<?php echo $A[ 'W_IMG' ] ; ?>paulrevere.png" alt="header image"/>

                </div>

            </div>

        </div>

        <!--
            Applying multiple classes to give an inset blue border and
            stretch div across page
        -->
        <div class="wide border">
        </div>

        <!-- Stretch containing div across page -->
        <div class="wide">

            <!-- Centering content -->
            <div class="wrapper">

                <!-- Literature will be placed here -->
                <div id="content">
                </div>

            </div>

        </div>

    </body>

</html>






