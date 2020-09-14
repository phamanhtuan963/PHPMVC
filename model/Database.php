<?php
    require_once ("Game.php");
    class Database{
        public function getGameList()
        {
            //return $gamelist;
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mvc";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            $sql = "SELECT * FROM mvc";
            $result = mysqli_query($conn, $sql);

            return $result;


            /*$gamelist = array();
            $gamelist[] = new Game("BBBBB", 10000, "aa", "Hoho");
            $gamelist[] = new Game("Adventure Space", 10000, "image", "Big Boy");
            $gamelist[] = new Game("a", 10000, "image", "Haha");
            return $gamelist;*/
        }


        public function  getGame($title)
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mvc";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            $sql = "SELECT title,price,image,producer 
                    FROM mvc 
                    WHERE title='{$title}'";
            $game = mysqli_query($conn, $sql);
            return $game;



            //return $result;
            /*$gamelist = $this->getGameList();
            foreach($gamelist as $key => $game)
            {
                if($game->title == $title);
                    return $game ;
            }*/
        }
    }
    //$tmp = new Database();
    //$tmp->getGame("a");
    //var_dump($tmp);
?>