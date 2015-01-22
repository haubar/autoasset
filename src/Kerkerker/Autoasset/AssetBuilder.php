<?php namespace Kerkerker\Autoasset;


use Illuminate\Html\HtmlBuilder;
use Illuminate\Routing\UrlGenerator;

class AssetBuilder extends HtmlBuilder {

		protected $filename;
		protected $path;

		/**
		 *
		 * Create  new  asset
		 *
	  */
		public function __construct(UrlGenerator $url = null, $filename = null, $path = null)
		{

			parent::__construct($url);
			$this->filename = $filename;
			$this->path 		= $path;

		}

		public function script($url, $attributes = array(), $secure = null, $enable = true)
		{
			return parent::script(($enable ? $this->path : null).($this->filename ? $this->filename : null).".js". $url, $attributes, $secure);
		}

		public function style($url, $attributes = array(), $secure = null, $enable = true)
		{
			return parent::style(($enable ? $this->path : null).($this->filename ? $this->filename : null).".css". $url, $attributes, $secure);
		}

		public function getAssetfilename()
		{
			return $this->filename;
		}

		public function setAssetfilename($filename)
		{
			$this->filename = $filename;
		}

		public function linkAsset($url, $title = null, $attributes = array(), $secure = null, $enable = true)
		{
			return parent::linkAsset(($enable ? $this->filename : null) . $url, $title, $attributes, $secure);
		}
}
