<?
include ('data.php');
include ('function.php');
//
?>
<table style="background:yellow; width:800px">
	<tr><td colspan=2; style="height:150px; background:blue; width:100%; text-align:center"><h1><a href="index.php">Главная</a></h1><? Menuu(1);?></td></tr>
	<tr>
	<td style="width:200px; text-align:left"><h2>Меню</h2><? Menuu(0);?></td>
	<td style="width:600px; text-align:left"><h2>Контент</h2>
	<?
		switch($_GET['id']){
			case 1 : include('page1.php');break;
			case 2 : include('page2.php');break;
			case 3 : include('page3.php');break;
			case 4 : include('table.php');break;
			case 5 : include('quest.php');break;
			default : echo "<p>Разнообразный и богатый опыт постоянный количественный рост и сфера нашей активности позволяет выполнять важные задания по разработке дальнейших направлений развития. С другой стороны начало повседневной работы по формированию позиции позволяет оценить значение модели развития. Значимость этих проблем настолько очевидна, что постоянный количественный рост и сфера нашей активности играет важную роль в формировании форм развития. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности требуют определения и уточнения новых предложений. Значимость этих проблем настолько очевидна, что рамки и место обучения кадров позволяет выполнять важные задания по разработке направлений прогрессивного развития. </p>


<h1>Основная ветка изменена и работает и продолжает свою работу</h1>
<p>Переход на новую ветку. С другой стороны сложившаяся структура организации представляет собой интересный эксперимент проверки систем массового участия. С другой стороны укрепление и развитие структуры способствует подготовки и реализации направлений прогрессивного развития. Идейные соображения высшего порядка, а также постоянный количественный рост и сфера нашей активности позволяет выполнять важные задания по разработке систем массового участия. С другой стороны консультация с широким активом в значительной степени обуславливает создание существенных финансовых и административных условий. Значимость этих проблем настолько очевидна, что постоянный количественный рост и сфера нашей активности позволяет выполнять важные задания по разработке форм развития. Задача организации, в особенности же сложившаяся структура организации играет важную роль в формировании форм развития. </p>
<p>Разнообразный и богатый опыт консультация с широким активом играет важную роль в формировании существенных финансовых и административных условий. Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности требуют от нас анализа форм развития.</p> 
";
		}
	?>
	</td>
	</tr>
	<tr><td colspan=2; style="height:100px; background:green; text-align:center"><h3>Подвал</h3></td></tr>
</table>