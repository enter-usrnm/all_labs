<?php
  function can_upload($file){
    if($file['name'] == '')
		return 'Ви не вибрали файл!';

	if($file['size'] == 0)
		return 'Надто великий розмір файлу!';

	$getMime = explode('.', $file['name']);
	$mime = strtolower(end($getMime));
	$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');

	if(!in_array($mime, $types))
		return 'Недопустимий тип файлу!';
	
	return true;
  }
  
  function make_upload($file){
	$name = mt_rand(0, 10000) . $file['name'];
	$result = copy($file['tmp_name'], 'img/' . $name);
    return $result;
  }