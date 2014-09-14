<?php
    /**
     *  @file   framework.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A Umass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Your First Web Page
     *
     *  This file holds the Framework class, I generated these
     *  functions originally for th CSR project that I worked on during
     *  Spring and Summer of 2014, but modified them to a class for my
     *  GUI course in Fall 2014.
     *
     *  9/12/2014           Changed the file into a class called framework
     *                      which will initialize and be the starting point
     *                      for improvement. Contains Private members
     *                      - getRoot
     *                      - is ssl
     *                      - isWindows
     *                      - initOS
     *                      And Public members
     *                      - __Construct
     *                      - init
     *  6/14/2014           isSSL was added
     *  4/20/2014           getRoot was added
     */

    class framework {

    // VARIABLES

        private $A ;    // A copy of the global application variable

    // FUNCTIONS

        /**
         *  @name __construct
         *
         *  Thi is the constuctor to the initFramework class
         *
         *  @param  $A      The application global
         */
        public function __construct( $A ){
            // Store a copy for use
            $this->A = $A ;
            ini_set( 'display_errors',1 ) ;  
            error_reporting( E_ALL ) ;
        }

        /**
         *  @name   getRoot
         *
         *  This functioin resolves the root paths, it counts backwards until
         *  the directories do not match. This function works because there
         *  are no other virtual directories besides the root.
         */
        public function getRoot( ) {

            $server = $_SERVER[ 'SERVER_NAME' ] . $_SERVER[ 'REQUEST_URI' ] ;

            /**
             *  Generate an array of web directory folders.
             */

            //  Remove any GET variables.
            $server = explode( '?' , $_SERVER['SERVER_NAME'] . $_SERVER[ 'REQUEST_URI' ] ) ;

            //  Remove the filename if present.
            $server = explode( 'index.php' , $server[ 0 ] ) ;

            //  Generate an array of Web directories.
            $server =  array_filter( explode( $this->A[ 'W_SLASH' ] , $server[ 0 ] ) ) ;

            // Generate an array of application directories.
            $dir = explode( $this->A[ 'D_ROOT' ] , $this->A[ 'DIR' ] ) ;
			$dir = explode( $this->A[ 'D_SLASH' ] , $dir[ 1 ] ) ;

            //  Get sizes of arrays.
            $s = count( $server ) ;
            $d = count( $dir ) - 1 ; // minus 1 to compensate for the www
			
			//  Determine if https or http
			if ( $this->isSSL() ) {
				$form = 'https' ;
			} else{
				$form = 'http' ;
			}
			//  Generate root paths, There is a distinct web root and
			//  directory root.
			$this->A[ 'W_ROOT' ] = $form . '://' ;

			// Web root
			// S - d to make the difference which is the common directories
			for ( $j = 0 ; $j < $s - $d ; ++$j ) 
				$this->A[ 'W_ROOT' ] .= $server[ $j ] . $this->A[ 'W_SLASH' ] ;

        }

        /**
         *  @name isSSL
         *
         *  This function detects if the site is being accessed in https
         *
         *  @return true        accessed by https
         *  @return false       accessed by http
         */
        private function isSSL() {

            if ( !empty( $_SERVER[ 'HTTPS' ] ) &&
                 $_SERVER[ 'HTTPS' ] != 'off' ) {
                return true ;
            }

            return false ;
        }

        /**
         *  @name isWindows
         *
         *  This function determines wether php is in a windows OS or not.
         *
         *  @return     true    Windows
         *  @return     false   Not Windows
         */
        private function isWindows() {

            if ( strtoupper( substr( PHP_OS , 0 , 3 ) ) === 'WIN' )
                return true ;

            return false ;
        }

        /**
         *  @name initOS
         *
         *  This function initializes the system to the OS, It Determines
         *  Direcotry slashes so that functions like explode do not break
         *  when the application is moved between operating systems.
         */
        private function initOS( ){

            //  Checking if os of server is windows
            $this->A[ 'OS_WIN' ] = $this->isWindows() ;

            //  Web slash is universal and is only here for consistency
            $this->A[ 'W_SLASH' ] = '/' ;

            // Determine Directory Slashes
            if ( $this->A[ 'OS_WIN' ] ) {
                $this->A[ 'D_SLASH' ] = '\\' ;
            } else {
                $this->A[ 'D_SLASH' ] = '/' ;
            }

        }

        /**
         *  @name   init
         *
         *  This function initializes the page
         *
         *  @return The application global
         */
        public function init( ) {

            $this->initOS() ;
            $this->getRoot( ) ;

            return $this->A ;
        }

    }

?>
