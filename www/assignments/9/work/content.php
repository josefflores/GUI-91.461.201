<?php
    /**
     *  @file   content.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A UMass Lowell Computer Science Student 91.461 Assignment
     *
     *  This file holds the content for the assignment 9. The assignment
     *  file has had its extension modified to work as a PHP file to
     *  allow for header redirects from unwanted access as well as to
     *  allow for dynamic includes as the css and image locations are not
     *  hard coded as they originally were.
     *
     *  11/24/14    Added assignment 9 content
     *  9/10/14     Modified HTML to work as PHP
     */

    //  Define guard prevents access unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

?>

<!DOCTYPE html><!-- Document type declaration for HTML5-->

<!-- Start of HTML, language of document is English -->
<html lang="en" ng-app="assignmentNineApp">

    <head>
        <!-- Document is utf-8 -->
        <meta charset="utf-8">

        <!--
            File: content.html
            91.461 Assignment: 6
            Jose F. Flores, UMass Lowell Computer Science Student
                jose_flores@student.uml.edu
            Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
                freely copied or excerpted for educational purposes with credit
                to the author.

            updated by JFF on 11/24/14
                Created web page comments, added form and external links

        -->

        <!-- Setting the page title-->
        <title>GUI - Assignment 9</title>

        <!-- Include Angular.js -->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>

        <!-- Including the main stylesheet -->
        <link rel="stylesheet" type="text/css"  href="<?php echo $A[ 'W_COM' ] ; ?>css/main.css" >

        <script type="text/javascript" >

            var assignmentNineApp = angular.module( 'assignmentNineApp' , [] ) ;

            assignmentNineApp.controller( 'tableCtrl', [ '$scope' , '$http' , function( $scope , $http ) {

                $http.get( 'http://josefflores.com/gui/_api/get/json/?file=disney.json' )
                    .success( function( data ) {

                        $scope.filmList = data ;
                        $scope.apply ;

                        var i = 0 ;

                        angular.forEach( $scope.filmList , function( value , key ) {

                            $http.get( 'http://www.imdbapi.com/?i=&t=' + value.title )
                                .then( function(result) {

                                    $scope.filmList[ i ][ 'Poster' ] = 'error.png' ;

                                    if ( typeof value.year == 'number' ) {
                                        $scope.filmList[ i ][ 'Poster' ] = result[ 'data' ][ 'Poster' ] ;
                                    }

                                    console.log( value.title ) ;
                                    console.log( $scope.filmList[ i ][ 'Poster' ] ) ;
                                    i++ ;
                                });

                        } , $scope.filmList ) ;

                        console.log( $scope.filmList ) ;
                        $scope.apply ;

                    });

            }]);


        </script>

    </head>

    <body>

         <!--
            Begin page wrapper, the wrapper will allow for future
            positional modifications in page layout such as centering.
        -->
        <div class="wrapper">

            <!-- Start header -->
            <div class="header">

                <!--
                    Begin wrapper, this wrapper allows for the whole
                    header to be positioned as an item while maintaining
                    a full header bar.
                -->
                <div class="title-wrapper">

                    <!-- logo -->
                    <img class="logo" src="<?php echo $A[ 'W_IMG' ] ; ?>mouse.png" alt="Page Logo">

                    <div class="header-right" >

                        <!-- Title of the page -->
                        <h1 class="title">
                            91.461 GUI Programming I
                        </h1>

                        <!-- Subtitle description -->
                        <h2 class="title-sub">
                            Fall 2014 Semester, Section 201
                        </h2>

                    </div>

                    <!-- Navigation menu -->
                    <nav class="horizontal">

                        <ul>

                            <li>
                                <a href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/9/' ; ?>">
                                    Instructions
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/9/work/'; ?>">
                                    Work
                                </a>
                            </li>

                        </ul>

                    </nav>
                <!-- End header wrapper-->
                </div>

            <!-- End header -->
            </div>

            <!-- Begin content -->
            <div class="content">

                <img class="description" src="<?php echo $A[ 'W_IMG' ] ; ?>assignment.png" alt="assignment logo" >

                <div class="description">

                    <input ng-model="query" type="text"/>

                    <table ng-controller="tableCtrl">

                        <thead>
                            <tr>
                                <!--
                                    https://docs.angularjs.org/api/ng/filter/orderBy

                                    sorter choses the column to sort by , reverse =! reverse flips the ordering of the array
                                    This works in conjunction with orderBy:sorter:reverse
                                -->
                                <th>Poster</th>
                                <th><a href="" ng-click="sorter='title'; reverse=!reverse ">title</a></th>
                                <th><a href="" ng-click="sorter='year'; reverse=!reverse">year</a></th>
                                <th><a href="" ng-click="sorter='length'; reverse=!reverse">length</a></th>
                                <th><a href="" ng-click="sorter='rating'; reverse=!reverse">rating</a></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr ng-repeat="film in filmList | filter:query | orderBy:sorter:reverse">
                                <td><img src="{{film.Poster}}" style="width:50px;" alt="{{film.title}}"/></th>
                                <td>{{film.title}}</td>
                                <td>{{film.year}}</td>
                                <td>{{film.length}}</td>
                                <td>{{film.rating}}</td>
                            </tr>
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </body>

</html>

