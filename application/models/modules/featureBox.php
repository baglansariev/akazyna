<?php
    namespace models\modules;
    use core\engine\Model;

    class FeatureBox extends Model
    {
        public function getList()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "featurebox";
            return $this->db->getAllRows($sql);
        }
    }