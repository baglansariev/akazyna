<?php
	namespace controllers\common;
	use core\engine\Controller;

	class Header extends Controller
	{
		public function index()
		{
//		    $header_model = $this->load->model('common/header');
		    $data = array();
		    $data['desktop_menu'] = $this->load->controller('common/menu')->mainMenu('desktop');
		    $data['mobile_menu'] = $this->load->controller('common/menu')->mainMenu('mobile');
//		    $data['popup_form'] = $this->load->controller('modules/popupContactForm');
//		    $data['page'] = '/' . explode('/', $this->request->getUriWithoutParams())[0];

			return $this->load->view('common/header', $data);
		}
	}
