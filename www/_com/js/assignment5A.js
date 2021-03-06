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
            var i ;                 //  Loop counter
            var str = "" ;          //  The string holding the literature piece

            //  Generate parent element
            str = '<div class="literature" >' ;

            //  Generating literature heading and replacing apostrophes
            str += '<div class="literature-title">' +
                json[ 'title' ].replace( /'/g , '&rsquo;' ) + '</div>' ;

            str += '<div class="literature-author">' +
                json[ 'author' ].replace( /'/g , '&rsquo;' ) + '</div>' ;

            str += '<div class="literature-date">' +
                json[ 'date' ].replace( /'/g , '&rsquo;' ) + '</div>' ;

            //  Generating literature content

            //  Looping through the array of paragraphs and the array of lines
            //  each paragraph holds
            for ( i = 0 ; i < json[ 'paragraph' ].length ; ++i ) {

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

            //  terminating the literature section
            str += '</div>' ;

            //  adding generated string to HTML element with id of content
            $( "#content" ).html( str ) ;
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
