<?php

    namespace RegalosNavidad\modelos;

    class Enlace {
        private $id;
        private $links;
        
        public function __construct($id, $links) {
            $this -> id = $id;
            $this -> links = $links; 
        }

        

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of links
         */ 
        public function getLinks()
        {
                return $this->links;
        }

        /**
         * Set the value of links
         *
         * @return  self
         */ 
        public function setLinks($links)
        {
                $this->links = $links;

                return $this;
        }
    }



?>