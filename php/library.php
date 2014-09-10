<?php
    /**
     *  @file   library.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A Umass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Your First Web Page
     *
     *  This file holds the php user generated function library. This
     *  file may expand or shrink depending if other functions are added,
     *  or wethere they are consolidated into classes.
     *
     *  9/10/14 Added function extInArray
     */

    /**
     *  @name extInArray
     *
     *  This function checks to see if the files extension is in the
     *  array of extensions.
     *
     *  @param  $file   The filename
     *  @param  $arr    The array of file extensions no periods
     *
     *  @return true    extension matched
     *  @return false   extension not found
     */
    function extInArray( $file , $arr ) {

        // Break filename by periods
        $ext = explode( '.' , $file ) ;

        // Compare each array entry
        foreach( $arr as $item ) {

            //  Look at last period delimeted section of filename
            if ( $ext[ count( $ext ) - 1 ] == $item ) {
                // Match found
                return true;
            }
        }
        //  No match found
        return false;
    }

?>
