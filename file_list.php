<?php

require_once '../config/config.php';


$bucket_name = 'Files';

try {
 
    $objects = $s3->listObjects([
        'Bucket' => $Files,
    ]);

    if (count($objects['Contents']) > 0) {
        echo '<h1>File List</h1>';
        echo '<ul>';

        
        foreach ($objects['Contents'] as $object) {
            echo '<li>' . $object['Key'] . '</li>';
        }

        echo '</ul>';
    } else {
        echo '<h1>File List</h1>';
        echo '<p>No files found in the bucket.</p>';
    }
} catch (Exception $e) {
    echo '<h1>Error</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
}
?>

<?php include 'footer.php'; ?>
