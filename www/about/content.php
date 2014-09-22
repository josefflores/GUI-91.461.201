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
     *  This file holds the content for the about page.
     *
     *  9/10/14 Generated about content
     */

    //  Define guard prevents access unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin

     //  Describing page content
    echo '
                    <img class="description" src="' , $A[ 'W_IMG' ] ,  'me.jpg" alt="Picture of Jose Flores" >
                    <div class="description">
                        <h3>About Me</h3>
                        <h4 class="info">Jose F. Flores</h4>
                        <p> My name is Jose Flores, and I am a senior majoring in Computer Science. I consider myself a jack of all trades; I can program, draw, build, and whatever else I feel like trying. I have set up this page as my GUI Programming I assignment repository, to showcase what I have completed in the course sequence. </p>
                    </div>
                    <div class="description">
                        <h3>Past Work</h3>
                        <h4 class="info">Websites</h4>
                        <p> These are some examples of websites I have made in the past. It is an incomplete list but shows a little of what I am capable of. </p>
                        <ul>
                            <li> <a href="http://www.astuml.org">www.astuml.org</a></li>
                            <li> <a href="http://www.josefflores.com">www.josefflores.com</a></li>
                            <!-- li> <a href="http://csr.cs.uml.edu">csr.cs.uml.edu</a></li -->
                        </ul>
                    </div>
                    <div class="description">
                        <h3>Resume</h3>
                        <h4 class="info">My Experience</h4>
                        <iframe class="google" src="http://docs.google.com/viewer?url=' , urlencode( $A[ 'W_ROOT' ] . '_api/get/pdf/?file=jose_flores_resume.pdf' ) , '&embedded=true"></iframe>
                    </div>
                    ';

?>
