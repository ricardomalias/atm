<?php
	session_start();

	require_once('class/atm.class.php');

	$atmClass= new atm();

	if($_SESSION['account'] && isset($_POST['money']))
	{
		$money=$_POST['money'];
		$value=$atmClass->isMoney($money);

		if($value)
		{
			$result=$atmClass->getMoney($money);

			if(is_array($result))
			{
				foreach($result as $cell)
				{
					echo 'R$ '.$cell.',00 <br>';
				}
			}
		}
		else
			echo 'valor invalido';

	}
	else
		throw new Exception("Error");
		
?>