<?php namespace Kerkerker\AutoAsset;


use Illuminate\Html\HtmlBuilder;
use Illuminate\Routing\UrlGenerator;


class AssetBuilder extends HtmlBuilder {

		protected $filename;

		/**
		 *
		 * Create  new  asset
		 *
	  */
		public function __construct(UrlGenerator $url = null, $filename = null)
		{

			parent::__construct($url);
			$this->filename = $filename;
		}

		public function script($url, $attributes = array(), $secure = null, $enable = true)
		{
			return parent::script(($enable ? $this->filename : null) . $url, $attributes, $secure);
		}

		public function style($url, $attributes = array(), $secure = null, $enable = true)
		{
			return parent::style(($enable ? $this->filename : null) . $url, $attributes, $secure);
		}

		public function image($url, $alt = null, $attributes = array(), $secure = null, $enable = true)
		{
			return parent::image(($enable ? $this->filename : null) . $url, $alt, $attributes, $secure);
		}

		public function linkAsset($url, $title = null, $attributes = array(), $secure = null, $enable = true)
		{
			return parent::linkAsset(($enable ? $this->filename : null) . $url, $title, $attributes, $secure);
		}

		public function getAssetfilename()
		{
			return $this->filename;
		}

		public function setAssetfilename($filename)
		{
			$this->filename = $filename;
		}
}
