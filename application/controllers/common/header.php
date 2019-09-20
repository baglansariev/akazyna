<?php
	namespace controllers\common;
	use core\engine\Controller;

	class Header extends Controller
	{
		public function index()
		{
		    $data = array();
		    $data['desktop_menu'] = $this->load->controller('common/menu')->mainMenu('desktop');
		    $data['mobile_menu'] = $this->load->controller('common/menu')->mainMenu('mobile');
		    $data['popup_form'] = $this->load->controller('modules/popupContactForm');

			return $this->load->view('common/header', $data);
		}
	}
