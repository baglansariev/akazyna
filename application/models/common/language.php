<?php
    namespace models\common;
    use core\engine\Model;

    class Language extends Model
    {
        public $language_id;

        public function __construct($lang)
        {
            parent::__construct();
            $this->language_id = $this->getLanguageId($lang);
        }

        public function getLanguageList()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "languages";
            return $this->db->getAllRows($sql);
        }

        public function getLanguageId($lang_name)
        {
            $sql = "SELECT id AS lang_id FROM " . DB_PREFIX . "languages WHERE link = '" . $lang_name . "'";
            return $this->db->getRow($sql)['lang_id'];
        }
    }