<?php 

	namespace models;

    class story{

        static function getAllStories(){
            $db = \F3::get('DB');
            
            $allStories =  $db->exec("SELECT * FROM story");	

			return $allStories;
        }

    }

?>