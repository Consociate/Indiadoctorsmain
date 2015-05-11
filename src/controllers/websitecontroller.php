<?php
	include_once 'src/utility/dbutility.php';
	include_once 'src/entities/team.php';
	
	
	function showTeamMembers(){
		$connection = initDB();
		$query = "SELECT * FROM team_table WHERE status='1' ORDER BY orderonwebsite ASC";
		$result = mysql_query($query);
		$data = array();
		$entry = 0;
		while($row = mysql_fetch_array($result)){
			$ent = new Team();
			$ent->setDescription($row['description']);
			$ent->setName($row['name']);
			$ent->setOrderonwebsite($row['orderonwebsite']);
			$ent->setStatus($row['status']);
			$ent->setMemberid($row['memberid']);
			$ent->setImageurl($row['imageurl']);
			$data[$entry] = $ent;
			$entry++;
		}
		closeDB($connection);
		return $data;
	}
	
?>