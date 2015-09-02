<?
	if (isset($_POST['del'])){
		unlink("array.txt");
	}
	else {
	if ($_SERVER['REQUEST_METHOD']== "POST"){
		$file =fopen("array.txt", "a+");
		$myfile = "array.txt";
		$name = trim(strip_tags ($_POST['name']));
		$email = trim(strip_tags ($_POST['email']));
		$quest = trim(strip_tags ($_POST['quest']));
		$data = date ("H:i:s d-m-Y");
		$str = "$name $email $quest $data\n";
		file_put_contents ($myfile, $str, FILE_APPEND);
		fclose ($file);
		header('Location: try.php');
	}
	$file =fopen("array.txt", "a+");
	while ($mystr = fgets($file)){
	echo $mystr."<br>";}	}
?>
<h1>Гостевая книга на файле</h1>
<form action="<? $_SERVER['REQUEST_URI']?>" method='POST'>
	<p>Ваше имя <input type="text" autofocus required name="name"  value="<?=$name?>"></p>
	<p>Ваша почта <input type="email" required name="email" value="<?=$email?>"></p>
	<p>Ваш отзыв <input type="text" required name="quest" value="<?=$quest?>"></p>
	<p><input type="submit" value="Отправить отзыв">
</form>
<form action="<? $_SERVER['REQUEST_URI']?>" method='POST'>
	<input type="submit" value="Очистить отзывы" name="del"</p>
</form>
