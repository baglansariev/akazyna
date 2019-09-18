<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class CallToAction extends Controller
    {
        public function index()
        {
            return $this->load->view('modules/callToAction');
        }
    }