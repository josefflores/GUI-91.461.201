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
     *  This file holds the content for the home page.
     *
     *  9/10/14 Generated Page Template
     */

    //  Define guard prevents acces unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin

    //  Describing page content
    echo '
                    <img class="description" src="' , $A[ 'W_IMG' ] ,  'home.png" alt="home logo" >
                    <div class="description" >
                        <h3>Home Page</h3>
                        <h4>The Project Home Page</h4>
                        <p> This page is the landing page to Jose Flores&apos;s GUI Programming I project website. It will be updated during the Fall 2014 and Spring 2015 semesters.</p>
                    </div>
                    ';

?>
