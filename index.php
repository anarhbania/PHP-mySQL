<html>
    <head>
        <title>Odczyt parametrow</title>
		<meta http-equiv="refresh" content="1">
    </head>
    <body>
		<?php
		$servername = "";
		$username = "";
		$password = "";
		$dbname = "";
		
		$connect = new mysqli($servername, $username, $password, $dbname);
		
		if ($connect->connect_error) 
		{
		die("Błąd połączenia: " . $connect->connect_error);
		}

		$sql = "SELECT rc100, rc101, rc102, ri100, ri101, ri102, hr100, hr101, hr102, ir100, ir101, ir102 FROM modbusdata";
		
		$result = $connect->query($sql);
		
		if ($result->num_rows > 0) 
		{
			echo '<table cellspacing="0" border="1" rules="rows" bordercolor="black">';
			echo '<tr>
					<td width="100px" bgcolor="gray" align="center">RC100:</td>
					<td width="100px" bgcolor="silver" align="center">RC101:</td>
					<td width="100px" bgcolor="gray" align="center">RC102:</td>
					<td width="100px" bgcolor="silver" align="center">RI100:</td>
					<td width="100px" bgcolor="gray" align="center">RI101:</td>
					<td width="100px" bgcolor="silver" align="center">RI102:</td>
					<td width="100px" bgcolor="gray" align="center">HR100:</td>
					<td width="100px" bgcolor="silver" align="center">HR101:</td>
					<td width="100px" bgcolor="gray" align="center">HR102:</td>
					<td width="100px" bgcolor="silver" align="center">IR100:</td>
					<td width="100px" bgcolor="gray" align="center">IR101:</td>
					<td width="100px" bgcolor="silver" align="center">IR102:</td>
				</tr>';
			while($row = $result->fetch_assoc()) 
			{
				echo '<tr>
						<td bgcolor="gray" align="center">' . $row["rc100"].'</td>
						<td bgcolor="silver" align="center">' . $row["rc101"]. '</td>
						<td bgcolor="gray" align="center">' . $row["rc102"].'</td>
						<td bgcolor="silver" align="center">' . $row["ri100"]. '</td>
						<td bgcolor="gray" align="center">' . $row["ri101"].'</td>
						<td bgcolor="silver" align="center">' . $row["ri102"]. '</td>
						<td bgcolor="gray" align="center">' . $row["hr100"].'</td>
						<td bgcolor="silver" align="center">' . $row["hr101"]. '</td>
						<td bgcolor="gray" align="center">' . $row["hr102"].'</td>
						<td bgcolor="silver" align="center">' . $row["ir100"]. '</td>
						<td bgcolor="gray" align="center">' . $row["ir101"].'</td>
						<td bgcolor="silver" align="center">' . $row["ir102"]. "</td>
					</tr>";
			}
			echo "</table>";
		} 
		else 
		{
			echo "Brak pomiarów!";
		}
		
		$connect->close();
		?>
		
		<b>Predkosc: 9600, parametry 8N1, ID:10, nr rejetrow: 100, 101, 102 (F1, F2, F3, F4)</b>
    </body>
</html>