/**
 *  @file   assignment6Onload.js
 *  @author Jose F. Flores <jose_flores@student.uml.edu>
 *
 *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
 *      freely copied or excerpted for educational purposes with credit
 *      to the author.
 *
 *  A UMass Lowell Computer Science Student 91.461 Assignment
 *
 *  This file holds the assignment 6 onload function
 *
 *  10/20/14    Added assignment 6 content
 */

/**
 *  document ready function
 */
$(document).ready( function() {

    //  The submit handler for the application form
    $( "#application" ).submit( function( ) {

        // Create an instance of the application class
        var app = new Application( "#table" ) ;

        //  Execute the processing of the form
        app.process() ;

        // Prevent form submission
        return false ;
    } ) ;

} ) ;
