<?php
    namespace controllers\common;
    use core\engine\Controller;

    class Language extends Controller
    {
        private $language_model;

        public function __construct()
        {
            parent::__construct();
            $this->language_model = $this->load->model('common/language');
        }

        public function getLanguageList()
        {
            $data = array();
            $data['languages'] = array();

            $languages = $this->language_model->getLanguageList();

            if($languages){
                foreach($languages as $key => $language){
                    $data['languages'][$key]['id'] = $language['id'];
                    $data['languages'][$key]['name'] = $language['name'];
                    $data['languages'][$key]['link'] = $language['link'];
                }
            }
        }

    }