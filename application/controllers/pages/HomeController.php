<?php
	namespace controllers\pages;

	use core\engine\Controller;

	class HomeController extends Controller
	{

	    public function indexAction()
	    {
	    	$this->view->asset->setMetaDesc('Тестовое описание');
	    	$this->view->asset->setMetaKeys('ключ1, ключ2');
	    	$this->view->asset->setTitle('Главная');
            $this->view->asset->setCss('/public/style/css/main-slide.css');
            $this->view->asset->setCss('/public/style/css/accordion.css');
            $this->view->asset->setCss('/public/style/css/news.css');
            $this->view->asset->setJs('/public/style/js/accordion.js');

            $language = $this->load->language('pages/common');

	    	$data['main_slide'] = $this->load->controller('modules/mainSlide');
	    	$data['featureboxes'] = $this->load->controller('modules/featureBox');
	    	$data['call_to_action'] = $this->load->controller('modules/callToAction');
	    	$data['questionnaire'] = $this->load->controller('modules/questionnaire')->getFrequentQuestions();
            $data['latest_news'] = $this->load->controller('modules/news')->getList(3);
            $data['payers_video'] = $this->load->controller('modules/payers')->getPayersVideo();
            $data['payers_counter'] = $this->load->controller('modules/payers')->payersCounter();

            $data['local_about_intro_row_title'] = $language->get('local_about_intro_row_title');
            $data['local_about_intro_text'] = $language->get('local_about_intro_text');
            $data['local_about_intro_button'] = $language->get('local_about_intro_button');

	    	$data['header'] = $this->load->controller('common/header');
	    	$data['footer'] = $this->load->controller('common/footer');

	    	$this->view->response('pages/home', $data);
	    }
	}
