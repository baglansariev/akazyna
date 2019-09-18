<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class Questionnaire extends Controller
    {
        public function index()
        {
            return $this->load->view('modules/questionnaire');
        }
    }