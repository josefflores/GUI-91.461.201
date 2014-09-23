<?php
    /**
     *  @file   content.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A UMass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Your First Web Page
     *
     *  This file holds the content for the home page.
     *
     *  9/10/14 Generated Page Template
     */

    //  Define guard prevents access unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin

    //  Describing page content
    echo '
                    <img class="description" src="' , $A[ 'W_IMG' ] ,  'home.png" alt="home logo" >
                    <div class="description" >
                        <h3>Home Page</h3>
                        <h4 class="info">The Project Home Page</h4>
                        <p> This page is the landing page to Jose Flores&apos;s GUI Programming I project website. It will be updated during the Fall 2014 and Spring 2015 semesters.</p>
                        <p>This is a PHP project, it was developed on an IIS server and versioning is stored in Github. the weblab server is updated by a Jenkins server which is listening to commits from Github through a webhook, once a commit is made Jenkins updated the weblab system by stashing and then pulling the project. Jenkins then runs a permissions setting script via SSH to set all file and directory to their appropriate permision levels. The Jenkins server then calls the websites restful api to initialize the system, at this point all pages are validated against the w3c validators. The application currently holds my resume, an assignment repository, a php source viewer, and a avalidation report of the crawled web page links.</p>
                        <p> A note to instructors; since this is a PHP project the HTML source indentation might not align properly this is not due to neglect or a usage of tabs, but rather a side effect of including PHP sub routines that dynamically generate code at multiple indentation points that are different. I have taken as much care as possible to prevent this from happening, but wanted to explain inconsistencies when you are viewing the source.</p>

                    </div>
                    ';

?>
