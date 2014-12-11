/**
 *  @file   assignment9.js
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
 *  12/05/14    Modified application class for assignment 9
 *  11/24/14    Modified application class for assignment 8
 *  10/20/14    Generated application class for assignment 6
 */

//  Creating the application module
var assignmentNineApp = angular.module( 'assignmentNineApp' , [] ) ;

/**
 *  Creating the tableCtrl controller
 *
 *  Passing $scope  For the application scope
 *          $http   For http get request
 *          $sce    For injecting html
 */
assignmentNineApp.controller( 'tableCtrl', [ '$scope' , '$http' , '$sce', function( $scope , $http , $sce ) {

    /**
     *  @name   searchFilter
     *
     *  This is a filter that fixes a searching bug I had because I was
     *  storing all the IMDB data results. During searching this would
     *  cause unknown columns to also be searched and return false
     *  positives.
     *
     *  This filter reduces search range to the visible columns of the
     *  table.
     *
     *  It was modified from a solution found on stack overflow
     *
     *  http://stackoverflow.com/questions/13814283/angularjs-filter-only-on-certain-objects
     *
     *  @param  obj     The object to be searched
     *
     *  @return true    The object matches
     *  @return false   The object does not match
     */
    $scope.searchFilter = function ( obj ) {

        //  VARIABLES
        var re ;    //  Holds the regular expression to search with

        //Initialization
        re = new RegExp( $scope.query , 'i' ) ; // a regular expression

        //  Returning true only when found in the Title, Year, Runtime,
        //  or Rated columns and there was something to search for
        return  !$scope.query ||
                re.test(obj.Title) ||
                re.test(obj.Year) ||
                re.test(obj.Runtime) ||
                re.test(obj.Rated) ;
    };

    /**
     *  @name   setErrorState
     *
     *  This function sets the errorState variable which tells the message
     *  function what message state the application is in. The states are
     *  as follows (Letter: State)
     *
     *      V: Verbose  Show all messages
     *      E: Error    Show only errors
     *      N: None     Show no messages
     *
     *  @param  state   The state to place reporting in
     */
    $scope.setErrorState = function( state ) {

        //  Error checking
        if ( state === undefined ||
             state === null ||
             !( state == 'E' ||
                state == 'V' ) ) {
            state = 'N' ;
        }

        //  Initialization
        $scope.errorState = state ; //  The error message state
    } ;

    /**
     *  @name   message
     *
     *  This is an error reporting function, I generated it because there
     *  were too many messages being created by long list which was making
     *  it hard to debug.
     *
     *  This function works in conjunction with the value
     *
     *      $scope.errorState = 'V'
     *
     *  Which can equal the Letter: State
     *
     *      V: Verbose  Show all messages
     *      E: Error    Show only errors
     *      N: None     Show no messages
     *
     *  @param  condition   What type of message it is
     *                      V: Verbose
     *                      E: Error
     *
     *  @param  msg         The action being reported
     *  @param extra        Any values or extra content to report
     */
    $scope.message = function( condition , msg , extra ) {

        //  VARIABLES
        var str ;

        //  No messages
        if( $scope.errorState == 'N' )
            return ;

        //  Generate extra content if available
        if ( extra === undefined ||
             extra === null ||
             extra == '' ) {
            extra = '' ;
        } else {
            extra = '{ ' + extra + ' }' ;
        }

        //  Generate message string
        str = condition + '[ ' + msg + ' ]' ;

        //  Display appropriate message during the right condition
        if ( $scope.errorState == 'V' ||    //  When verbose always
             $scope.errorState == 'E' &&    //  Whenn error only
             $scope.errorState == condition ) {
            console.log( str + extra ) ;
        }

    } ;

    /**
     *  @name   containsObject
     *
     *  This function was found on
     *
     *  http://stackoverflow.com/questions/23210652/check-if-object-is-in-angularjs-array-that-is-in-localstorage
     *
     *  It is used to determine if the object is already within a list,
     *  I use it to determine if an entry is already being displayed
     */
    $scope.containsObject = function( obj , list ) {

        //  VARIABLES
        var i ;  //  Iterator

        //  Looping through the list
        for ( i = 0 ; i < list.length ; i++ ) {

            //  Determine if the list at index is the same as the object
            if ( angular.equals( list[i] , obj ) ) {

                //  Match found
                return true ;

            }

        }

        //  No match found
        return false ;

    } ;

    /**
     *  @name   addUserMovie
     *
     *  This function retrieves the user input
     *      movieTitle
     *      movieYear
     *  and requests information from the imdb api helper
     *  function (getImdb) and then appends the retrieved data
     *  to the filmList if the movie was found for a view
     *  update.
     */
    $scope.addUserMovie = function( ) {

        //  VARIABLES
        var obj ;   //  Initial object to generate query

        //  Initializing as an array of an object
        obj = new Array( new Object() ) ;

        //  Clearing --ERROR if any
        $scope.duplicate = false ;

        /**
         *  Setting field value from form so that an imdb
         *  search can be performed.
         */
        obj[ 0 ][ 'title' ] = $scope.movieTitle ;

        //  Check if year has a value or is empty
        if ( $scope.movieYear ){

            //  Setting year value
            obj[ 0 ][ 'year' ]  = $scope.startYear + $scope.movieYear ;

            //  Retrieving Imdb information, year matters
            $scope.getImdb( obj , true ) ;

        } else {

            //  Retrieving Imdb information, year irrelevant
            $scope.getImdb( obj , false ) ;

        }

    } ;

    /**
     *  @name   append
     *
     *  This function adds an object to the filmList
     *
     *  @param  obj     the object to insert into the list
     */
    $scope.append = function( obj ) {

        /**
         *  Logic to determine if film was found and therefore
         *  should be added to list.
         */
        if ( obj ) {

            //  Film was found
            $scope.message( 'V' , 'Adding film.' , obj.Title ) ;

            //  Adding to filmlist
            $scope.filmList.push( obj ) ;

        } else {

            //  Film was not found
            $scope.message( 'E' , 'Film was not added.' ) ;

        }

    } ;

    /**
     *  @name   getImdb
     *
     *  This is the imdb api helper function. For an object
     *  array it searches for films with numerical years and
     *  matchable titles to those in the imdb database.
     *
     *  The function then gathers selected informtion,
     *  currently: imdbId , Title , Year , Runtime , Rated;
     *  and then stores a link to the imdb page and basic
     *  information that will be used in filmlist table
     *  generation.
     *
     *  @param  obj     An array of objects in the form of
     *
     *                  [{ title:filmTitle , year:number } ,
     *                  ... }]
     *
     *                  Where filmTitle is a string containing
     *                  the title of the movie to search for,
     *                  and number is a numerical representation
     *                  of the year the film was released.
     *                  The year is necessary when searching to
     *                  prevent title conflict due to popularity.
     *
     *  @retrieveYear   Boolean, an optional true /false flag
     *                  to require the given year when searching
     *                  IMDB.
     *
     *  @return obj     An array of objects in the form of
     *
     *                  [{  title:Title ,
     *                      year:Year ,
     *                      runtime:Runtime ,
     *                      rating:Rated ,
     *                      imdbID:url } , ... }]
     *
     *                  Where the values are the imdb retrieved
     *                  values. Title is a string containing
     *                  the title of the movie, Year is a number
     *                  representing the release year, Runtime
     *                  is a string representing the movie length,
     *                  Rated is a string containing the rating
     *                  of the film, and imdbID is an html string
     *                  that contains the title and a link to the
     *                  imdb film page.
     */
    $scope.getImdb = function ( obj , retrieveYear ) {

        //   VARIABLES
        var api ,           //  IMDB Api url
            url ,           //  IMDB image link and film titleto
            urlComplete ;   //  Complete api call

        //  INITIALIZE
        api = 'http://www.imdbapi.com/' ;

        //  DEFAULT
        //  Determining if the year needs to be used
        typeof retrieveYear == 'undefined' ?
                            retrieveYear = false : true ;
        $scope.message( 'V' , 'Forcing Year.' , retrieveYear ) ;


        //  For each loop to traverse the obj of unknown size
        angular.forEach( obj , function( value , key ) {

            //  Set up imdb api url
            if ( retrieveYear ) {

                //  Year is needed to match
                urlComplete = api + '?i=&t=' + value.title + '&y=' + value.year ;

            } else {

                //  Year is not required for a match
                urlComplete = api + '?i=&t=' + value.title ;

            }
            $scope.message( 'V' , 'Api url.' , urlComplete ) ;

            //  Perform request
            $http.get( urlComplete  )

                //  Wait for retrieval
                .success( function( data ) {

                    if ( data[ 'Response' ] == 'False' ) {

                        //  No Imdb data found removing non imdb element
                        $scope.message( 'E' , 'IMDB Api response' , 'No match for ' + value.title + ' (' + value.year + ') ' ) ;

                    } else {

                        //  Generate imdbId html, a link to the imdb page with film title
                        url = '<a href="//www.imdb.com/title/' + data[ 'imdbID' ] + '" target="_blank">' ;
                        url += '<img src="../_com/img/imdb.png" class="imdb"/></a>' + data[ 'Title' ] ;

                        //  Store html for ng-repeat propogation
                        data[ 'imdbID' ] = $sce.trustAsHtml( url ) ;

                        //  This shows what was inputted and what IMDB returns, not always the same film
                        if ( value.title != data[ 'Title' ] ||
                             value.year != data[ 'Year' ] ) {
                                $scope.message( 'E' , 'Conversion.' , value.title + ' => ' + data[ 'Title' ]  + '::' + value.year + ' => ' + data[ 'Year' ] ) ;
                        }

                        if( $scope.containsObject( data , $scope.filmList ) ) {

                            //  Setting --ERROR
                            $scope.duplicate = true ;
                            $scope.message( 'E' , 'Duplicate entry.' , $scope.duplicate ) ;

                        }
                        //  Callback is registered for appending, and item is unique
                        else {

                            //  Add when found
                            $scope.append( data );

                        }
                    }
                })
                .error( function(){
                    //  No Imdb data found removing non imdb element
                    $scope.message( 'E' , 'IMDB Api response' , 'None' ) ;

                });

        } , obj ) ;

    } ;

    /**
     *  @name   getJson
     *
     *  This function gets the starter json and uses that data to
     *  kick off the imdb data fetching.
     */
    $scope.getJson = function ( ){

        //  Initialize the filmList as an array
        $scope.filmList = new Array() ;

        //  Retrieve the data file
        $http.get( 'disney.json' )
            //  When the file is retrieved
            .success( function( data ) {

                $scope.message( 'V' , 'Retrieved Original JSON' , 'None' ) ;

                //  Process the data file to retrieve imdb information
                $scope.getImdb( data , false ) ;

            }) ;
    } ;

    /**
     *  @name   getYears
     *
     *  This function generates the list that the select element
     *  is populated with. The list has a Not applicable element
     *  and is a reverse order year list from today until 1900.
     */
    $scope.getYears = function( ){

        //  VARIABLES
        var i ,
            thisYear ,
            startYear ,
            key ;

        //  Initialize $scope variables
        $scope.startYear = 1900 ;
        $scope.years = new Array() ;

        //  Getting current year
        thisYear = new Date().getFullYear() ;
        $scope.message( 'V' , 'Current Year' , thisYear ) ;

        //  Creating not applicable element as first entry
        $scope.years[ 0 ] = { 'value': 0  , 'label': 'NA'  } ;

        //  Reverse add the year elements to the list
        for ( i = thisYear - $scope.startYear ; i > 0 ; --i ) {

            //  1900 => 2014

            //  2014 - 1900 = 114
            //  114 + 1 = 115
            //  115 - i = 0 => 114

            //  1900 + i = 1901 => 2014
            $scope.years[ ( thisYear - $scope.startYear ) + 1 - i ] = { 'value': i  , 'label': $scope.startYear + i  } ;
        }

        $scope.message( 'V' , 'Calculated select years' ) ;

        //  Setting the select field to display as default
        $scope.movieYear = 0 ;

    } ;

}]) ;
