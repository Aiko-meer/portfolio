<?php
$file = @{{asset('image/CURRICULUM VITAE.pdf')}};
$filename = 'CURRICULUM VITAE.pdf';

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Length: ' . filesize($file)); // Add this line
header('Accept-Ranges: bytes');

@readfile($file);
?>
