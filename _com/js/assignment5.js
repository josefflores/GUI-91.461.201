    /**
     *  @file   assignment5.js
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A UMass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Styling Your First Web Page With CSS
     *
     *  This file is the Javascript file for the assignment 5 page.
     *
     *  10/7/14 Generated js file
     */

    //  GLOBALS

        var scripts = document.getElementsByTagName("script") ; //  An array of loaded scripts
        var filepath = scripts[scripts.length-1];               //  The current script being called is the last script called
        var webRoot = filepath + '../../../../../' ;            //  Calculating the path of the web root

        var state = 0 ;         //  The state of a quote, used by formatter

    //  FUNCTIONS

        /**
         *  @name   placeContent
         *
         *  This function populates the element with the id of content with
         *  the selected text
         */
        function placeContent() {

            //  VARIABLES
             var i ,                //  Loop counter
                str ,          //  The string holding the literature piece
                pcol ,
                k ,
                z ,
                col ,
                remainder ,
                mod ;


            str = "" ;

            // Get column number
            col = $( "#column" ).val() ;

            if ( col > json[ 'paragraph' ].length ) {
                col = json[ 'paragraph' ].length ;
            }

            // Set css
            if ( col != 1  ) {
                $( ".wrapper").css( {"width" : 470 * col + "px"});
            }

            //  Generating literature heading and replacing apostrophes
            str += element( "literature-title" , json[ 'title' ] ) ;
            str += element( "literature-author" , json[ 'author' ] ) ;
            str += element( "literature-date" , json[ 'date' ] ) ;

            //  Generating literature content
             //  Generate parent element
            str += '<div class="literature" >' ;

            pcol = Math.floor( json[ 'paragraph' ].length / col )  ;
            remainder = json[ 'paragraph' ].length % col ;

            if( mod != 0 && remainder == 0 ) {
                mod = 0 ;
            } else {
                mod = 1 ;
            }

            console.log( pcol ) ;

            //  Generating literature content

            //  Looping through the array of paragraphs and the array of lines
            //  each paragraph holds

            // i is the counter of the paragraph k is the div and z is the paragraphs in div counter
            for (  i = 0 , k = 0 ; k < col && i < json[ 'paragraph' ].length ; ++k ) {


                str += '<div class="column">' ;

                for ( z = 0 ; z < pcol + mod && i < json[ 'paragraph' ].length ; ++i , ++z ) {

                    //  Generating a paragraph
                    str += '<p class="literature-verse">' ;

                    //  Generating each line
                    for ( j = 0 ; j < json[ 'paragraph' ][ i ].length ; ++j ) {

                        //  Processing each line to remove non HTML safe quotes
                        //  as well as to emphasize quotes
                        str += formatter( json[ 'paragraph' ][ i ][ j ] ) ;

                    }
                    //  Terminating a paragraph
                    str += '</p>' ;

                }


                if( mod != 0 && --remainder == 0 ) {
                    mod = 0 ;
                }

                //  terminating the float div
                str += '</div>' ;
            }

            //  terminating the literature section
            str += '</div>' ;

            //  adding generated string to HTML element with id of content
            $( "#content" ).html( str ) ;
        }

        /**
         *  @name   element
         *
         *  This function cleans non safe HTML quotes and generates a
         *  div of a given classes with a given value
         *
         *  @param  classes   The class to assign the div
         *  @param  value   The value of the content
         *
         *  @return string  The formatted element
         */
        function element( classes , value ) {
             return '<div class="' + classes + '">' +
                value.replace( /'/g , '&rsquo;' ) + '</div>' ;
        }

         /**
         *  @name   formatter
         *
         *  This function formats the lines by placing them in spans, it
         *  removes single and double quotes and replaces with their HTML
         *  safe variant as well as finds quoted text and emphasizes it
         *  within the spans. It relies on the state global variable to
         *  remember whether it is in a quote or not in between function
         *  calls.
         *
         *  @param  line    The string to be checked and formatted
         *
         *  @return ret     The formatted string.
         */
        function formatter( line ) {

            //  VARIABLES
            var i ;                             //  A loop counter
            var index ;                         //  Holds the current index of a double quote
            var lastindex = 0 ;                 //  Holds the last index of a double quote
            var ret = '<span class="line">' ;   //  The formatted return string

            //  Remove single quotes using a regex with the HTML safe right quote
            line = line.replace( /'/g , '&rsquo;' ) ;

            //  Emphasizing double quoted sections

            //  Check that there is no quote in the line
            if( line.indexOf( '"' , 0 ) == -1 ) {

                //  If the state is not in a quote
                if ( state == 0 ) {
                    ret += line ;
                }
                //  If the state is in a quote
                else if ( state == 1 ) {
                    ret += '<em>' + line + '</em>' ;
                }
            }
            //  If there is a quote in the line
            else {

                //  if in a quote continue quote
                if ( state == 1 )
                    ret += '<em>' ;

                //  Loop through all the instances of double quotes
                //  fetching new quotes until there are no more quotes
                for( index = line.indexOf( '"' , lastindex ) ;
                     index != -1 ;
                     index = line.indexOf( '"' , lastindex ) ) {

                    //  Add any text before the found quote
                    ret += line.substring( lastindex , index ) ;

                    //  Determine if the quote is an opening or closing quote
                    //  by current state

                    //  Opening quote because not in a quote
                    if ( state == 0 ) {
                        ret += '<em>&ldquo;' ;
                    }

                    //  Closing quote because in a quote
                    else {
                        ret += '&rdquo;</em>' ;
                    }

                    //  Swap states
                    state == 1 ? state = 0 : state = 1 ;

                    //  Increment lastindex to prevent looping and finding the
                    //  same quote again
                    lastindex = index + 1 ;
                }

                //  Add any remaining parts of the line to the string
                ret += line.substring( lastindex , line.length ) ;

                //  If in a quote end quote within span
                if ( state == 1 )
                    ret += '</em>' ;
            }

            //  Terminate the span
            ret += '</span>' ;

            //  Return the formatted string
            return ret ;

        }

    //  AFTER BODY LOAD

        $( document ).ready( function() {

            //  Extract content and place in HTML
            placeContent() ;

        } ) ;

    //  IMMEDIATE LOAD

        //  Retrieve the JSON document
        $.ajax( {
            async: false ,                  //  Wait to continue
            dataType: "json" ,              //  File type
            url: webRoot + "_api/get/json/?file=paulrevere.json" ,  //  URL to retrieve
            success: function( data ) {     //  Callback function
              json = data ;                 //  Store retrieved data in global variable
            }
        } ) ;

