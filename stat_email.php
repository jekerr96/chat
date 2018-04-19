
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Expires" content="-1">
	<title>Статистика</title>
	<meta charset="UTF-8">
	
</head>
<body>
	<?php
	unlink("images/$gsFilename_Traffic");
	try { 
  	include("pChart2.1.4/class/pDraw.class.php");
	include("pChart2.1.4/class/pImage.class.php");
	include("pChart2.1.4/class/pData.class.php");
} catch (Exception $e) { 
  echo 'не фига не получилось'; 
} 
	
$myData = new pData();

include 'include/db_connect.php';
$result = mysqli_query($link, "SELECT COUNT(*) as count, CAST(date_open AS DATE) as visit_date FROM email GROUP BY CAST(visit_date AS DATE)");
while( $row = mysqli_fetch_assoc($result) ){ 
            $myData->addPoints($row['count'], "Открытия");
			$myData->addPoints($row['visit_date'], "Labels");
    } 
$unique = "g"; //date("Y.m.d_H.i");
$gsFilename_Traffic = "traffic_".$unique.".png";

$myData->setSerieDescription("Labels","Days");
$myData->setAbscissa("Labels");
$myData->setAxisUnit(0,"");

$serieSettings = array("R"=>229,"G"=>11,"B"=>11,"Alpha"=>100);
$myData->setPalette("Отрытия",$serieSettings);

$myPicture = new pImage(1250,400,$myData); // <-- Размер холста
$myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/calibri.ttf","FontSize"=>8));
$myPicture->setGraphArea(50,20,1230,380); // <-- Размещение графика на холсте
$myPicture->drawScale();
$myPicture->drawBestFit(array("Alpha"=>40)); // <-- Прямая статистики

$myPicture->drawLineChart();
$myPicture->drawPlotChart(array("DisplayValues"=>TRUE,"PlotBorder"=>TRUE,"BorderSize"=>0,"Surrounding"=>-60,"BorderAlpha"=>50)); // <-- Точки на графике
$myPicture->drawLegend(700,10,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL));// <-- Размещение легенды
$myPicture->Render("images/".$gsFilename_Traffic);
?>
<br /><h3>Открытия</h3>
<br /><IMG SRC="images/
<?php echo $gsFilename_Traffic; ?>
" />

</body>
</html>