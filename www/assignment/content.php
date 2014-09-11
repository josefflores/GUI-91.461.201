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
     *  This file holds the content for the assignment directory listing
     *  page.
     *
     *  9/10/14 Generated content page
     */

    //  Define guard prevents acces unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin

    //  Determining which paths to itterate through
    $paths = array( realpath( '.' ) ) ;

    //  Determine which files to show
    $include = 'index.php' ;

    //  Describing page content
    echo '
                    <!-- Page description -->
                    <img class="description" src="' , $A[ 'W_IMG' ] ,  'assignment.png" alt="Web technologies logo." >
                    <div class="description">
                        <h3>Assignments</h3>
                        <h4>An assignment archive</h4>
                        <p>This is an assignment archive of my GUI Programming I assignments that have been completed. The assignments were developed using PHP, HTML5, CSS3, JS and jQuery. They are listed as links in the left pane. When clicked, will reload a bookmarkable page with an iframe containing the assignment.</p>
                    </div>
    ';

    //  Generate the assignment links
    echo '
                    <!-- Vertical navigation links -->
                    <nav class="vertical">
                        <ul>
                    ' ;

    /**
     *  For each assignment directory Iterate throught the files and
     *  directories to retrieve assignments, only include the index.php
     *  files as they are the only accesible files to the user. To view
     *  other files use the php source link.
     *
     *  An example on how to do this was found on the php manual
     *  http://php.net/manual/en/class.recursivedirectoryiterator.php
     */
    foreach( $paths as $path ) {
        //  Recursive Iterator
        $objects = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $path ) ,
                                                  RecursiveIteratorIterator::SELF_FIRST ) ;
        //  Getting each Directory array element
        foreach( $objects as $name => $object ) {
            //  Compare filenames
            if ( basename( $object ) == $include ) {
                //  Remove Root path to make link relative and shorter
                $link = explode( $A[ 'D_ROOT' ] , $name ) ;
                //  Get assignment number from directory structure
                $sect = explode( '\\' , $link[ 1 ] ) ;
                //  Verify that assignment number is a number and not
                //  the indexer
                if ( is_numeric( $sect[ 2 ] ) ) {
                    // Make link
                    echo '      <li><a ';
                    if ( isset( $_GET[ 'file' ] ) &&
                         $_GET[ 'file' ] == $link[ 1 ] ) {
                            echo ' class="selected" ' ;
                    }
                    echo 'href="/?file=' , urlencode( trim( $link[ 1 ] ) ) ,
                         '"> Assignment ' , $sect[ 2 ] , '</a></li>
                         ';
                }
            }
        }
    }
    //  End assignment link section
    echo '
                        </ul>
                    </nav>' ;

    if ( isset( $_GET[ 'file' ] ) ) {

        //  Generating the assignment iframe
        echo '
        <!-- Source content being displayed -->
        <div class="source">' ;

        //  Check if the file path passed actually exists
        if ( file_exists( $A[ 'D_ROOT' ] . $_GET[ 'file' ] ) ) {
            //  Break apart path
            $www = explode( 'www' , $_GET[ 'file' ] ) ;
            // Generate assignment link
            echo '<iframe src="' ,  $A[ 'W_ROOT' ] , $www[ 1 ] , '"></iframe>' ;
        }

        //  End iframe section
        echo '</div>' ;

    }

?>
