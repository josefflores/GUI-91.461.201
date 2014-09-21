<?php
	$url = 'http://www.josefflores.com/' ;
	$opts = array( 
        'http' => array( 
            'method'=>"GET", 
            'header'=>"Content-Type: text/html; charset=utf-8; Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13" 
        ) 
    ); 

    $context = stream_context_create( $opts ); 
    $result = file_get_contents( $url , FALSE , $context ) ; 

	var_dump( $result ) ;
	
?>
