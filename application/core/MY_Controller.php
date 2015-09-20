<?php

class Application extends CI_Controller {
	protected $data = array();
	protected $id;
	protected $choices = array(
		'Home' => '/', 'Gallery' => '/gallery', 'About' => '/about'
	);

	function __contruct() {
		parent::__construct();
		$this->data = array();
	}

	function render() {
		$this->data['pagetitle'] = 'Sample Image Gallery';
		$this->data['menubar'] = build_menu_bar($this->choices);
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
		$this->data['data'] = &$this->data;
		$this->parser->parse('template', $this->data);
	}
}