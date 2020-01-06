<?php 
require "koneksi.php";
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_line.php');
require_once ('jpgraph/src/jpgraph_bar.php');
$query = "SELECT COUNT(b.id) as jml, k.nama_kategori from pemesanan b join kategori k on b.id_kategori = k.id_kategori GROUP BY k.nama_kategori";
$result = mysqli_query($db, $query);
$data = array();

while ($raw = mysqli_fetch_array($result)) {
	$data['jml'][]= $raw['jml'];
	$data['kat'][]= $raw['nama_kategori'];
}
$graph = new Graph(950,400);
$graph->SetScale('textlin');

$lineplot = new LinePlot($data['jml']);
$lineplot->SetColor('aqua');
$bplot = new BarPlot($data['jml']);

$graph->xaxis->SetTickLabels($data['kat']);
$graph->xaxis->SetLabelAngle(20);
// Add the plot to the graph
$bplot->SetFillColor('aqua');
$graph->Add($bplot);

// $graph->Add($lineplot);

// $graph->Add($bplot);
 
// Display the graph
$graph->Stroke();
echo "<img src= stats.php>";
 ?>
