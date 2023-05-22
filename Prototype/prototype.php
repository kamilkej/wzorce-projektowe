<?php

    class Document {
        
        private $title;
        private $content;
        private $author;
        private $date;
        private $tasks = [];

        public function __construct(string $title, string $content, Author $author)
            {
                $this->title = $title;
                $this->content = $content;
                $this->author = $author;
                $this->author->addToDocument($this);
                $this->date = date("Y-m-d H:i:s");
            }

        public function addTask(string $task) : void
            {
                //this->tasks+= $task;
                //$i = count($this->tasks);
                $this->tasks[] = $task;
            }
        
        public function __clone()
            {
                $this->title = 'Kopia dokumentu: '.$this->title;
                $this->author->addToDocument($this);               
                $this->tasks = [];
                $this->date = date("Y-m-d H:i:s");
            }


    }
?>