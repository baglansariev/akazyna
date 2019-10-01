<?php
    namespace controllers\pages;
    use core\engine\Controller;

    class ConditionsController extends Controller
    {
        public function indexAction()
        {
            $language = $this->load->language('pages/conditions');
            $this->view->asset->setTitle($language->get('local_page_title'));

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle($language->get('local_page_title'));
            $data['calculator'] = $this->load->controller('modules/calculator')->getCalcModule();
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('pages/conditions', $data);
        }
    }