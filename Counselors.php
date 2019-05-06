<?php
class Counselors{

		function getCards($mysqli){

			$query = "SELECT * FROM counselors";
			
			$stmt = $mysqli->prepare($query);
			$stmt->execute();
			$result = $stmt->get_result();

			return $result;
		}


		function getDetails($mysqli, $user){
			$query = "SELECT * FROM counselors WHERE user = ?";
			
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param('s', $user);
			$stmt->execute();
			$result = $stmt->get_result();
			$row = $result->fetch_array();

			return $row;
		}

}


