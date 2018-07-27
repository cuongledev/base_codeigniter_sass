<?php
class Theme_model extends MY_Model
{


	private $assets = array(

		"default" => array(

			"css" => array(
				array(
					"path" => "public/theme/css/bootstrap.css",
					"media" => "screen"
				),
				array(
					"path" => "public/theme/css/animate.css",
					"media" => "screen"
				),
				array(
					"path" => "public/theme/css/queryLoader.css",
					"media" => "screen"
				),
				array(
					"path" => "public/theme/plugins/owl-carousel/owl.carousel.css",
					"media" => "screen"
				),
				array(
					"path" => "public/theme/css/fontawesome-all.min.css",
					"media" => "screen"
				),
				array(
					"path" => "public/theme/css/portfolio2.css",
					"media" => "screen"
				),
				array(
					"path" => "public/theme/css/core.css",
					"media" => "screen"
				)
			),

			"js" => array(
				"public/theme/js/jquery.min.js",
				"public/theme/js/bootstrap.min.js",
				"public/theme/js/jquery.parallax-1.1.3.js",
				"public/theme/js/queryLoader.js",
				"public/theme/plugins/owl-carousel/owl.carousel.min.js",
				"public/theme/plugins/jquery.appear.js",
				"public/theme/plugins/jquery-hover-effect.js",
				//"public/theme/plugins/nimble.js",
				"public/theme/js/core.js"
			)

		)

	);

	public function get_assets($key){

		return isset($this->assets[$key]) ? $this->assets[$key] : null;

	} //





}
