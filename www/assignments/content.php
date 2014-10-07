<?php
    /**
     *  @file   content.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A UMass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Your First Web Page
     *
     *  This file holds the content for the assignment directory listing
     *  page.
     *
     *  10/7/14 Fixed highlighting
     *  9/10/14 Generated content page
     */

    //  Define guard prevents access unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin

    //  Determining which paths to iterate through
    $paths = array( realpath( '.' ) ) ;

    //  Determine which files to show
    $include = 'index.php' ;

    //  Describing page content
    echo '
                    <!-- Page description -->
                    <img class="description" src="' , $A[ 'W_IMG' ] ,  'assignment.png" alt="Web technologies logo." >
                    <div class="description">
                        <h3>Assignments</h3>
                        <h4 class="info">An assignment archive</h4>
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
     *  For each assignment directory Iterate through the files and
     *  directories to retrieve assignments, only include the index.php
     *  files as they are the only accessible files to the user. To view
     *  other files use the PHP source link.
     *
     *  An example on how to do this was found on the PHP manual
     *  http://php.net/manual/en/class.recursivedirectoryiterator.php
     */

    // Sets up the urlencode so it only happens once not every iteration
    if ( isset( $_GET[ 'file' ] ) )
        $file = urlencode( $_GET[ 'file' ] ) ;
    else
        $file = false ;

    foreach( $paths as $path ) {
        //  Recursive Iterator
        $dir = scandir( $path ) ;

        //  Getting each Directory array element
        foreach( $dir as $item ) {
            //  Compare filenames
            if ( is_numeric( $item ) ) {
                    $url = urlencode( trim( 'www' . $A['D_SLASH' ] . 'assignments' . $A['W_SLASH' ] . $item . $A['W_SLASH' ] ) ) ;
                    // Make link
                    echo '      <li><a ';
                    if ( $file &&
                          $file == $url )  {
                            echo ' class="selected" ' ;
                    }
                    echo 'href="?file=' , urlencode( trim( 'www' . $A['D_SLASH' ] . 'assignments' . $A['W_SLASH' ] . $item . $A['W_SLASH' ] ) ) ,
                         '"> Assignment ' , $item , '</a></li>
                         ';

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
            $www = explode( 'www'.$A[ 'D_SLASH' ] , $_GET[ 'file' ] ) ;
            // Generate assignment link
            echo '<iframe src="' ,  $A[ 'W_ROOT' ] , $www[ 1 ] , '"></iframe>' ;
        }

        //  End iframe section
        echo '</div>' ;

    }

?>
