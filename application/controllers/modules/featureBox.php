<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class FeatureBox extends Controller
    {
        public function index()
        {
            $data = array();
            $featurebox_model = $this->load->model('modules/featureBox');
            $featureboxes = $featurebox_model->getList();

            $data['featureboxes'] = array();

            if($featureboxes){
                foreach($featureboxes as $key => $featurebox){
                    $data['featureboxes'][$key]['id'] = $featurebox['id'];
                    $data['featureboxes'][$key]['image'] = $featurebox['image'];
                    $data['featureboxes'][$key]['title'] = $featurebox['title'];
                    $data['featureboxes'][$key]['text'] = $featurebox['text'];
                }
            }

            return $this->load->view('modules/feature-box', $data);
        }
    }