<?php
    namespace controllers\common;
    use core\engine\Controller;

    class Menu extends Controller
    {
        public $menu_model;

        public function __construct()
        {
            parent::__construct();
            $this->menu_model = $this->load->model('common/menu');
        }

        public function mainMenu($active = false)
        {
            $data = array();
            $data['menu_list'] = array();
            $menu_list = $this->menu_model->getMenuList();

            if($menu_list){
                foreach ($menu_list as $key => $menu) {
                    $data['menu_list'][$key]['id'] = $menu['id'];
                    $data['menu_list'][$key]['text'] = $menu['text'];
                    $data['menu_list'][$key]['link'] = $menu['link'];
                    $data['menu_list'][$key]['class'] = '';

                    if($active == 'desktop' && $this->isActive($menu['link'])){
                        $data['menu_list'][$key]['class'] = 'class="d-menu-active"';
                    }
                    else if($active == 'mobile' && $this->isActive($menu['link'])){
                        $data['menu_list'][$key]['class'] = 'class="m-menu-active"';
                    }
                }
            }

            switch($active){
                case 'desktop':
                    return $this->load->view('common/menu/desktop-menu', $data);
                case 'mobile':
                    return $this->load->view('common/menu/mobile-menu', $data);
                case 'footer':
                    return $this->load->view('common/menu/footer-menu', $data);
                default:
                    return $data;
            }

        }

        private function isActive($url)
        {
            if('/' . explode('/', $this->request->getUriWithoutParams())[0] == $url) return true;
            return false;
        }
    }