<? 
	/**
		Запрет в отправке на сервер, через input "@" and ";"
	 * site.com/payment.php/?payment=fsdkjfhsdhjSHFdSFHskjfkjsdjkfJKJDFkjfsdkj
	   summa=1000;
	 */
	class Url 
	{
		public $crypte_url;
		public $url;
		public $payment_string;
		public $payment_array;

		public function get_url(){
			if($_GET["payment"]){
				$this->crypte_url = $_GET["payment"];
			}
			else{
				echo "No create payment";
			}
		}
		public function get_payment(){
			return $this->url;
		}
		public function create_array_payment($message){

			$array1 = explode(";", $message);
			foreach ($array1 as $k => $val) {
				$arr = explode("@", $val);
				print_r($arr);
				$this->payment_array[$arr[0]] = $arr[1];
			}
			print_r($this->payment_array);
		}
	}
?>