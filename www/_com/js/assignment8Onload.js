/**
 *  @file   assignment8Onload.js
 *  @author Jose F. Flores <jose_flores@student.uml.edu>
 *
 *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
 *      freely copied or excerpted for educational purposes with credit
 *      to the author.
 *
 *  A UMass Lowell Computer Science Student 91.461 Assignment
 *
 *  This file holds the assignment 8 onload function
 *
 *  11/24/14    Added assignment 8 content
 *  10/20/14    Added assignment 6 content
 */


/**
 *  document ready function
 */
$(document).ready( function() {


    //  Message object state images
    var state = {
        "error" : '<span class="img-alert"></span> ' ,
        "success" : '<span class="img-check"></span> '
    } ;

    //  State message templates for input types
    var template = {
        "error" : {
            "integer" : state.error + 'Please enter an integer.' ,
            "check" : state.error + 'Please check at least one box.'
        } ,
        "success" : {
            "integer" : state.success  ,
            "check" : state.success
        }
    } ;

    /**
     *  Creating an instance of the application class and instantiating
     *  the tabs.
     */
    var app = new Application( $( "#tabs" ).tabs({
        active: 0
    }) ) ;



    /**
     *  Adding on click functionality to close icon, to remove the tab
     */
    app.target.delegate( "span.ui-icon-close", "click", function(  ) {

        // removing the clicked tab
        app.remove( this ) ;

    })

    /**
     *  Form validation using the jQuery validate plugin
     *
     *  rules           The rules to follow for each input, these inputs are
     *                  mandatory and must be integers
     *  messages        The user described error messages
     *  submitHandler   The form submission handling function
     */
    $("#application").validate({

        //  The rules inputs should follow during validation
        rules: {
            "num_1": {
                "required": true ,  //  the field is required
                "digits": true      //  using digits to force integers
            },
            "num_2": {
                "required": true ,  //  the field is required
                "digits": true      //  using digits to force integers
            },
            "num_3": {
                "required": true ,  //  the field is required
                "digits": true      //  using digits to force integers
            },
            "num_4": {
                "required": true ,  //  the field is required
                "digits": true      //  using digits to force integers
            }
        },
        //  The messages to be given in case of error
        messages: {
            "num_1" : template.error.integer ,
            "num_2" : template.error.integer ,
            "num_3" : template.error.integer ,
            "num_4" : template.error.integer
        },
        //  Input entry success function
        success: function( label ){
            label.addClass( "valid" ).html( template.success.integer ) ;
        },
        //  The submit handler for the application form
        submitHandler: function( form ) {

            //  Execute the processing of the form
            app.process() ;

            // Prevent form submission
            return false ;
        }}
    )

    /**
     *  Form validation using the jQuery validate plugin
     *
     *  http://community.sitepoint.com/t/check-that-at-least-1-checkbox-is-checked-using-jquery-validate-plugin/22331/5
     *
     *  Used code in the above link as a base on how to get a minimum of
     *  one check box clicked. I had to change all checkboxes to have the
     *  same name. The OP did not figure out why just had something that
     *  worked.
     *
     *  rules           The rules to follow for each input, these inputs are
     *                  mandatory and must be integers
     *
     *  messages        The user described error messages
     *  submitHandler   The form submission handling function
     */
    $("#settings").validate({
        //  The rules inputs should follow during validation
        rules: {
            'checkboxes': {
                required: true
            }
        },
        //  The messages to be given in case of error
        messages: {
            'checkboxes': template.error.check
        },
        //  Input entry success function
        success: function(label) {
            console.log( label ) ;
            label
                .addClass( 'valid' ).html( template.success.check )
                .closest( '.control-group' ).addClass( "valid" ) ;
        },
        //  The submit handler for the settings form
        submitHandler: function( form ) {

            //  Execute the processing of the form
            app.settings() ;

            // Prevent form submission
            return false ;
        }}
    )

});
