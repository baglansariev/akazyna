<?php
    namespace models\pages;
    use core\engine\Model;

    class Documents extends Model
    {
        public function getDocumentList()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "documents ORDER BY sort_order";
            return $this->db->getAllRows($sql);
        }

        public function getDocument($document_id)
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "documents WHERE id = " . (int)$document_id;
            return $this->db->getRow($sql);
        }
    }