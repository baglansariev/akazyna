<?php
    namespace models\modules;
    use core\engine\Model;

    class MainSlide extends Model
    {
        public function getSlide()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "main_slide";
            return $this->db->getAllRows($sql);
        }

        public function getSlideLinks()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "main_slide_links";
            return $this->db->getAllRows($sql);
        }
    }