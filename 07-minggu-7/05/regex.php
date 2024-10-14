<?php

$pattern = '/[a-z]/';
$text = "This is a sample text";

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan";
} else {
    echo "Tidak ada huruf kecil!";
}

$two_br_html = "<br><br>";
echo $two_br_html;

$pattern = '/[0-9]+/';
$text = 'There are 123 apples';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok";
}

echo $two_br_html;

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;

echo $two_br_html;

$pattern = '/go*od/';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo $two_br_html;

$pattern = '/go?od/';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo $two_br_html;

$pattern = '/go{1,2}d/';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
