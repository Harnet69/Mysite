<?
if(isset ($_COOKIE['war'])){
	$war = $_COOKIE['war'];
	echo $war;
}
else{
if (!isset ($_COOKIE['myvar'])){
	$var = "1";
	setcookie("myvar", $var++);
	echo "Вы у нас спервые";
}
else {
	$var = (int) abs($_COOKIE['myvar']);
	$var++;
		if ($var<=10){
	setcookie("myvar", $var);
		echo "Вы посетили эту страницу ".$var." раз(а)";
		}
		else {
			setcookie("war", "Вы исчерпали лимит подключений!");
			header ('Location : '.$_SERVER['REQUEST_URI']);
		}
}}
?>
