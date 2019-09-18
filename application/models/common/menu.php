<?php
    namespace models\common;
    use core\engine\Model;

    class Menu extends Model
    {
        public function getMenuList()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "menu WHERE language_id = 1 ORDER BY sort_order ASC";
            return $this->db->getAllRows($sql);
        }
    }