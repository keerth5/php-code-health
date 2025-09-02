<?php
// =================== BAD EXAMPLES ===================

// Checking MIME type from client (spoofable)
if ($_FILES['upload']['type'] == 'image/jpeg') {
    echo "JPEG detected (insecure check)";
}

// Using 'type' directly
$fileType = $_FILES['file']['type'];
if ($fileType === 'application/pdf') {
    echo "PDF uploaded (insecure check)";
}

// =================== GOOD EXAMPLES ===================

// Proper validation using finfo
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES['upload']['tmp_name']);
if ($mime === 'image/jpeg') {
    echo "JPEG detected (secure check)";
}

// Using mime_content_type as alternative
$mime = mime_content_type($_FILES['file']['tmp_name']);
if ($mime === 'application/pdf') {
    echo "PDF uploaded (secure check)";
}
?>
