<?php
    namespace models\modules;
    use core\engine\Model;

    class Questionnaire extends Model
    {
        public function getQuestionsList($limit = false)
        {
            $sql = "SELECT "
                . DB_PREFIX . "questions.id, "
                . DB_PREFIX . "questions.client_name, "
                . DB_PREFIX . "questions.client_phone, "
                . DB_PREFIX . "questions.client_email, "
                . DB_PREFIX . "questions.client_text, "
                . DB_PREFIX . "questions.date_insert AS question_date, "
                . DB_PREFIX . "question_answers.text AS answer 
                FROM " . DB_PREFIX . "questions 
                LEFT JOIN " . DB_PREFIX . "question_answers 
                ON " . DB_PREFIX . "question_answers.question_id = " . DB_PREFIX . "questions.id 
                WHERE status = 'published' AND language_id = 1";

            if(isset($limit['from']) && isset($limit['notes'])){
                $sql .= " LIMIT " . (int)$limit['from'] . ", " . (int)$limit['notes'];
            }
            else if((int)$limit){
                $sql .= " LIMIT " . (int)$limit;
            }

            return $this->db->getAllRows($sql);
        }

        public function getFrequentQuestions()
        {

        }
    }