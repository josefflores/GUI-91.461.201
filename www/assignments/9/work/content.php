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

<!DOCTYPE   html><!-- Document type declaration for HTML5-->

<!-- Start of HTML, language of document is English -->
<html   lang="en"
        data-ng-app="assignmentNineApp">

    <head>

        <!-- Document is utf-8 -->
        <meta   charset="utf-8">

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

        <!-- Include Assignment library -->
        <script src="<?php echo $A[ 'W_JS' ] ; ?>assignment9.js"></script>

        <!-- Including the main stylesheet -->
        <link   href="<?php echo $A[ 'W_CSS' ] ; ?>main.css"
                rel="stylesheet"
                type="text/css">

        <!-- Include Assignment stylesheet -->
        <link   href="<?php echo $A[ 'W_CSS' ] ; ?>assignment9.css"
                rel="stylesheet"
                type="text/css">

    </head>

    <body>

         <!--
            Begin page wrapper, the wrapper will allow for future
            positional modifications in page layout such as centering.
        -->
        <div    class="wrapper">

            <!-- Start header -->
            <div    class="header">

                <!--
                    Begin wrapper, this wrapper allows for the whole
                    header to be positioned as an item while maintaining
                    a full header bar.
                -->
                <div    class="title-wrapper">

                    <!-- logo -->
                    <img    alt="Page Logo"
                            class="logo"
                            src="<?php echo $A[ 'W_IMG' ] ; ?>mouse.png" />

                    <div    class="header-right" >

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
                    <nav    class="horizontal">

                        <ul>

                            <li>
                                <a  href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/9/' ; ?>">
                                    Instructions
                                </a>
                            </li>

                            <li>
                                <a  href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/9/work/'; ?>">
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
            <div    class="content"
                    data-ng-init="setErrorState('V');getJson();getYears()"
                    data-ng-controller="tableCtrl">

                <img    alt="assignment logo"
                        class="description"
                        src="<?php echo $A[ 'W_IMG' ] ; ?>assignment.png" >

                <div    class="description">

                    <h3>
                        Angular JS Application
                    </h3>

                    <h4 class="info">
                        An IMDB movie table generator
                    </h4>

                    <p>
                        This page holds an angular.js application. It uses a preformed json file of films and their corresponding years to perform an IMDB database lookup for remaining information. The application allows users to add films to the table, as well as to search for specific entries.
                    </p>

                </div>

                <div    class="description">

                    <form   id="addMovie"
                            name="addMovie"
                            data-ng-submit="addUserMovie()">

                        <fieldset>

                            <legend>
                                Search for a film in the table
                            </legend>

                            <span   class="input-line">
                                Type in the box to narrow the table contents to rows that contain the text in the field.
                            </span>

                            <span   class="input-line">

                                <input  data-ng-model="query"
                                        type="text" />

                            </span>

                        </fieldset>

                        <fieldset>

                            <legend>
                                Add a film to the table
                            </legend>

                            <span   class="input-line">
                                Enter a film title in the text input below. Optionally select a film release year. Click on the button. The application will then query the IMDB Api for the film, the Api will return the most popular term match to the film title entered. If the film retrieved has already been added to the table a notification will appear and the application will not add the entry to the table.
                            </span>

                            <span   class="input-line">

                                <input  id="movieTitle"
                                        name="movieTitle"
                                        data-ng-model="movieTitle"
                                        required
                                        type="text" />

                                <select data-ng-options="year.value as year.label for year in years"
                                        id="movieYear"
                                        name="movieYear"
                                        data-ng-model="movieYear"></select>

                            </span>

                            <span   class="input-line">

                                <input  id="submit"
                                        data-ng-model="movieSubmit"
                                        type="submit"
                                        value="Add"/>

                                <span   class="error"
                                        data-ng-show="movieTitle.$error.required">
                                </span>

                                <span   class="my-error"
                                        data-ng-if="duplicate">
                                    The film is in the table.
                                </span>

                            </span>

                        </fieldset>

                    </form>

                    <fieldset>

                        <legend>
                            Sort the table
                        </legend>

                        <span   class="input-line">
                            To sort the table by column value click on the corresponding table headers. The first click will sort the table consecutive clicks will reverse the ordering of the table.
                        </span>

                    </fieldset>

                    <table>

                        <thead>

                            <tr>
                                <!--
                                    https://docs.angularjs.org/api/ng/filter/orderBy

                                    sorter choses the column to sort by ,
                                    reverse =! reverse flips the ordering of the array
                                    This works in conjunction with orderBy:sorter:reverse
                                -->
                                <th>

                                    <a  href=""
                                        data-ng-click="sorter='Title'; reverse=!reverse">
                                        title
                                    </a>

                                </th>

                                <th>

                                    <a  href=""
                                        data-ng-click="sorter='Year'; reverse=!reverse">
                                        year
                                    </a>

                                </th>

                                <th>

                                    <a  href=""
                                        data-ng-click="sorter='Runtime'; reverse=!reverse">
                                        ledata-ngth
                                    </a>

                                </th>

                                <th>

                                    <a  href=""
                                        data-ng-click="sorter='Rated'; reverse=!reverse">
                                        rating
                                    </a>

                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr data-ng-repeat="film in filmList | filter:searchFilter | orderBy:sorter:reverse">

                                <td data-ng-bind-html="film.imdbID"></td>

                                <td>
                                    {{film.Year}}
                                </td>

                                <td>
                                    {{film.Runtime}}
                                </td>

                                <td>
                                    {{film.Rated}}
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </body>

</html>

