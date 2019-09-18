<?php
    namespace models\modules;
    use core\engine\Model;

    class Advantages extends Model
    {
        public function getList()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "advantages";
            return $this->db->getAllRows($sql);
        }
    }