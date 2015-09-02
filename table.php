<?
	class Table {
	static function Calc ($cols=5, $rows=5, $color="green"){
echo "<table style='border:1px solid black'>";
	for ($tr=1;$tr<=$cols;$tr++){
		echo "<tr>";
		for ($td=1;$td<=$rows;$td++){
			if($tr==1 or $td ==1){
			echo "<th style='background:$color'>".$tr*$td."<th>";
			}
			else{
			echo "<td>".$tr*$td."<td>";
			}
		}	
		echo "</tr>";
	}
	echo "</table>";}
	}
	if ($_SERVER['REQUEST_METHOD']== "POST"){
		$rows = (int) abs ($_POST['rows']);
		$cols = (int) abs ($_POST['cols']);
		$color = trim (strip_tags($_POST['color']));
		Table::Calc($rows,$cols,$color);
	}
	else{
		Table::Calc();
	}
?>
<form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
	<p>Кол-во строк <input type="text" required name="rows" value="<?=$rows?>"></p>
	<p>Кол-во столбцов <input type="text" required name="cols" value="<?=$cols?>"></p>
	<p>Цвет <input type="text" name="color" value="<?=$color?>"></p>
	<p><input type="submit" value="Сформировать"></p>	
</form>

