<?php
    class Video {
        public $type;
        public $duration;
        public $published = false;
        public $title = null;

        public function __construct($type, $duration, $title) 
        {
            $this->type = $type;
            $this->duration = $duration;
            $this->title = $title;
        }

        public function play() 
        {
            return $this->published ? "This video is playing" : "This video is not available yet"; 
        }

        public function pause()
        {
            return $this->published ? "This video is paused" : "";
        }

        public function __destruct() {
            echo "Destroying instance of " . get_class() . " class";
        }
    }

    header("Content-Type: text/plain");
    $introduction = new Video("mp4", "10.30", "Introduction to OOP");
    $video2 = new Video("mp4", "13.30", "The Second Video");

    var_dump($introduction);
    var_dump($video2);
?>