<?
	function Menuu ($v){// Функция вывода меню. Горизонтальное - "1", вертикальное - любой символ
		echo "<ul>";
		global $menu;
		foreach ($menu as $item ){
				if ($v == 1){
					echo "<li style='list-style:none; display:inline; margin-left:10px;'>";
					echo "<a style='color:white' href='".$item['href']."'>".$item['link']."</a>";
				}
				else{
			echo "<li style='list-style:none'>";
				echo "<a style='color:red' href='".$item['href']."'>".$item['link']."</a>";}
				echo "</li>";
		}
	echo "</ul>";}
?>
	