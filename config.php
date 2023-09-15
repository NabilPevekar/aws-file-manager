<?php


if (!getenv('AWS_ACCESS_KEY_ID') || !getenv('AWS_SECRET_ACCESS_KEY')) {
    die('AWS credentials are not set. Please configure your environment.');
}


$aws_access_key_id = getenv('AWS_ACCESS_KEY_ID');
$aws_secret_access_key = getenv('AWS_SECRET_ACCESS_KEY');


$bucket_name = 'your-bucket-name';


$aws_region = 'your-region';


require 'vendor/autoload.php';


use Aws\S3\S3Client;

$s3 = new S3Client([
    'version' => 'latest',
    'region' => $aws_region,
    'credentials' => [
        'key'    => $aws_access_key_id,
        'secret' => $aws_secret_access_key,
    ],
]);

?>
