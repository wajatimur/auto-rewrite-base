<?php namespace Foundation\Server\Apache;


class AutoRewriteBase {

	public function boot($root_path){
		$htaccess_file = $root_path.'/.htaccess';

		$base = $this->getBaseFolder($root_path);

		if( file_exists($htaccess_file) ){
			$htaccess = file_get_contents($htaccess_file);
			$htaccess = preg_replace('/RewriteBase\s(.*)/', $base, $htaccess);
			
			$fhandle = fopen($htaccess,'w');
			fwrite($fhandle, $htaccess);
			fclose($fhandle);
		}
	}


	protected function getBaseFolder($root_path){
		$host_path = realpath($_SERVER['HOSTNAME']);

		$base_path = str_replace($host_url, replace, subject)
	}

}