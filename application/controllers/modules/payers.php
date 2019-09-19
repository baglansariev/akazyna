<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class Payers extends Controller
    {
        public $payers_model;

        public function __construct()
        {
            parent::__construct();
            $this->payers_model = $this->load->model('modules/payers');
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

            return $this->load->view('modules/payers/payers-video', $data);
        }

        public function payersCounter()
        {
            return $this->load->view('modules/payers/payers-counter');
        }
    }