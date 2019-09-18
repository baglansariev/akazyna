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
//            $this->view->asset->setCss('/public/style/products/products.css');
//            $this->view->asset->setCss('/public/style/news/news.css');
//            $this->view->asset->setCss('/public/style/owl-carousel/owl-gallery.css');
//            $this->view->asset->setJs('/public/style/simple-slider/js/simple-slider.js');
//            $this->view->asset->setJs('/public/style/owl-carousel/owl-carousel-switcher.js');


	    	$data['main_slide'] = $this->load->controller('modules/mainSlide');
//	    	$data['products'] = $this->load->controller('modules/products')->getList(4);
//	    	$data['featurebox'] = $this->load->controller('modules/featureBox');
//	    	$data['call_to_action'] = $this->load->controller('modules/callToAction');
//	    	$data['latest_news'] = $this->load->controller('modules/news')->getList(3);
//	    	$data['owl_gallery'] = $this->load->controller('modules/owlGallery')->getImages();
	    	$data['header'] = $this->load->controller('common/header');
	    	$data['footer'] = $this->load->controller('common/footer');

	    	$this->view->response('pages/home', $data);
	    }
	}
