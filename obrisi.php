<?php
	require 'konekcija.php';
	$user_id = $_GET['user_id'];

	function removeItem($id, $conn)
	{
		global $conn;
		
		try {

			$stmt = $conn->prepare("DELETE FROM clan WHERE id = :user_id ");
			$stmt->bindParam(':user_id', $id);
			return $stmt->execute();

		} catch (Exception $e) {

		}
	}


	$removeStatus = removeItem($user_id);
	if($removeStatus){
		header("location: clanovi.php");
		exit;
	}