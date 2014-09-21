<?php
	 /**
     *  @file   init.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A Umass Lowell Computer Science Student 91.461 
     *
     *  This file holds the php init script for the application
     *
     *  9/21/14 	Created init script
     */
     
    $root = '../json/roots.json' ;
	
	if ( is_file( $root ) ) {
		
		$tmp = file_get_contents( $root ) ;
		$A = json_decode( $tmp , true ) ;
		
		include( '../php/class/w3c_validator.php' ) ;
				//construct list containing links to crawl
				$root 			= array( $A[ 'W_ROOT' ] ) ;
				$out			= '../json/w3c_validation.json' ;
				$simpleHtmlDom 	= '../php/lib/simple_html_dom.php' ;
				
				if ( is_file( $out ) )
					unlink( $out ) ;
					
				$wv = new w3c_validator( $root , 
										 $simpleHtmlDom ) ;
				
				$wv->crawl() ;
				$wv->process() ;
				
				$fp = fopen( $out , 'w' ) ;
				fwrite( $fp , json_encode( $wv->report( ) ) ) ;
				fclose( $fp ) ;
		
    
			echo 'DONE' ;
	} 
	else {
		
		echo 'ERROR' ;
	}
	
?>
