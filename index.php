
<?php
	// We add the library to generate qr codes
	require "phpqrcode/qrlib.php";    
	
	// We stablish a temporal directory to save images
	$dir = 'temp/';
	
	//If there's no directory, we create it
	if (!file_exists($dir))
        mkdir($dir);
	
    // We declare the path we it will save the qr code
	$filename = $dir.'test.png';
 
    // Here we stablish the settings
	
	// Pixel's size
	$tamanyo = 10;
	// Low Precission 
	$level = 'L'; 
	// Size in white
	$framSize = 3; 
	// text
	$contenido = "http://codigosdeprogramacion.com";
	
    // we send the parameters to the qr function
	QRcode::png($contenido, $filename, $level, $tamanyo, $framSize); 
	
    // we show the generated image
	echo '<img src="'.$dir.basename($filename).'" /><hr/>';  
?>