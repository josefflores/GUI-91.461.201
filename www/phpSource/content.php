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
     *  This file holds the content for the phpSource page. It generates
     *  a listing of all php files in the project and allows a user to
     *  view their source as requested by the instructor.
     *
     *  9/10/14  Generated Page Template
     */

    //  Define guard prevents acces unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin

    //  Determining which paths to itterate through
    $paths = array( realpath( $A[ 'D_DOC' ] ) ,
                    realpath( $A[ 'D_INI' ] ) ,
                    realpath( $A[ 'D_PHP' ] ) ,
                    realpath( $A[ 'D_WWW' ] ) ) ;

    //  Determine which files to show
    $include = array( 'php' , 'txt' ) ;

    //  Describing page content
    echo '
                    <img class="description" src="' , $A[ 'W_IMG' ] ,  'php.png" alt="php logo" >
                    <div class="description" >
                        <h3>PHP Source</h3>
                        <h4>A PHP Source file viewer</h4>
                        <p> This page was generated upon request of the instructor as a condition to be able to use PHP in the GUI Programming I assignments. It allows for the viewing of raw PHP source code from the web. I have also included txt files in the options as they are only being used as readme files, they have crucial information as to the directory structure of the document. The files are listed as links in the left pane, when clicked the page is reloaded as a bookmarkable page with the PHP source available on the right.</p>
                    </div>
    ';

    //  Generate the assignment links
    echo '
                    <nav class="vertical">
                        <ul>' ;

    /**
     *  For each directory Iterate throught the files and directories to
     *  retrieve php source files as they would not normally be accessible
     *  to the user.
     *
     *  An example on how to do this was found on the php manual
     *  http://php.net/manual/en/class.recursivedirectoryiterator.php
     */
    foreach( $paths as $path ) {
        $objects = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $path , FilesystemIterator::SKIP_DOTS | FilesystemIterator::KEY_AS_PATHNAME ) ,
												  RecursiveIteratorIterator::LEAVES_ONLY,
                                                  RecursiveIteratorIterator::SELF_FIRST ,
                                                  RecursiveIteratorIterator::CATCH_GET_CHILD ) ;
        //  Getting each Directory array element
        foreach($objects as $name => $object){
            //  Find if extension is in allowed list
            if ( extInArray( basename( $object ) , $include ) ) {
                //  Get relative directory file paths
                $link = explode( $A[ 'D_ROOT' ] , $name ) ;
                //  Generate source file links
                echo '
                <li><a ';
                if ( isset( $_GET[ 'file' ] ) &&
                     $_GET[ 'file' ] == $link[ 1 ] ) {
                        echo ' class="selected" ' ;
                }
                echo ' href="?file=' , urlencode( trim( $link[ 1 ] ) ) , '">' , trim( $link[ 1 ] ) , '</a></li>
                ';
            }
        }
    }
    //  End assignment link section
    echo '
                        </ul>
                    </nav>' ;


    if ( isset( $_GET[ 'file' ] ) ) {

        //  Generating the php source file div
        echo '<div class="source">' ;

        //  Check if the file path passed actually exists
        if ( file_exists( $A[ 'D_ROOT' ] . $_GET[ 'file' ] ) ) {
            //  Display source
            show_source( $A[ 'D_ROOT' ] . $_GET[ 'file' ] ) ;
        }
        // Error message if file was not found
        else echo 'ERROR - File could not be opened.' ;

        //  End php source file section
        echo '</div>' ;

    }

?>
