<?php
    namespace controllers\pages;
    use core\engine\Controller;
    use core\lib\Mail;
    use core\lib\Form;

    class MailController extends Controller
    {
        public function sendMailAction()
        {
            $mail = new Mail;
            $form = new Form;
            $json = array();

            if(
                $this->request->has('client_name', 'post') &&
                $this->request->has('client_number', 'post') &&
                $this->request->has('client_email', 'post')
            ){

                $name = $this->request->post['client_name'];
                $phone = $this->request->post['client_number'];
                $email = $this->request->post['client_email'];

                if($form->isEmail($email)){
                    if($this->request->has('client_text', 'post')){
                        $message = $this->request->post['client_text'];
                    }
                    if(!$mail->formSend($name, $phone, $email, $message)){
                        $json['error'] = $mail->error_msg;
                    }
                    else{
                        $json['success'] = $mail->success_msg;
                    }
                }
                else{
                    $json['error'] = $form->error_msg['is_email'];
                }

                $this->response->outputJSON($json);
            }
        }

    }