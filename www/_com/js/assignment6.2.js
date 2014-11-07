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

    // Functions

        /**
         *  @name   loadpage
         *
         *  This function loads the json file from the api and displays the content
         *
         *  @return 0   Success
         *  @return 1   Unknown error
         *  @return 2   File could not be loaded
         */
        var loadPage = function() {

            //VARIABLES
            var url ,   //  Holds the url to navigate to for the file
                data ,  //  The returned json data
                hash ,  //  The page that is being searched for
                load ,  //  The get json api location
                ret ;   //  The return value

            //  Setting for unknown response
            ret = 1 ;

            // Generating url to fetch
            load = webRoot + "_api/get/json/?file=" ;
            hash = window.location.hash ;
            hash = hash.substring( 1, hash.length ) ;

            // Checking if hash is empty and generating default page
            if ( hash === "" )
                hash = "page1" ;

            url = load + hash + ".json" ;

            console.log( hash ) ;
            console.log( url ) ;

            // Fetching file
            $.ajax({ url : url  ,
                    success : function( retrieved ){
                        data = retrieved ;
                        console.log( data ) ;
                    }
                })
                // Fail response
                .fail( function(){
                    $( "#content" ).html( "<div class='warning'>Could not load the content for " + hash + "</div>" ) ;

                    ret = 0 ;
                })
                // Success response
                .done( function(){
                    $( "#content" ).html( data.content ) ;

                    ret = 2 ;
                }) ;

            //  return statement
            return ret ;
        } ;

    //  Document ready function

        $( document ).ready( function(){

            // load for first page content
            loadPage() ;

            // load for requested page content
            $( window ).on( 'hashchange' , function() {
                loadPage() ;
            });

        });
