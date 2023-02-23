<?php
    class Video {
        public $type;
        public $duration;
        public $published = false;
        public $title = null;

        public function play() 
        {
            return $this->published ? "This video is playing" : "This video is not available yet"; 
        }

        public function pause()
        {
            return $this->published ? "This video is paused" : "";
        }
    }

    $introduction = new Video();
    echo $introduction->play();
    var_dump($introduction)
?>