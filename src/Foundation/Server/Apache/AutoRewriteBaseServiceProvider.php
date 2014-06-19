<?php namespace Foundation\Server\Apache;

use Foundation\Server\Apache\Laravel;

class AutoRewriteBaseServiceProvider {
	protected $defer_loading = false;

	public function register($app){
		$app['foundation.server.apache.autorewritebase'] = $app->share(function($app){
			return new AutoRewriteBase($app['files']);
		})
	}

	public function boot(){
		$app['foundation.server.apache.autorewritebase']->boot();
	}

}