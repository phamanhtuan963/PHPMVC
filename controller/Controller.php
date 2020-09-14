<?php
    require_once ("model/Database.php");
    class Controller{
        public $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function  viewall()
        {
            $result = $this->db->getGameList();
            include 'view/gamelist.php';
        }
        public function view()
        {
            $game = $this->db->getGame($_GET['title']);
            include 'view/viewgame.php';
        }
    }
?>