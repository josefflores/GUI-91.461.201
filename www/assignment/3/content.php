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
     *  This file holds the content for assignment 3
     *
     *  9/10/14 Created stub hello world file with header guard
     */

    //  Define guard prevents acces unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin
    echo 'Hello World' ;
?>
