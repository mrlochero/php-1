<html>
<head>
	<title>Danh sách thành viên</title>
</head>

<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
	<tr style="background:#CCC">
		<th>Thứ tự</th>
		<th>Username</th>
		<th>Phone</th>
		<th>Email</th>
	</tr>
	<?php
	$i=1;
	echo '<pre>;';
	echo print_r($data);
	echo '</pre>';
	foreach($data as $row)
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row->username."</td>";
		echo "<td>".$row->phone."</td>";
		echo "<td>".$row->email."</td>";
		echo "</tr>";
		$i++;
	}
	?>
