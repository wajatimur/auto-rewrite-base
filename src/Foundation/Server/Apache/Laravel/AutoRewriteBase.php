<?php namespace Foundation\Server\Apache\Laravel;


class AutoRewriteBase {
	protected $files;


	public function __construct($files){
		$this->files = $files;
	}


	public function boot(){
		$htaccess_file = public_path().'/.htaccess';

		if( file_exists($htaccess_file) ){
			$htaccess = file_get_contents($htaccess_file);
			$htaccess = preg_replace('/RewriteBase\s(.*)/', $base, $htaccess);
			
			$fhandle = fopen($htaccess,'w');
			fwrite($fhandle, $htaccess);
			fclose($fhandle);
		}
	}

}