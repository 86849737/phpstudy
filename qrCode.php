<?php
require_once('vendor/autoload.php');

use Endroid\QrCode\QrCode;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Symfony\Component\HttpFoundation\Response;

$qrCode = new QrCode('https://www.github.com');
$qrCode->setSize(400);
$qrCode->setMargin(30);
//$qrCode->setBackgroundColor(['r' => 0, 'g' => 0, 'b' => 0]);
//$qrCode->setForegroundColor(['r' => 255, 'g' => 255, 'b' => 255]);

$qrCode->setLogoPath(__DIR__.'/shiba.jpg');
$qrCode->setLogoWidth(70);

//$qrCode->setValidateResult(true);
echo $qrCode->writeFile(__DIR__.'/qrcode.png');

# 输出二维码
header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
