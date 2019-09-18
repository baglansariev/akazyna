<?php

    namespace controllers\pages;
    use core\engine\Controller;

    class ProductsController extends Controller
    {
        public function indexAction()
        {
            $this->view->asset->setTitle('Наша продукция');
            $this->view->asset->setCss('/public/style/products/products.css');

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle('Наша продукция');
            $data['products'] = $this->load->controller('modules/products')->getList();
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('Products/index', $data);
        }

        public function showOneProductAction()
        {
            $this->view->asset->setTitle('Наша продукция');
            $this->view->asset->setMetaDesc('Продукция компании Pioneer Grain Products');
            $this->view->asset->setCss('/public/style/products/products.css');
            $data = array();

            $meta_info = $this->load->controller('modules/products')->getProductMetaInfo();
            if($meta_info){
               foreach($meta_info as$item){
                   $this->view->asset->setTitle($item['product_name']);
                   $this->view->asset->setMetaDesc($item['product_short_desc']);
               }
            }

            $data['product_info'] = $this->load->controller('modules/products')->showOneProduct();
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('Products/product-page', $data);
        }
    }