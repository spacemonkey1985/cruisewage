<?php 

	$options = array(CURLOPT_RETURNTRANSFER => true,     // return web page       
					 CURLOPT_HEADER         => false,    // don't return headers        
					 CURLOPT_FOLLOWLOCATION => true,     // follow redirects        
					 CURLOPT_ENCODING       => "",       // handle all encodings        
					 CURLOPT_USERAGENT      => "spider", // who am i        
					 CURLOPT_AUTOREFERER    => true,     // set referer on redirect        
					 CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect        
					 CURLOPT_TIMEOUT        => 120,      // timeout on response        
					 CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects  
					 CURLOPT_SSL_VERIFYPEER => false
					 );    
	$ch      = curl_init( "https://www.gcen.co.uk/currtablelive.php" );    
	curl_setopt_array( $ch, $options );    
	$content = curl_exec( $ch );    
	$err     = curl_errno( $ch );    
	$errmsg  = curl_error( $ch );    
	$header  = curl_getinfo( $ch );    
	curl_close( $ch );    
	$header['errno']   = $err;    
	$header['errmsg']  = $errmsg;    
	$header['content'] = $content;    
	
	$conversions = parseTable($header['content']);
	//print_r($conversions);
	
	function parseTable($html){
		$store = false;
		$conversion = '';
		$count = 0; 
		
		// Find the table
		preg_match("/<table.*?>.*?<\/[\s]*table>/s", $html, $table_html);
		
		// Get title for each row
		preg_match_all("/<th.*?>(.*?)<\/[\s]*th>/", $table_html[0], $matches);
		$row_headers = $matches[1];
	 
	 	// Iterate each row
	  	preg_match_all("/<tr.*?>(.*?)<\/[\s]*tr>/s", $table_html[0], $matches);
	 
	  	$table = array();
	 
	  	foreach($matches[1] as $row_html){
			preg_match_all("/<td.*?>(.*?)<\/[\s]*td>/", $row_html, $td_matches);
			$row = array();
			for($i=0; $i<count($td_matches[1]); $i++){
		  		$td = strip_tags(html_entity_decode($td_matches[1][$i]));
		  		if($store){
					$table[$count][0] = $conversion;
					$table[$count][1] = $td;
					$store = false;
					$count = $count + 1;
				}
				if($td=='GBP-EUR' || $td=='GBP-USD' || $td=='EUR-USD'){
					$store = true;
					$conversion = $td;
				}
			}
	  	}
		
		$table[$count][0] = 'EUR-GBP';
		$table[$count][1] = round(1 / $table[0][1], 4);
		$count = $count + 1;
		
		$table[$count][0] = 'USD-GBP';
		$table[$count][1] = round(1 / $table[1][1], 4);
		$count = $count + 1;
		
		$table[$count][0] = 'USD-EUR';
		$table[$count][1] = round(1 / $table[2][1], 4);
		$count = $count + 1;
		
	  	return $table;
	}
?> 