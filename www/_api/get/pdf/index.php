<?php
     /**
     *  @file   index.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A UMass Lowell Computer Science Student 91.461
     *
     *  This file holds the PHP initialization script for the application
     *
     *  9/21/14     Created initialization script
     */

    // File Access Guard
    define( 'CONTENT_GUARD' , TRUE ) ;

    /**
     *  INIT
     */

    // Find Directory Root
    $A[ 'DIR' ] = __DIR__ ;
    $tmp = explode( 'www' , $A[ 'DIR' ] ) ;
    $A[ 'D_ROOT' ] = $tmp[ 0 ] ;

    // Load Framework
    include( $A[ 'D_ROOT' ] . 'php/class/framework.php' ) ;
    $F = new framework( $A ) ;
    $A = $F->init( ) ;

    /**
     *  INCLUDES
     */
    include( $A[ 'D_ROOT' ] . 'php/_includes.php' ) ; // Global Includes

    // Serve PDF

    $file = $A[ 'D_PDF' ] . basename( $_GET[ 'file' ] ) ;

    if ( is_file( $file ) ) {
        header( 'Content-Type: application/pdf');
        header( 'Content-Disposition: attachment;filename="' . basename( $_GET[ 'file' ] ) . '"' ) ;
        readfile( $file ) ;
    }
    else {
        $F->respond( 404 , 'File was not found.' ) ;
    }

?>
