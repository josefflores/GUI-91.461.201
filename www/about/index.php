<?php
    /**
     *  @file   index.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A Umass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Your First Web Page
     *
     *  This file is the landing page for the about page, it
     *  orchestrates the inclusion of paths, functions and libraries
     *  that might be needed by the application. It then passes the
     *  content to the page template for page generation.
     *
     *  9/10/14 Generated index file
     */


    // File Access Guard
    define( 'CONTENT_GUARD' , TRUE ) ;

    ////
    //  RESOLVE PATHS
    ////

    // Load the local library for path resoloution
    include( './localLib.php' ) ;

    //  Resolve root paths
    $A = getRoot( __DIR__ ) ;
    //var_dump( $A ) ;

    //  Including application navigation paths
    include( $A[ 'D_ROOT' ] . 'ini\\paths.php' ) ;
    //var_dump( $A ) ;

    ////
    //  INCLUDES
    ////
    include( $A[ 'D_PHP' ] . 'includes.php' ) ;

    ////
    //  PAGE CALLING
    ////

    //  Page title
    $A[ 'PAGE_TITLE' ] = 'GUI - About' ;

    //  Set content for index
    $A[ 'CONTENT' ] = 'content.php' ;

    //  Begin page processing
    include( $A[ 'D_PHP' ] . 'template.php' ) ;

?>
