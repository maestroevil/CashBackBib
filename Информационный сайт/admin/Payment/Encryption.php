<? 

/**
 * Класс который отвечат за шифрование данных
 */
class Encryption 
{
	public $private_key;
	public $public_key;
	public $res;
	public $config = array(
		"digest_alg" => "sha512",
		"private_key_bits" => 2048,
		"private_key_type" => OPENSSL_KEYTYPE_RSA
	);
	//Создаем приватный и публичный ключ
	public function create_data_key(){
		$this->res = openssl_pkey_new($this->config);
		openssl_pkey_export($this->res, $private_key_);
		$this->set_private_key($private_key_);
		$this->set_public_key($this->get_public_create_key());
		return $private_key_;
	}
	//Задаем приватный ключ
	public function set_private_key($private_key){
		$this->private_key = $private_key;
	}
	public function set_public_key($public_key){
		$this->public_key = $public_key;
	}
	//Считываем публичный ключ через детали приватного
	public function get_public_create_key(){
		$public_key = openssl_pkey_get_details($this->res);
		return $public_key['key'];
	}
	//Считываем приватный ключ
	public function get_private_key(){
		return $this->private_key;
	}
	//Считываем приватный ключ
	public function get_public_key(){
		return $this->public_key;
	}
	//Шифруем данные
	public function data_crypte($message){
		openssl_public_encrypt($message, $message_crypt,$this->public_key);
		return $message_crypt;
	}
	//Выводится сообщения в читаемом виде, при декоде, не будет работать строчка
	public function data_crypte_watch($message){
		openssl_public_encrypt($message, $message_crypt,$this->public_key);
		return base64_encode($message_crypt);
	}
	//Дешифруем данные
	public function data_encrypte($message){
		openssl_private_decrypt($message, $message_en, $this->private_key);
		return $message_en;
	}
}
?>

// 	$encrypt->create_data_key();
	
// // 	$message = "summa@34;name@zheka;card@748239495823";
// // 	$public_key = "-----BEGIN PUBLIC KEY-----
// // MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxrErnpNsIw5Tc3ezEyBd
// // i1ab+nPWAmPNcu2hh33p/p6IoDvzEfoaR/N/k2kk5hDOZBzW8/8khScj3+CODygD
// // QIulzDnbLdVH6LzPC1Pw21DL19TdwEb6pbW4kvqwMc6s85n34ya9gEDTMLhIeDFn
// // 8VrH9pll7cKrDemZX3JRSsDb0iMXNEfSsaq1qh4FS/LV9y7JqMdpbs7c6kEflcxT
// // xsYkOlOj4jOFgxEsULUDUuAntHv3TDjrUWYn0NvrOril5t4umhZFuoNcgyk4KJjE
// // kE2oeLb6oWM3cpsMiFwnX72oOxTkPtO0bs2IF8v2J7bAMyntJJhj69GpJFU1+Zhb
// // CwIDAQAB
// // -----END PUBLIC KEY-----";
// // 	$private_key = "-----BEGIN PRIVATE KEY-----
// // MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDGsSuek2wjDlNz
// // d7MTIF2LVpv6c9YCY81y7aGHfen+noigO/MR+hpH83+TaSTmEM5kHNbz/ySFJyPf
// // 4I4PKANAi6XMOdst1UfovM8LU/DbUMvX1N3ARvqltbiS+rAxzqzzmffjJr2AQNMw
// // uEh4MWfxWsf2mWXtwqsN6ZlfclFKwNvSIxc0R9KxqrWqHgVL8tX3Lsmox2luztzq
// // QR+VzFPGxiQ6U6PiM4WDESxQtQNS4Ce0e/dMOOtRZifQ2+s6uKXm3i6aFkW6g1yD
// // KTgomMSQTah4tvqhYzdymwyIXCdfvag7FOQ+07RuzYgXy/YntsAzKe0kmGPr0akk
// // VTX5mFsLAgMBAAECggEAdNEHZzUfl8C9eZ6/jxgxR1HFZMuj4EXTLaXemS2DXGrS
// // wvpcH46e0vyrXfyscAMjhSKbklrImux3IBIDE5Af0VwJP3goj9rca05OoEdazWbE
// // YgHJ2lkg1jpv6SIwYygy8Qnt/wPw2C3EvNkr6laJ2RHZjPeFQPN55DUaMk6g0sRk
// // EV2iuc+YxwzU5oAya50tbQOTPwjPgp2w9C3uaeuoFe/ySc8TrnoZnsQIOq02QqyI
// // jRPE+Dkbs7MwJulEnhfwjMj8mn4n32LdRCf5VRl4FgIXqSSUwJCobOcvTavs6hwa
// // k66zttO4qyQBPiZrPGaWYBhdrG+slwD0ETV6u50zWQKBgQD6cznemRmAoubIb2OA
// // agZRcoZi4kf7JF2/MBEKU5hD+1Zu+QMWuZbLhGmvi2gsQbQujrdWG3NmvaXXRNaP
// // flLIUCCIOiGnN7yWWu0qjjc38kRGviOnlD4LMnWAjka8P7wQKFL+heoH5x8T7ldF
// // /UIXP1/Tiu6YCpO5oTW8tT+sLQKBgQDLGFO+aCBUvNBuVw7Wr0k26Il96ZIyTlBg
// // mZs9fTA2+9MMMYoUG5/oiyMm9yJFvKlUq9XS8o5+JaQUIDFRdIvFoDERIKBkCIxs
// // DseiOpbTiD/xygO4wAaLSFrG8zLvEWjDoEk7pv2zyvX16V66JylU7zM+K457lSUD
// // cyP3JnZPFwKBgQC+FO368B/W7cxSm5fdQpsA/fbY3fzbs0IjdQu51rBeCEgVeZDK
// // kpjMZfcAcMHjtQpXu6GSDMuNUqqns2tVBP83YPkP627XRwou41vVTJLEN29ycaUF
// // 7xEX1ngv1cwB3C2T5cb3vhNdZCDGM8KxMAIVOtgz6eIkKwLrhFsQmk91EQKBgQCx
// // TKqHFiXrc+5N9Wh52QqEidrF9itwCVg4DMEum+SEi7FB+tl9FmSyQQ1ODf94e+wj
// // g+OmRaRJ0hh8jWIgpysCOwe62Q3MZn4YM4rqQFW9kzunnGFFXzYXT/IXruZvOHaK
// // GZr1HaJr3Cp/JN1Si6+Ue0Hz61h24MwwR8tFDunHvwKBgEqNN9+Z4N0RR8sbqENK
// // f+5MRnBPP1x7TroUbqInfDG2/kqw7FT4aD9WZRnqBE7EJVFRo7gjDb6PojkAf68q
// // vVCeA2a6pUXVDVzJ0dRCKa2sfN9A539rgpVF2gapsc/9YPzLhw70r9rr4kzlB4yY
// // 0Y6QbVquC9MA7aW7TuxY/wfe
// // -----END PRIVATE KEY-----";
// // 	$encrypt->set_public_key($public_key);
// // 	$encrypt->set_private_key($private_key);
// // 	echo $encrypt->get_private_key() ."\n";
// // 	echo $encrypt->get_public_key();
// // 	$message2 = $encrypt->data_crypte($message);
// // 	echo $encrypt->data_encrypte($message2);
// // 	$url_payment->create_array_payment($encrypt->data_encrypte($message2));
// // 	print_r($url_payment->payment_array);
