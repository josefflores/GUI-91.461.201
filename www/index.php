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
     *  This file is the landing page for the home page, It
     *  orchestrates the inclusion of paths, functions and libraries
     *  that might be needed by the application. It then passes the
     *  Content to the page template for page generation.
     *
     *  9/10/14 Generated index file
     */


    // File Access Guard
    define( 'CONTENT_GUARD' , TRUE ) ;

    ////
    //  RESOLVE PATHS
    ////

    // Load the local library for path resoloution
    include( 'localLib.php' ) ;

    //  Resolve root paths, determine OS, etc
    $A = init( __DIR__ ) ;

    //  Including application navigation paths
    include( $A[ 'D_ROOT' ] . 'ini' . $A[ 'D_SLASH' ] . 'paths.php' ) ;

    ////
    //  INCLUDES
    ////
    include( $A[ 'D_PHP' ] . 'includes.php' ) ;

    ////
    //  PAGE CALLING
    ////

    //  Page title
    $A[ 'TAB_NAME' ] = getPageDir( $A ) ;
	$A[ 'PAGE_TITLE' ] = $A[ 'TAB_APP' ] . ' - ' . $A[ 'TAB_NAME' ] ;

    //  Set content for index
    $A[ 'CONTENT' ] = 'content.php' ;

    //  Begin page processing
    include( $A[ 'D_PHP' ] . 'template.php' ) ;

?>
