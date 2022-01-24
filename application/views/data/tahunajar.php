<h3>Data Tahun Ajaran</h3>
<table id="data-tahunajar">
<thead>
	<tr>
		<th>No.</th>
		<th>ID Tahun Ajar</th>
		<th>Nama Tahun Ajar</th>
		<th>Tools</th>
	</tr>
</thead>
<tbody>
<?php
$i = 1;
foreach ($ref_tahunajar as $ta) {
	echo "<tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$ta['id_tahunajar']."</td>";
	echo "<td>".$ta['tahunajar']."</td>";
	echo "<td>".anchor('delete/'.$ta['id_tahunajar'],'Hapus')."|".
	anchor('edit/'.$ta['id_tahunajar'],'Edit')."</td>";
	echo "</tr>";
	$i++;
}
?>
</tbody>
</table>