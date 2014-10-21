/**
 *  @file   assignment6.js
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
 *  10/20/14    Generated application class
 */

/**
 *  @name   Application
 *
 *  This class holds the multiplication table generator. It processes
 *  and validates the inputs, then either displays warnings or the table
 *
 *  @param target   The target to place the table or error messages in
 */
function Application( target ) {

    //  VARIABLES

    var str_divTarget = target ;    // Target element
    var str_out ;                   // What to write to the target

    //  METHODS

    /**
     *  @name getInteger
     *
     *  This method gets an integer from the form, If a float is
     *  entered it rounds the value down.
     *
     *  @param  str_id      The id of the input to retrieve
     *
     *  @return int         The integer that was resolved
     */
    this.getInteger = function( str_id ) {

        /**
         *  This takes the string value found in the id and converts it
         *  to a number then uses the math function floor to round the
         *  number down to the closest integer value
         */

        return Math.floor( Number( $( "#" + str_id ).val() ) ) ;

    } ;

    /**
     *  @name validate
     *
     *  This method checks to see if the string that the element holds
     *  qualifies as a number and if so removes any warnings from it,
     *  If it is not a number it adds warnings.
     *
     *  Allows for numbers in hex, octal, and decimal forms
     *
     *  @param  str_id      The id to validate
     *  @param  str_class   The class to add if warnings are to be issued
     *
     *  @return true        The string is a number
     *  @return false       The string is not a number
     */
    this.validate = function( str_id , str_class ) {

        //  VARIABLES
        var str_val ;       //  This string holds the value of the input

        //  Retrieve the value of the input
        str_val = $( "#" + str_id ).val() ;

        /**
         *  Make sure the value is not blank or the string translates
         *  to a number
         */
        if ( str_val == "" ||
             !$.isNumeric( str_val ) ) {

            //  Issue warning if the value does not equate to a number
            $( "#" + str_id ).addClass( str_class ) ;

            //  Return that the value was not a number

            //  Add to error message
            this.str_out = '<p class="invalid">Invalid entry for ' + str_id  + '</p>' ;
            $( "#" + str_id + "_error" ).html( this.str_out ) ;
            
            return false ;

        }

        /**
         *  Remove any warnings that were issued to the element containing
         *  The now verified number
         */
        $( "#" + str_id ).removeClass( str_class ) ;

        //  Return that the value is a number
        return true ;
    } ;

    /**
     *  @name process
     *
     *  This method processes the form
     *
     *  @return 0   Success, Multiplication table has been displayed
     *  @return 1   Validation did not pass
     */
    this.process = function(){

        //  VARIABLES

        var int_num_1 , //  The first pair input 1
            int_num_2 , //  The first pair input 2
            int_num_3 , //  The second pair input 1
            int_num_4 , //  The second pair input 2
            int_i ,     //  A loop counter
            int_j ,     //  A loop counter
            bool_tmp ,  //  A validation flag status holder
            int_tmp ;   //  The calculation holder

        //  INPUT VALIDATION

        //  Set no errors found
        this.str_out = "" ;
        bool_tmp = false ;

        // Validate input num_1
        if ( !this.validate( "num_1" , "invalid" ) ) {
            //  Error found
            bool_tmp = true ;
        }

        // Validate input num_2
        if ( !this.validate( "num_2" , "invalid" ) ) {
            //  Error found
            bool_tmp = true ;
        }

        // Validate input num_3
        if ( !this.validate( "num_3" , "invalid" ) ) {
            //  Error found
            bool_tmp = true ;
        }

        // Validate input num_4
        if ( !this.validate( "num_4" , "invalid" ) ) {
            //  Error found
            bool_tmp = true ;
        }

        // Check validation results
        if ( bool_tmp ) {
            console.log( "ERROR - Inputs not valid" ) ;
            return 1 ;
        }

        //  CONVERTING VALUES TO NUMBERS

        int_num_1 = this.getInteger( "num_1" ) ;
        int_num_2 = this.getInteger( "num_2" ) ;
        int_num_3 = this.getInteger( "num_3" ) ;
        int_num_4 = this.getInteger( "num_4" ) ;


        //  ORDERING NUMBERS

        //  Checking to see if the first value in the pair is larger
        if ( int_num_1 > int_num_2 ) {

            //  performing swap
            int_tmp = int_num_1 ;
            int_num_1 = int_num_2 ;
            int_num_2 = int_tmp ;

            console.log( "Inputs 1 and 2 were swapped" ) ;
        }

        //  Checking to see if the first value in the pair is larger
        if ( int_num_3 > int_num_4 ) {

            //  performing swap
            int_tmp = int_num_3 ;
            int_num_3 = int_num_4 ;
            int_num_4 = int_tmp ;

            console.log( "Inputs 3 and 4 were swapped" ) ;
        }

        //  GENERATING TABLE

        //  starting table and adding blank first th cell
        this.str_out = '<table><tr><th></th>' ;

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
        this.str_out += '</table>' ;

        //  DISPLAYING OUTPUT

        console.log( "Output to target" ) ;

        $( str_divTarget ).html( this.str_out ) ;

        return 0 ;
    } ;

} ;
