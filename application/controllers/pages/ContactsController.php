<?php
    namespace controllers\pages;
    use core\engine\Controller;

    class ContactsController extends Controller
    {
        public function indexAction()
        {
            $this->view->asset->setTitle('Контакты');

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle('Контакты');
            $data['languages'] = $this->load->controller('common/language')->getLanguageList();
            devPrint($data['languages'], true);
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('pages/contacts', $data);
        }
}