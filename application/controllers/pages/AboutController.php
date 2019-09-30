<?php
    namespace controllers\pages;
    use core\engine\Controller;

    class AboutController extends Controller
    {
        public function indexAction()
        {
            $language = $this->load->language('pages/about');
            $this->view->asset->setTitle($language->get('local_about_page_title'));

            $data = array();

            $data['local_about_cooperative_title'] = $language->get('local_about_cooperative_title');
            $data['local_about_cooperative_text'] = $language->get('local_about_cooperative_text');
            $data['local_whats_cooperative_title'] = $language->get('local_whats_cooperative_title');
            $data['local_whats_cooperative_text'] = $language->get('local_whats_cooperative_text');
            $data['local_cooperative_goal_title'] = $language->get('local_cooperative_goal_title');
            $data['local_cooperative_goal_text'] = $language->get('local_cooperative_goal_text');
            $data['local_cooperative_pros_title'] = $language->get('local_cooperative_pros_title');
            $data['local_cooperative_pros_list'] = $language->get('local_cooperative_pros_list');
            $data['local_cooperative_pros_text'] = $language->get('local_cooperative_pros_text');
            $data['local_cooperative_move_title'] = $language->get('local_cooperative_move_title');
            $data['local_cooperative_move_text'] = $language->get('local_cooperative_move_text');

            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle($language->get('local_about_page_title'));
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('pages/about', $data);
        }
    }