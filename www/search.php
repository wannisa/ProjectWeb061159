<?php
header('Content-Type: application/json');

// mysql_connect("localhost","root","root");
mysql_connect("ap-cdbr-azure-southeast-b.cloudapp.net","b6b0b7800c86fb","3b13daae");
mysql_query("SET NAMES UTF8");
mysql_select_db("pawarisaclinic");

		$keyword = $_POST["key"];

		// User information
		$sql = "SELECT * FROM article WHERE title LIKE '%$keyword%' OR detail LIKE '%$keyword%'";
		$result = mysql_query($sql);
		$valCount = 0;
		if($result){
					while($row = mysql_fetch_array($result)){
						// $data[] = $row["PatientFirstname"].')='.$row["PatientLastname"];
						// $dataPic[] = "https://surasak.io/alz/uploads/".$row["PatientPicture"];
						$data[] = array(
							"title"=>$row['title'],
							"detail"=>$row['detail']
					    );
					}
						$json = array('count'  => count($data), 'data' => $data, 'sql'=>$sql);
				}
		print(json_encode($json));
		mysql_close();

?>