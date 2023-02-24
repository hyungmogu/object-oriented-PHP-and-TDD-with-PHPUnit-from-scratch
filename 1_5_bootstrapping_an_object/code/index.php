<?php
    class Video {
        public $type;
        public $duration;
        public $published = false;
        public $title = null;

        public function __construct() 
        {
            
        }

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
    $introduction->author = "Terry O";
    echo nl2br("{$introduction->play()}\n{$introduction->pause()}\n{$introduction->author}");
    var_dump($introduction)
?>