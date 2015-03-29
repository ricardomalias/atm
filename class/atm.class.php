<?php
	$retorno = array();

	class atm
	{
		public function isMoney($value)
		{
			$value = floatval ($value);
			if(empty($value))
				return false;
			else if($value<0)
				return false;
			else if($value%10!=0)
				return false;
			else
				return $value;


		}

		public function getMoney($value)
		{
			global $retorno;

			$this->checkCell($value);

			return $retorno;
		}

		private function checkCell($value)
		{
			global $retorno;
			$cells=[100,50,20,10];
			
			foreach($cells as $cell)
			{
				if(!empty($value) && $value>=$cell)
				{
					$retorno[]=$cell;
					$value=$value-$cell;
					
					if(empty($value) || $value<0)
						return true;
					else
					{
						$this->checkCell($value);
						break;
					}
				}
				else if(empty($value))
					return true;
			}
		}
		
	}
?>