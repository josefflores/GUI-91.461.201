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
     * 	9/11/14	Added menu on page highlight
     *  9/9/14  Generated header template
     */

	/**
	 *  This explodes the url to extract the last directory name so that the 
	 * 	menu can then be highlighted as selected.
	 */
	$tmp = explode( '/' , 
					$_SERVER[ 'HTTP_HOST' ] . 
					$_SERVER[ 'REQUEST_URI' ] ) ;

	/**
	 *  setting the directory to lowercse for comparison incase someone typed 
	 *	it in a different case
	 */
	$tmp = strtoupper( $tmp[ count( $tmp ) - 2 ] ) ; 

	/**
	 * 	This switch case then checks upon the available menu items and then 
	 * 	marks the page that the user is visiting
	 */
	switch ( $tmp  ) {
		case 'ABOUT' : 
		case 'ASSIGNMENT' :
		case 'PHPSOURCE' :  
			$page = $tmp ; 
			break ;
		default : 
			$page = 'HOME' ;  
			break ;
	}

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
                            if ( $page == 'HOME' ) echo 'class="selected" ' ; 
                            
							echo  'href="' , $A[ 'W_ROOT' ] , '"> Home </a></li>
                            
                            <li><a ' ;
                            
                            // Checking to see if the user is on a the page
                            if ( $page == 'ABOUT' ) echo 'class="selected" ' ; 
                            
							echo  'href="' , $A[ 'W_ROOT' ] , 'about/"> About </a></li>
                            
                            <li><a ' ;
                            
                            // Checking to see if the user is on a the page
                            if ( $page == 'ASSIGNMENT' ) echo 'class="selected" ' ; 
                            
							echo  'href="' , $A[ 'W_ROOT' ] , 'assignment/"> Assignments </a></li>
                            
                            <li><a ' ;
                            
                            // Checking to see if the user is on a the page
                            if ( $page == 'PHPSOURCE' ) echo 'class="selected" ' ;
                            
							echo  'href="' , $A[ 'W_ROOT' ] , 'phpSource/"> PHP Source </a></li>
							
                        </ul>
                    </nav>

                <!-- End header wrapper-->
                </div>

            <!-- End header -->
            </div>
	' ;

?>
