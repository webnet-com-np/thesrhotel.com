<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 12/3/2018
 * Time: 3:56 PM
 */
function encodeImg($path){
	//$path = 'myfolder/myimage.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	return 'data:image/' . $type . ';base64,' . base64_encode($data);
};