<?php
    class Video {
        private $type;
        private $duration;
        protected $published = false;
        private $title = null;
        private $playStatus = false;

        public function __construct($type, $duration, $title) 
        {
            $this->type = $type;
            $this->duration = $duration;
            $this->title = $title;
        }

        public function setType(string $type) 
        {
            $this->type = $type;
        }

        public function getType() 
        {
            return $this->type;
        }

        public function setDuration(string $duration) 
        {
            $this->duration = $duration;
        }

        public function getDuration() 
        {
            return $this->duration;
        }

        public function setTitle(string $title) 
        {
            $this->title = $title;
        }

        public function getTitle() 
        {
            return $this->title;
        }

        public function setPublished(bool $published) 
        {
            $this->published = $published;
        }

        private function getPublished() 
        {
            return $this->published;
        }

        public function setPlayStatus(bool $playStatus) 
        {
            $this->playStatus = $playStatus;
        }

        public function getPlayStatus() 
        {
            return $this->playStatus;
        }

        public function play() 
        {

            if ($this->getPublished()) {
                $this->setPlayStatus(true);
                return "The video is playing"
            }

            return "This video is not available yet"; 
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