/**
 *  @file   assignment8.js
 *  @author Jose F. Flores <jose_flores@student.uml.edu>
 *
 *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
 *      freely copied or excerpted for educational purposes with credit
 *      to the author.
 *
 *  A UMass Lowell Computer Science Student 91.461 Assignment
 *
 *  This file holds the Multiplication table form processing class
 *
 *  11/24/14    Modified application class for assignment 8
 *  10/20/14    Generated application class for assignment 6
 */

/**
 *  @name   Application
 *
 *  This class holds the multiplication table generator. It processes
 *  and validates the inputs, then either displays warnings or the table
 */
function Application( target ) {

    //  VARIABLES

    //  Private
    var str_out ;          //  What to write to the target
    var tabCounter ;       //  Holds the number of generated tabs
    var tabTemplate ;      //  The template to use when generating tab titles
    var tabCheckBox ;      //  the template to use when generating closing check boxes

    //  Public
    this.target ;           //  The jQuery UI tab instance

    //  METHODS

    /**
     *  @name   constructor
     *
     *  This is the constructor function
     *
     *  @param  target  The jQuery UI tab instance
     */
    this.constructor = function( target ) {

        console.log( "Creating an instance of the application" ) ;

        //  Initial values
        this.target = target ;
        this.tabCounter = 0 ;

        this.tabTemplate = "<li><a class='my-ui-icon-close' id='#{linkId}' " ;
        this.tabTemplate += "href='#{href}'>#{label}<span class='ui-icon " ;
        this.tabTemplate += "ui-icon-close my-close-button' " ;
        this.tabTemplate += "role='presentation'>Remove Tab</span></a></li>" ;

        this.tabCheckBox = "<li><span class='input-line'><input id='close_#{linkId}' " ;
        this.tabCheckBox += "name='checkboxes' type='checkbox' " ;
        this.tabCheckBox += "value='#{linkId}'/><label class='append' " ;
        this.tabCheckBox += "for='close_#{linkId}'>Close multiplication " ;
        this.tabCheckBox += "table #{title}</label></span></li>" ;

        /**
         *  This makes sure the close form disappears on initial load as
         *  there are no tabs open initially
         */
        this.toggle() ;

        $( "#overlay" ).hide() ;
    } ;

    /**
     *  @name process
     *
     *  This method processes the multiplication table generating form
     */
    this.process = function( ){

        //  VARIABLES

        var int_num_1 , //  The first pair input 1
            int_num_2 , //  The first pair input 2
            int_num_3 , //  The second pair input 1
            int_num_4 , //  The second pair input 2
            int_i ,     //  A loop counter
            int_j ,     //  A loop counter
            int_tmp ,   //  The calculation holder
            range ,     //  The range of the values
            r ,
            tab ;       //  Holds the tab class

        //  Initialization
        this.str_out = "" ;

        //  Getting the string values and converting to integers
        int_num_1 = parseInt( $( "#num_1" ).val() ) ;
        int_num_2 = parseInt( $( "#num_2" ).val() ) ;
        int_num_3 = parseInt( $( "#num_3" ).val() ) ;
        int_num_4 = parseInt( $( "#num_4" ).val() ) ;

        //  ORDERING NUMBERS

        //  Checking to see if the first value in the pair is larger
        if ( int_num_1 > int_num_2 ) {

            int_num_1 = int_num_2 ;
            int_num_2 = $( "#num_1" ).val() ;

            console.log( "Inputs 1 and 2 were swapped" ) ;
        }

        //  Checking to see if the first value in the pair is larger
        if ( int_num_3 > int_num_4 ) {

            int_num_3 = int_num_4 ;
            int_num_4 = $( "#num_3" ).val() ;

            console.log( "Inputs 3 and 4 were swapped" ) ;
        }

        //  GENERATING TABLE

        //  starting table and adding blank first th cell
        this.str_out = '<div class="table"><table><tr><th></th>' ;

        //  Adding remaining th cells with values in first row
        for ( int_i = int_num_1 ; int_i <= int_num_2 ; ++int_i ) {
            this.str_out += ( '<th>' + int_i + '</th>' ) ;
        }

        this.str_out += '</tr>' ;

        //  generating multiplaction table rows
        for ( int_i = int_num_3 ; int_i <= int_num_4 ; ++int_i ) {

            //  Adding vertical multiplicand
            this.str_out += '<tr><th>' + int_i + '</th>' ;

            //  Calculating value cells
            for ( int_j = int_num_1 ; int_j <= int_num_2 ; ++int_j ) {

                //  Calculating result
                int_tmp = int_i * int_j ;

                //  Adding result cell
                this.str_out += '<td>' + int_tmp + '</td>' ;

                console.log( int_i + " * " + int_j + " = " + int_tmp  ) ;
            }

            //  Terminating row
            this.str_out += '</tr>' ;
        }

        //  Terminating table
        this.str_out += '</table></div>' ;

        //  DISPLAYING OUTPUT

        console.log( "Output to target" ) ;

        range = "[" + int_num_1 + ", " + int_num_2 + "] X [" + int_num_3 + ", " + int_num_4 + "]" ;

        //  Adding table header
        this.str_out = '<fieldset><legend>Multiplication table: ' + range + '</legend><div class="table-wrapper">' + this.str_out + '</div></fieldset>' ;

        //  Generating tab
        this.add( this.str_out , range ) ;

    } ;

    /**
     *  @name   addTab
     *
     *  This method adds a tab, generates its content and adds the tab
     *  to the close tab form.
     *
     *  @param  data
     *  @param  label
     */
    this.add = function( data , label ) {

        console.log( 'Making a new tab' );

        //  VARIABLES

        var checkListItem ,     //  Checkbox string
            partialId ,         //  Holds a partial Id name to tie in elements together
            navListItem ;       //  Holds the navigation tab string

        //  Generating partial id name
        partialId = "tabs-" + this.tabCounter ;

        //  Generating appended list items
        navListItem = $( this.tabTemplate.replace( /#\{linkId\}/g , "link-" + partialId ).replace( /#\{href\}/g , "#" + partialId ).replace( /#\{label\}/g , "T" + this.tabCounter + ":" + label ) ) ;
        checkListItem = $( this.tabCheckBox.replace( /#\{linkId\}/g , "link-" + partialId ).replace( /#\{title\}/g , "T" + this.tabCounter + ":" + label ) ) ;

        //  Attaching items

        //  Add new tab
        this.target.find( ".ui-tabs-nav" ).append( navListItem );
        //  Add tab content
        this.target.append( "<div id='" + partialId + "'>" + data + "</div>" ) ;
        //  Add check list item
        $( "#settings > fieldset > ul" ).append( checkListItem ) ;

        //  Refresh tabs
        this.target.tabs( "refresh" ) ;

        //  Set focus to newest tab created
        $( "#link-" + partialId ).trigger( 'click' ) ;

        //  Update the number of tabs created
        this.tabCounter++ ;

        //  Make sure to display the tab closing form
        this.toggle() ;

    } ;

    /**
     *  @name remove
     *
     *  This method removes a tab
     *
     *  @param  tabId  The tab id to close
     */
    this.remove = function( tabId ) {

        console.log( 'removing tab' ) ;

        //  VARIABLES

        var id ;    //  Element id, this id is a sub component to the
                    //  other ids that are associated with the tab

        /**
         *  Finding the tab li element that holds the target id, and removing
         *  attribute of aria controls to destroy the tab
         */
        id = $( tabId ).closest( "li" ).remove().attr( "aria-controls" ) ;
        //  Remove tab content
        $( "#" + id ).remove() ;
        //  Remove close form list item
        $( "#close_link-" + id ).closest( 'li' ).remove() ;

        //  Update tab changes
        this.target.tabs( "refresh" ) ;

        //  Make sure to display or hide the tab closing form
        this.toggle() ;

    } ;

    /**
     *  @name settings
     *
     *  This processes the tab settings/closing form
     */
    this.settings = function() {

        console.log( "Processing settings form" ) ;

        //  VARIABLES

        var data ,              //  The array of checkbox results
            instance ;          // Current instance to pass to for each

        //  initialization
        instance = this ;

        //  Constructing the array of results
        data = $( '#settings' ).serializeArray() ;

        //  Operating on each result
        data.forEach( function( obj ) {

            // removing the clicked tab
            instance.remove( '#' + obj.value ) ;

        }) ;

    } ;

    /**
     *  @name   toggle
     *
     *  This function hides or displays the tab closing form. It is
     *  displayed if tabs are present to be closed and hidden otherwise.
     */
    this.toggle = function() {

        //  Check if there are list items which hold check box items
        if ( $( '#closer > ul > li' ).length == 0 ){

            //  Empty list
            console.log( "Toggle - Hiding settings form" ) ;
            $( '#closer' ).css( 'display' , 'none' ) ;   //  hide

        } else {

            //  Non empty list
            console.log( "Toggle - Displaying settings form" ) ;
            $( '#closer' ).css( 'display' , 'block' ) ;  //  show

        }
    };

    //  Running constructor
    this.constructor( target );
} ;

