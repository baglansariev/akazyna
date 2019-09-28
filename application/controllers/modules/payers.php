<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class Payers extends Controller
    {
        public $payers_model;
        public $lang;

        public function __construct()
        {
            parent::__construct();
            $this->payers_model = $this->load->model('modules/payers');
            $this->lang = $this->load->language('modules/payers');
        }

        public function getPayersVideo()
        {
            $data = array();
            $payers_video = $this->payers_model->getPayersVideo();
            if($payers_video){
                foreach($payers_video as $key => $payer_video) {
                    $data['payers_video'][$key]['id'] = $payer_video['id'];
                    $data['payers_video'][$key]['url'] = $payer_video['url'];
                }
            }

            $data['local_payers_video_title'] = $this->lang->get('local_payers_video_title');

            return $this->load->view('modules/payers/payers-video', $data);
        }

        public function payersCounter()
        {
            $data = array();

            $data['local_payers'] = $this->lang->get('local_payers');
            $data['local_queue'] = $this->lang->get('local_queue');
            $data['local_recieved'] = $this->lang->get('local_recieved');
            $data['local_bought'] = $this->lang->get('local_bought');

            return $this->load->view('modules/payers/payers-counter', $data);
        }
    }