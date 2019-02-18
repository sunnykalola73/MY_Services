<?php
    // Account details
    // Account details
	$apiKey = urlencode('Vrd9NZFXNP0-4cIdGLVNX0I496Nd08VyqFDffLFMjd');
 
	// Prepare data for POST request
	$data = 'apikey=' . $apiKey;
 
	// Send the GET request with cURL
	$ch = curl_init('https://api.textlocal.in/balance/?' . $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
    echo $response;
    
	
	
	// Message details
	$numbers = urlencode('7069499460');
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('This is your message');
 
	// Prepare data for POST request
	$data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
 
	// Send the GET request with cURL
	$ch = curl_init('https://api.textlocal.in/send/?' . $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	print("hh");
	// Process your response here
	echo $response;
?>