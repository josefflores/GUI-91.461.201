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
                        <p> My name is Jose Flores, and I am a senior majoring in Computer Science. I consider myself a jack of all trades; I can program, draw, build, and whatever else I feel like trying. I have set up this page to show you my experience. </p>
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

                        <!-- Building Resume -->
                        <table>
                            ' ;

                        //  Get JSON resume
                        $json = $A[ 'D_JSON' ] . 'resume.json' ;
                        $json = json_decode( file_get_contents( $json ) , true ) ;

                        // Start building resume
                        echo '<!-- Employment history -->
                            <tr class="topic">
                                <td colspan="3"> Employment </td>
                            </tr>

                            ' ;

                        // Employment history
                        foreach( $json[ 'company' ] as $item ) {

                            echo '<tr class="title">
                                <td>' , $item[ 'employer' ] , '</td>
                                <td>' , $item[ 'location' ] , '</td>
                                <td>' , $item[ 'start' ] , ' - ' , $item[ 'end' ] , '</td>
                            </tr>

                            ' ;

                            foreach ( $item[ 'entry' ] as $line ) {

                                echo '<tr class="entry">
                                <td colspan="1">' , $line[ 'title' ] , '</td>
                                <td colspan="2">' , $line[ 'description' ] , '</td>
                            </tr>

                            ' ;
                            }

                        }

                        // Education history
                        echo '<!-- Education history -->
                            <tr class="topic">
                                <td colspan="3"> Education </td>
                            </tr>

                            ' ;

                        foreach( $json[ 'education' ] as $item ) {

                            echo '<tr class="title">
                                <td>' , $item[ 'institution' ] , '</td>
                                <td></td>
                                <td>' , $item[ 'graduation' ] , '</td>
                            </tr>

                            <tr class="entry">
                                <td>Major | Minor </td>
                                <td>' , $item[ 'major' ] , ' | ' ;

                            foreach ( $item[ 'minor' ] as $line )
                                echo $line , ' ' ;

                            echo '</td>
                                <td></td>
                            </tr>

                            ' ;

                            foreach ( $item[ 'organizations' ] as $line ) {
                                echo '<tr class="entry">
                                <td>' , $line[ 'name' ] , '</td>
                                <td>' , $line[ 'description' ] , '</td>
                                <td>' , $line[ 'start' ] , ' - ' , $line[ 'end' ] , '</td>
                            </tr>

                            ' ;
                            }
                        }

                        // Skill sets
                        echo '<!-- Skill section -->
                            <tr class="topic">
                                <td colspan="3"> Skills </td>
                            </tr>

                            ' ;

                        // Experienced level skills
                        echo '<tr class="entry">
                                <td colspan="1">Languages ( Experienced )</td>
                                <td colspan="2">' ;

                        $flag = false ;
                        foreach( $json[ 'languages' ][ 'major' ] as $item ) {
                            if ($flag ) echo ', ' ;
                            echo  $item  ;
                            $flag = true ;
                        }

                        echo '</td>
                            </tr>

                            ' ;

                        // Exposed level skills
                        echo '<tr class="entry">
                                <td colspan="1">Languages ( Exposed )</td>
                                <td colspan="2">' ;

                        $flag = false ;
                        foreach( $json[ 'languages' ][ 'minor' ] as $item ) {
                             if ($flag ) echo ', ' ;
                            echo  $item  ;
                            $flag = true ;
                        }
                        echo '</td>
                            </tr>

                            ' ;

                        //  Operating system skills
                        echo '<tr class="entry">
                                <td colspan="1">OS</td>
                                <td colspan="2">' ;

                        $flag = false ;
                        foreach( $json[ 'technologies' ][ 'os' ] as $item ) {
                            if ($flag ) echo ', ' ;
                            echo  $item  ;
                            $flag = true ;
                        }
                        echo '</td>
                            </tr>

                            ' ;

                        //  Software skills
                        echo '<tr class="entry">
                                <td colspan="1">Software</td>
                                <td colspan="2">' ;

                        $flag = false ;
                        foreach( $json[ 'technologies' ][ 'software' ] as $item ) {
                             if ($flag ) echo ', ' ;
                            echo  $item  ;
                            $flag = true ;
                        }
                        echo '</td>
                            </tr>

                            ' ;

                        //  Accolades
                        echo '<!-- Accolade Section -->
                            <tr class="topic">
                                <td colspan="3"> Accolades </td>
                            </tr>

                            ' ;

                        foreach( $json[ 'distinctions' ] as $item ) {
                            echo '<tr class="entry">
                                <td>' , $item[ 'title' ] , '</td>
                                <td>' , $item[ 'description' ] , '</td>
                                <td>' , $item[ 'date' ] , '</td>
                            </tr>

                            ' ;

                        }

                echo'
                        </table>
                    </div>
                    ';

?>
