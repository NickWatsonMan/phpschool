<?php 
    namespace controllers;

    class home{
        public function main($f3){

            $stories = \models\story::getAllStories();

            var_dump($stories);

            $f3->set('stories', $stories); 

            //дальше рендерим наш html


			$template = new \Template;

			echo ($template->render('main.html'));

        }
    }

?>