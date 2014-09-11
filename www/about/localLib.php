<?php
    /**
     *  @file   locallib.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A Umass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Your First Web Page
     *
     *  This file holds the root generating functions, I generated these
     *  functions originally for th CSR project that I worked on during
     *  Spring and Summer of 2014
     *
     *  6/14/2014           isSSL was added
     *  4/20/2014           getRoot was added
     */

    //  Define guard prevents access unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    /**
     *  @name   getRoot
     *
     *  This functioin resolves the root paths, it counts backwards until
     *  the directories do not match. This function works because there
     *  are no other virtual directories besides the root.
     *
     *  @param  $dir    The directory of the file being accessed.
     *
     *  @return $root   The discovered Web and Directory roots of the
     *                  document.
     */
    function getRoot( $dir , $A ) {

        $server = $_SERVER[ 'SERVER_NAME' ] . $_SERVER[ 'REQUEST_URI' ] ;

        /**
         *  Generate an array of web directory folders.
         */

        //  Remove any GET variables.
        $server = explode( '?' , $_SERVER['SERVER_NAME'] . $_SERVER[ 'REQUEST_URI' ] ) ;

        //  Remove the filename if present.
        $server = explode( 'index.php' , $server[ 0 ] ) ;

        //  Generate an array of Web directories.
        $server =  array_filter( explode( $A[ 'W_SLASH' ] , $server[ 0 ] ) ) ;

        // Generate an array of system directories.
        $dir = explode( $A[ 'D_SLASH' ] , $dir  ) ;

        //  Get sizes of arrays.
        $s = count( $server ) ;
        $d = count( $dir ) ;

        /**
         *  Find point of array mismatch.
         */

        //  Travers arrays in reverse
        for( $i = 0 ; $i < $d ; ++$i ) {

            //  Check for directory name mismatch if found determine path
            if ( $server[ $s - $i ] != $dir[ $d - $i ] ) {

                //  Determine if https or http
                if( isSSL() )
                    $form = 'https' ;
                else
                    $form = 'http' ;

                //  Generate root paths, There is a distinct web root and
                //  directory root.
                $root[ 'W_ROOT' ] = $form . '://' ;

                // Web root
                for ( $j = 0 ; $j <= ( $s - $i ) ; ++$j )
                    $root[ 'W_ROOT' ] .= $server[$j] . $A[ 'W_SLASH' ] ;

                // Directory root
                for ( $j = 0 ; $j <= ( ( $d - $i ) - 1 ) ; ++$j )
                    $root[ 'D_ROOT' ] .= $dir[$j] . $A[ 'D_SLASH' ] ;

                // Return array of root paths.
                return $root ;
            }
        }
    }

    /**
     *  @name isSSL
     *
     *  This function detects if the site is being accessed in https
     *
     *  @return true        accessed by https
     *  @return false       accessed by http
     */
    function isSSL() {

        if ( !empty( $_SERVER[ 'HTTPS' ] ) &&
             $_SERVER[ 'HTTPS' ] != 'off' ) {
            return true ;
        }

        return false ;
    }
    
    /**
	 * 	@name isWindows
	 * 
	 * 	This function determines wether php is in windows or not.
	 * 
	 * 	@return 	true	Windows
	 * 	@return 	false	Not Windows
	 */
	function isWindows() {
		
		if ( strtoupper( substr( PHP_OS , 0 , 3 ) ) === 'WIN' )
			return true ;
		
		return false ;
	}
	
	/**
	 * 	@name initOS
	 * 
	 * 	This function initializes the system to the OS
	 * 
	 * 	@return $A The modified application global
	 */
	function initOS( ){ 
    
		// Checking if os of server is windows
		$A[ 'OS_WIN' ] = isWindows() ;
		
		if ( $A[ 'OS_WIN' ] ) 
			$A[ 'D_SLASH' ] = '\\' ;
		else
			$A[ 'D_SLASH' ] = '/' ;
			
		$A[ 'W_SLASH' ] = '/' ;
		
		return $A ;
	}
	
	/**
	 * 	@name 	init
	 * 
	 * 	This function initializes the page
	 * 
	 * 	@dir	The __DIR__ of the caller
	 * 	
	 * 	@return The application global
	 */
	function init( $dir ) {
		
		$A = initOS( ) ;
		$B = getRoot( $dir , $A ) ;
		
		$A = array_merge( $A , $B ) ;
		
		return $A ;
	}
	
	
	
?>
