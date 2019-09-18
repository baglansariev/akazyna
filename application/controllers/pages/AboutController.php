<?php
    namespace controllers\pages;
    use core\engine\Controller;

    class AboutController extends Controller
    {
        public function indexAction()
        {
            $this->view->asset->setTitle('О компании');

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle('О компании');
            $data['advantages'] = $this->load->controller('modules/advantages');
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('About/index', $data);
        }
    }