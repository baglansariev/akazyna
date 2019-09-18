<?php
    namespace models\modules;
    use core\engine\Model;

    class CallToAction extends Model
    {
        public function getActionData()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "call_to_action WHERE language_id = 1";
            return $this->db->getAllRows($sql);
        }
    }