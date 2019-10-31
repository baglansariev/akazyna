<?php
    namespace controllers\pages;
    use core\engine\Controller;

    class DocumentsController extends Controller
    {
        public $login;
        public $doc_model;

        public function __construct()
        {
            parent::__construct();
            $this->login = $this->load->controller('modules/account/login');
            $this->doc_model = $this->load->model('pages/Documents');
        }

        public function getDocumentListAction()
        {
            if(!$this->login->isLogged()){ $this->response->redirect('/login'); }

            $this->view->asset->setTitle($this->session->get('user_name'));
            $this->view->asset->setCss('/public/style/css/account.css');


            $documents['doc_list'] = $this->doc_model->getDocumentList();

            $data['user_name'] = $this->session->get('user_name');
            $data['user_status'] = ucfirst($this->session->get('user_status'));
            $data['menu_list'] = $this->load->controller('common/menu')->accountMenu($this->session->get('user_status'));
            $data['module'] = $this->load->view('pages/documents', $documents);

            $this->view->response('pages/account/account', $data);
        }

        public function getDocumentAction()
        {
            if(!$this->login->isLogged()){ $this->response->redirect('/login'); }

            $document_id = $this->getDocumentId();
            if((int)$document_id){
                $document = $this->doc_model->getDocument($document_id);
            }

            $this->view->asset->setTitle($document['name']);
            $this->response->addHeader('application/' . $document['name']);
            $this->response->redirect($document['path']);
        }

        private function getDocumentId()
        {
            $arr = explode('/', $this->request->getUriWithoutParams());
            $needle = array_search('documents', $arr);

            if($needle){
                return $arr[$needle + 1];
            }
            return false;
        }
    }