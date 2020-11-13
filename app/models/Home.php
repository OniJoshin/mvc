<?php
    class Home {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getMeta(){
            return $this->db->query("SELECT * FROM `home_meta`");
        }
    }