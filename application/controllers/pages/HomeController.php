<?php
	namespace controllers\pages;

	use core\engine\Controller;

	class HomeController extends Controller
	{

	    public function indexAction()
	    {
	    	$this->view->asset->setMetaDesc('Одним из потребительских кооперативов является потребительский кооператив «Асар Казына», созданный в соответствии с решением учредительного собрания кооператива (протокол от «01» июня 2018 года) как добровольное объединение граждан на основе их членства в целях удовлетворения потребностей в приобретении движимого и недвижимого имущества.');
	    	$this->view->asset->setMetaKeys('Купить недвижимость в рассрочку в Шымкенте, Купить недвижимость в рассрочку, асар казына, asarkazyna, asarkazyna.kz');
	    	$this->view->asset->setTitle('Асар казына. Купить недвижимость в рассрочку в Шымкенте.');
            $this->view->asset->setCss('/public/style/css/main-slide.css');
            $this->view->asset->setCss('/public/style/css/accordion.css');
            $this->view->asset->setCss('/public/style/css/news.css');
            $this->view->asset->setJs('/public/style/js/accordion.js');

            $language = $this->load->language('pages/common');

	    	$data['main_slide'] = $this->load->controller('modules/mainSlide');
	    	$data['featureboxes'] = $this->load->controller('modules/featureBox');
	    	$data['call_to_action'] = $this->load->controller('modules/callToAction');
	    	$data['questionnaire'] = $this->load->controller('modules/questionnaire')->getQuestionsList(4);
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
