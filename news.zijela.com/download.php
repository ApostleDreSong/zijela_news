<?php
    $filepath = "apk/BREAKING NEWS NIGERIA.apk";
    // Process download
    if(file_exists($filepath)) {
        header('Content-Description: BREAKING NEWS NIGERIA APP');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        exit;
	}else{
        exit;
	}