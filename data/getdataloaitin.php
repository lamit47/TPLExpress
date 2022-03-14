<?php

	if($_GET['loaitin']) {
		$url='https://vnexpress.net/rss/'.$_GET['loaitin'].'.rss';
		$lines_array=file($url);
		$lines_string=implode('',$lines_array);

		$xml = simplexml_load_string($lines_string);
		if ($xml === false) {
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

	}
?>