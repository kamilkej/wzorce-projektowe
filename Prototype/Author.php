<?php
    class Author {
        private $name;
        private $surname;
        private $docs = [];
        
        public function __construct(string $name, string $surname)
            {
                $this->surname = $surname;
                $this->name = $name;
            }
        public function addToDocument(Document $doc)
            {
                $this->docs[] = $doc;
            }
    }
?>