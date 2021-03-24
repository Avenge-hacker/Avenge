<?php

class Reaction
{
	function __construct()
	{
		//
	}

	////////////// [alternatif file_get_contents] ///////////////
	private function url_get_contents ($Url)
	{
		if (!function_exists('curl_init')){
			die('CURL is not installed!');
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $Url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($ch);
		curl_close($ch);
		return $output;
	}
	/////////////////////////////////////////////////////////////
	
	private function fetch_value($str, $find_start, $find_end)
	{
		$start = strpos($str, $find_start);
		if ($start === false) {
				return "";
		}
		$length = strlen($find_start);
		$end = strpos(substr($str, $start + $length), $find_end);
		return trim(substr($str, $start + $length, $end));
	}
	
	private function curl($url = '', $var = '',$echo = '',$ref = '',$header = false)
	{
		global $config, $sock;
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_NOBODY, $header);
		curl_setopt($curl, CURLOPT_TIMEOUT, 150);
		curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:53.0) Gecko/20100101 Firefox/53.0');
		if ($var) {
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $var);
		}
		curl_setopt($curl, CURLOPT_COOKIEFILE, $config['cookie_file']);
		curl_setopt($curl, CURLOPT_COOKIEJAR, $config['cookie_file']);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($curl);
		curl_close($curl);
		return $result;
	}
	
	private function gender_check($userid,$token)
	{
		$gen_url 	= 'https://graph.facebook.com/'.$userid.'?access_token='.$token;
		$gen_data	= file_get_contents($gen_url);
		$gen_data 	= json_decode($gen_data, true);
		$gender 	= $gen_data['gender'];
		return $gender;
	}
	
	public function send_reaction($user, $pass, $token, $r_male, $r_female, $max_status)
	{
		$get_post	= 'https://graph.facebook.com/me/home?fields=id,from&limit='.$max_status.'&access_token='.$token;
		$get_post 	= file_get_contents($get_post);
		$get_post 	= json_decode($get_post, true);
		
		foreach($get_post['data'] as $data)
		{
			$this->curl("https://mobile.facebook.com/login.php?refsrc=https%3A%2F%2Fm.facebook.com%2F&login_try_number=1", "lsd=AVpI36s1&version=1&ajax=0&width=0&pxr=0&gps=0&dimensions=0&m_ts=1483804348&li=qg5xWAUZXopBIK0ABg1Dtlzt&email=$user&pass=$pass&login=Masuk");
			
			$stat_id	= $data['id'];
			$post_id	= explode("_",$stat_id);
			$r_start	= 'https://mobile.facebook.com/reactions/picker/?ft_id='.$post_id[1];			
			$html 		= $this->curl($r_start);
			$html 		= str_replace('&amp;','&',$html);
			
			if($user_gen == 'female')
			{
				$r_females 	= '/ufi/reaction/?ft_ent_identifier='.$post_id[1].'&reaction_type='.$r_female;
				
				$r_female_e	= $this->fetch_value($html,$r_females,'" style="display:block">');
				$r_female_l	= 'https://mobile.facebook.com/ufi/reaction/?ft_ent_identifier='.$post_id[1].'&reaction_type='.$r_female. $r_female_e;
				$this->curl($r_female_l);
				echo "\033[1;32m [Status Cowo Dengan ID] > $post_id[1] $user_gen => REACT !!\n";
			}else{
				$r_males 	= '/ufi/reaction/?ft_ent_identifier='.$post_id[1].'&reaction_type='.$r_male;
				$r_male_e	= $this->fetch_value($html,$r_males,'" style="display:block">');
				$r_male_l	= 'https://mobile.facebook.com/ufi/reaction/?ft_ent_identifier='.$post_id[1].'&reaction_type='.$r_male. $r_male_e;
				$this->curl($r_male_l);
				echo "\033[1;32m [Status Cewe Dengan ID] > $post_id[1] => $user_gen => REACT!! \n";
			}
			
			$this->curl('https://mobile.facebook.com/logout.php');
			sleep(2);
		}
		

		
	}
	
	
}
