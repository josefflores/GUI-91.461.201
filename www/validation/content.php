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
     *  This file holds the content for the about page.
     *
     *  9/10/14 Generated about content
     */

    //  Define guard prevents acces unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin
	
    //  Describing page content
    echo '
                    <img class="description" src="' , $A[ 'W_IMG' ] ,  'w3c.png" alt="w3c logo" >
                    <div class="description">
                        <h3>Validation</h3>
                        <h4 class="info">A php validator</h4>
                        <p> This page holds the results of a W3C validator script I generated to test all urls that lead to pages in the project during a server install; results have been stored in a json file to improve page delivery speed. The PHP script crawls my project for urls within the domain until it finds all interconnected pages within and landing links outside of the domain. It then validates testable pages against W3C validators for HTML5 and CSS3.</p>
                    </div>
                    
                    <!-- This section is a key to the report -->
					<div class="description">
						<h3>Validation Key</h3>
                        <h4 class="info">How to interpret the report</h4>
					    <ul class="list">
							<li>
								<div> <img alt="Failed test" src="' , $A[ 'W_IMG' ] , 'x.png"> </div>
								<div> Url is in the project and it did not pass validation.</div>
							</li>
							
							<li>
								<div> <img alt="Passed test" src="' , $A[ 'W_IMG' ] , 'check.png"> </div>
								<div> Url is in the project and it passed validation.</div>
							</li>
														
							<li>
								<div> <img alt="Was not tested" src="' , $A[ 'W_IMG' ] , 'skip.png"> </div>
								<div> Url is not in the project or is not a testable url.</div>
							</li>
						</ul>
					</div>
					
					<!-- This section is the results to the report -->
					<div class="description">	
						<h3>Validation Report</h3>
                        <h4 class="info">Validator results</h4>
                        
                        <ol class="list">
							' ;
                        
                        $json_src = $A[ 'D_JSON' ] . 'w3c_validation.json' ;
                   if( is_file( $json_src ) ) {
                        $json = json_decode( file_get_contents( $json_src ) , true ) ;
                        
                        $icon = 'x' ;
                        foreach( $json as $item ) {
							if ( $item[ 'STATE' ] == 'FALSE' ) {
								echo '<li>
								<div><a href="' , $item[ 'TEST' ] , '"><img alt="Failed test" src="' , $A[ 'W_IMG' ] , $icon , '.png"></a></div>
								<div><a href="' , $item[ 'LINK' ] , '">' , $item[ 'LINK' ] , '</a></div>
							</li>
							' ;
							}
						}
						
						$icon = 'check' ;
						foreach( $json as $item ) {
							if ( $item[ 'STATE' ] == 'TRUE' ) {
								echo '<li>
								<div><a href="' , $item[ 'TEST' ] , '"><img alt="Passed test" src="' , $A[ 'W_IMG' ] , $icon , '.png"></a></div>
								<div><a href="' , $item[ 'LINK' ] , '">' , $item[ 'LINK' ] , '</a></div>
							</li>
							' ;
							}
						}
						
						$icon = 'skip' ;
						foreach( $json as $item ) {
							if ( $item[ 'STATE' ] == 'SKIP' ) {
								echo '<li>
								<div><a href="' , $item[ 'TEST' ] , '"><img alt="Was not tested" src="' , $A[ 'W_IMG' ] , $icon , '.png"></a></div>
								<div><a href="' , $item[ 'LINK' ] , '">' , $item[ 'LINK' ] , '</a></div>
							</li>
							' ;
							}
						}
					} else {
						echo '<li>Validator was not run</li>' ;
					}
					
                        echo '
						</ol>
                     
                    </div>
				';

?>
