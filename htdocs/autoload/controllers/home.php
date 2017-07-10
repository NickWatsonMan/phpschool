<?php 
    namespace controllers;

    class home{
        public function main(){

            echo 'Hello World';

            $stories = \models\story::getAllStories();

            var_dump($stories);

            
        }
    }

?>