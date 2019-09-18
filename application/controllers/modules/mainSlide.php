<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class MainSlide extends Controller
    {
        public function index()
        {
            $slide_model = $this->load->model('modules/mainSlide');
            $slide_data = $slide_model->getSlide();
            $slide_links = $slide_model->getSlideLinks();
            $data = array();

            if($slide_data){
                foreach($slide_data as $key => $slide) {
                    $data['slide_data'][$key]['id'] = $slide['id'];
                    $data['slide_data'][$key]['title'] = $slide['title'];
                    $data['slide_data'][$key]['subtitle'] = $slide['subtitle'];
                    $data['slide_data'][$key]['img'] = $slide['img'];
                }
            }

            if($slide_links){
                foreach($slide_links as $key => $slide_link) {
                    $data['slide_links'][$key]['id'] = $slide_link['id'];
                    $data['slide_links'][$key]['text'] = $slide_link['text'];
                    $data['slide_links'][$key]['href'] = $slide_link['href'];
                }
            }
            return $this->load->view('modules/main-slide', $data);
        }
    }