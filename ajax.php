<?php
include("../chat_system.php");
if( isset($_REQUEST['action']) ){
	switch( $_REQUEST['action'] ){
		case "SendMessage":
		

			$query = $db->prepare("INSERT INTO chatform SET User=?, message=?");
			$query->execute(['student', $_REQUEST['message']]);
			echo 1;
		break;
		case "getChat":
			$query = $db->prepare("SELECT * from chatform");
			$query->execute();
			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			
			$chatform = '';
			foreach($rs as $r)
			{
				$chatform .='<div class="siglemessage"><strong>'.$r->User.' says:  </strong>'.$r->Message.'</div>';;		

			}
			echo $chatform;
		break;
	}
}
?>