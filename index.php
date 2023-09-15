<?php
require 'vendor/autoload.php'; // Load the AWS SDK

use Aws\S3\S3Client;

// AWS S3 Configuration
$bucketName = 'main_page';
$accessKey = 'your-access-key';
$secretKey = 'your-secret-key';

$s3 = new S3Client([
    'region' => 'us-east-1',
    'version' => 'latest',
    'credentials' => [
        'key' => $accessKey,
        'secret' => $secretKey,
    ],
]);

// List all objects in the S3 bucket
$objects = $s3->listObjects([
    'Bucket' => $bucketName,
]);

// Display the list of objects
foreach ($objects['Contents'] as $object) {
    echo "Object Key: {$object['Key']}<br>";
}

// Upload a file to S3
$fileContent = 'This is the content of your file.';
$fileName = 'example.txt';

$s3->putObject([
    'Bucket' => $bucketName,
    'Key' => $fileName,
    'Body' => $fileContent,
]);

echo "<br>File uploaded successfully: $fileName";
?>
