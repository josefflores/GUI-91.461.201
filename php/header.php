<?php
    /**
     *  @file   header.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A Umass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Your First Web Page
     *
     *  This file holds the header for the template
     *
     *  9/11/14 Added menu on page highlight
     *  9/9/14  Generated header template
     */

    echo'
            <!-- Start header -->
            <div class="header">

                <!--
                    Begin wrapper, this wrapper allows for the whole
                    header to be positioned as an item while maintaining
                    a full header bar.
                -->
                <div class="title-wrapper">

                    <!-- logo -->
                    <img class="logo" src="' , $A[ 'LOGO' ] , '" alt="Page Logo">

                    <div class="header-right" >

                        <!-- Title of the page -->
                        <h1 class="title">' , $A[ 'TITLE' ] , '</h1>

                        <!-- Subtitle description -->
                        <h2 class="title-sub">' , $A[ 'SUBTITLE' ] , '</h2>

                    </div>

                    <!-- Navigation menu -->
                    <nav class="horizontal">
                        <ul>
                            <li><a ' ;

                            // Checking to see if the user is on a the page
                            if ( $A[ 'TAB_NAME' ] == 'HOME' ) echo 'class="selected" ' ;

                            echo  'href="' , $A[ 'W_ROOT' ] , '"> Home </a></li>

                            <li><a ' ;

                            // Checking to see if the user is on a the page
                            if ( $A[ 'TAB_NAME' ] == 'ABOUT' ) echo 'class="selected" ' ;

                            echo  'href="' , $A[ 'W_ROOT' ] , 'about/"> About </a></li>

                            <li><a ' ;

                            // Checking to see if the user is on a the page
                            if ( $A[ 'TAB_NAME' ] == 'ASSIGNMENTS' ) echo 'class="selected" ' ;

                            echo  'href="' , $A[ 'W_ROOT' ] , 'assignments/"> Assignments </a></li>

                            <li><a ' ;

                            // Checking to see if the user is on a the page
                            if ( $A[ 'TAB_NAME' ] == 'PHP-SOURCE' ) echo 'class="selected" ' ;

                            echo  'href="' , $A[ 'W_ROOT' ] , 'php-source/"> PHP Source </a></li>

                        </ul>
                    </nav>

                <!-- End header wrapper-->
                </div>

            <!-- End header -->
            </div>
    ' ;

?>
