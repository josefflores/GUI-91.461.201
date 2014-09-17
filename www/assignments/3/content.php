<?php
    /**
     *  @file   content.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A Umass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Your First Web Page
     *
     *  This file holds the content for the assignment 3. The assignment
     *  file has had its extension modified to work as a php file to
     *  allow for header redirects from unwanted access as well as to
     *  allow for dynamic includes as the css and image locations are not
     *  hardcoded as they originally were. This assignments purpose is to 
     * 	show knowledge of text styling with css, So I have created a quick 
     * 	tutorial on how to format text.
     *
     *  9/10/14 Modified html to work as php
     */

    //  Define guard prevents acces unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin
?>

<!DOCTYPE html> <!-- Document type declaration for HTML5-->

<!-- Start of html, language of document is english -->
<html lang="en">

    <head>

        <!-- Document is utf-8 -->
        <meta charset="utf-8">

        <!--
            File: index.html
            91.461 Assignment: Creating Your First Web Page
            Jose F. Flores, Umass Lowell Computer Science Student
                jose_flores@student.uml.edu
            Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
                freely copied or excerpted for educational purposes with credit
                to the author.

            updated by JFF on September 9, 2014 at 13:30
                Updated webpage comments
            updated by JFF on September 5, 2014 at 14:00
                Created Webpage
            updated by JFF on September 4, 2014 at 14:00
                Added header comment
        -->

        <!-- Setting the page title-->
        <title> GUI Programming I </title>

        <!-- Adding link to main css stylesheet file -->
        <link type="text/css" rel="stylesheet" href="<?php echo $A[ 'W_CSS' ] ; ?>main.css">

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
                        <h1 class="title">91.461 GUI Programming I</h1>

                        <!-- Subtitle description -->
                        <h2 class="title-sub">Fall 2014 Semester, Section 201</h2>

                    </div>

                    <!-- Navigation menu -->
                    <nav class="horizontal">
                        <ul>
                            <li><a href="<?php echo $A[ 'W_ROOT' ] ; echo '/assignments/3/' ; ?> "> Instructions </a></li>

                            <li><a href="<?php echo $A[ 'W_ROOT' ] ; echo '/assignments/3/work/' ; ?>"> Work </a></li>
                        </ul>
                    </nav>
                <!-- End header wrapper-->
                </div>

            <!-- End header -->
            </div>


            <!-- Begin content -->
            <div class="content">

				<img class="description" src="<?php echo $A[ 'W_IMG' ] ; ?>assignment.png" alt="assignment logo" >
				
				<div class="description" >
					<h3>Assignment 3</h3>
					<h4>Instructions</h4>
					
					<p>
						<a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2014-15f/461-assn/FirstCSS-v03.jsp">Assignment 3 Instructions - Styling Your First Web Page With CSS</a> 
					</p>
					
					<ul>  
						<li>Read up to page 68 in the textbook.</li>
						<li>Read chapter 6 of the textbook</li>
						<li>Did tutorial pages 178 - 188.</li>
						<li>Watched lesson 3 of Build Your First Website: Getting Started with HTML & CSS by Kevin Yank </li>
						<li>Watched Lessons 1 and 2 of Getting Started with CSS by Russ Weakley.  </li>
						<li>Redid the <a href="">assignment 2 page</a> as a central site. The website now contains an expanding about section, an assignment repository, and a php source file viewer. This website is written in PHP to generate HTML; the HTML output of PHP has been written to maintain its indentation structure but since PHP generates reusable components, some items indentation might not perfectly align if subsections are reused in differently indented locations.  I also took the assignemnt 2 page and updated its styling to match the overall website and then used it to generate a two page sub-website that explains assignment 3 and what I did on the Instructions page. For the work page I added a small tutorial to show HTML text formatting as a way to meet the assignments text styling criteria.</li>
                    </ul>
				
				</div>
                
            <!-- End content -->
            </div>

            <!-- Begin footer with page information-->
            <div class="footer">

                <!-- Wrapper to allow for centering -->
                <div class="footer-wrapper">

                    <!-- Copyright statement -->
                    <div class="copyright">
                        Copyright &copy; 2014 by Jose F. Flores. All rights reserved
                    </div>

                    <!-- Github link where versioning code is being stored -->
                    <div class="notice">
                        <a href="https://github.com/josefflores/GUI-91.461.201">Github Repository</a>
                    </div>

                <!-- End wrapper -->
                </div>

            <!-- End footer -->
            </div>

        <!-- End page wrapper -->
        </div>

    <!-- End of body -->
    </body>

<!-- End of HTML document -->
</html>
