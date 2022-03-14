<?php
$url='https://vnexpress.net/rss/thoi-su.rss';
$lines_array=file($url);
$lines_string=implode('',$lines_array);

$xml = simplexml_load_string($lines_string);
if ($xml === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
}

$url_so_hoa='https://vnexpress.net/rss/so-hoa.rss';
$lines_array_so_hoa=file($url_so_hoa);
$lines_string_so_hoa=implode('',$lines_array_so_hoa);

$xml_so_hoa = simplexml_load_string($lines_string_so_hoa);
if ($xml_so_hoa === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
}


$url_the_thao='https://vnexpress.net/rss/the-thao.rss';
$lines_array_the_thao=file($url_the_thao);
$lines_string_the_thao=implode('',$lines_array_the_thao);

$xml_the_thao = simplexml_load_string($lines_string_the_thao);
if ($xml_the_thao === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
}

$url_giai_tri='https://vnexpress.net/rss/giai-tri.rss';
$lines_array_giai_tri=file($url_giai_tri);
$lines_string_giai_tri=implode('',$lines_array_giai_tri);

$xml_giai_tri = simplexml_load_string($lines_string_giai_tri);
if ($xml_giai_tri === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
}

$url_du_lich='https://vnexpress.net/rss/du-lich.rss';
$lines_array_du_lich=file($url_du_lich);
$lines_string_du_lich=implode('',$lines_array_du_lich);

$xml_du_lich = simplexml_load_string($lines_string_du_lich);
if ($xml_du_lich === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
}


$url_cuoi='https://vnexpress.net/rss/cuoi.rss';
$lines_array_cuoi=file($url_cuoi);
$lines_string_cuoi=implode('',$lines_array_cuoi);

$xml_cuoi = simplexml_load_string($lines_string_cuoi);
if ($xml_cuoi === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
}
?>