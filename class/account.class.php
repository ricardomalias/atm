<?php
	class account
	{
		public function checkAccount($user, $pass)
		{
			if(!empty($user) && !empty($pass))
			{
				$user_array=$this->getAccount($user);
				
				if(is_array($user_array) && md5($pass)==$user_array['pass'])
				{
					$this->sessionAccount($user_array);

					return true;
				}
				else
					return false;
			}


		}

		private function getAccount($user)
		{
			// como era apenas um teste, invés de fazer query no DB fiz apenas um array simulando isso
			$rs=['id_user'=>1,'nome'=>'Talion','user'=>'teste','pass'=>'e10adc3949ba59abbe56e057f20f883e','status'=>1];

			if(array_search($user, $rs))
				return $rs;
			else
				return false;
		}



		public function sessionAccount($account)
		{
			if(isset($account['pass']))
				unset($account['pass']);
			
			$_SESSION['account']=$account;

		}
	}
	
?>