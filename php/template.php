<?php
    /**
     *  @file   template.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A Umass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Your First Web Page
     *
     *  This file is the page template for all webpages
     *
     *  9/9/14  Generated Page Template
     */

	//  Page title
	$A[ 'TAB_NAME' ] = getPageDir( $A ) ;
	$A[ 'PAGE_TITLE' ] = $A[ 'TAB_APP' ] . ' - ' . $A[ 'TAB_NAME' ] ;

	// Generating cocument type declaration
	echo '<!DOCTYPE html>
<!-- Document type declaration for HTML5-->
	' ;

	// Starting HTML
	echo '
<!-- Start of html -->
<html lang="en">' ;

	// Creating the head of the document
	echo '
    <head>
    ' ;

    /**
     *  Including the Meta information for the page such as ecodings,
     *  title, page icons, etc .
     */
    include( $A[ 'D_PHP' ] . 'meta.php' ) ;
    /**
     *  Including any relevent css files, such as the main css file and
     *  any plugin/ library css files.
     */
    include( $A[ 'D_PHP' ] . 'css.php' ) ;
    /**
     *  Including any relevant Javascript files. This also includes Jquery
     *  files and any onload functions that need to be run.
     */
    include( $A[ 'D_PHP' ] . 'js.php' ) ;

	echo '
    </head>
	' ;


	/**
	 *  Generating the body of the document. In this first section the header
	 *  and the menu will be generated.
	 */
	echo '
    <body>

        <!--
            Begin page wrapper, the wrapper will allow for future
            positional modifications in page layout such as centering.
        -->
        <div class="wrapper">
	' ;

        include( $A[ 'D_PHP' ] . 'header.php' ) ;

	// The content section is generated here, it will be unique for each page
	echo '
            <!-- Begin content -->
            <div class="content">

                <div class="content-wrapper">
	' ;

	// Page specific content is being included
	include( $A[ 'CONTENT' ] )  ;

	echo '
                </div>
            <!-- End content -->
            </div>
	' ;

	/**
	 *  Generating the footer of the document. The footer contains links to
	 *  the github repository, copyright information as well as a link to view
	 *  the php source.
	 */
	echo '
            <!-- Begin footer with page information-->
            <div class="footer">

                <!-- Wrapper to allow for centering -->
                <div class="footer-wrapper">

                    <!-- Copyright statement -->
                    <div class="copyright">
                        Copyright &copy; ' , $A[ 'YEAR' ] , ' by ' , $A[ 'AUTHOR' ] , '. All rights reserved
                    </div>

                    <!-- Github link where versioning code is being stored -->
                    <div class="notice">
                        <a href="' , $A[ 'GITHUB' ] , '">Github Repository</a>
                    </div>

                <!-- End wrapper -->
                </div>

            <!-- End footer -->
            </div>

        <!-- End page wrapper -->
        </div>

    <!-- End of body -->
    </body>

<!-- End of HTML document -->
</html>' ;

?>
