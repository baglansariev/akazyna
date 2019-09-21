<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class Calculator extends Controller
    {
        public function index()
        {
            return $this->load->view('modules/calculator');
        }
    }