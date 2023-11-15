<?php

    namespace RegalosNavidad\modelos;

    class Enlace {
        private $id;
        private $tienda;
        private $precio;
        private $links;
        
        public function __construct($id, $tienda, $precio, $links) {
            $this -> id = $id;
            $this -> tienda = $tienda;
            $this -> precio = $precio;
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

        /**
         * Get the value of tienda
         */ 
        public function getTienda()
        {
                return $this->tienda;
        }

        /**
         * Set the value of tienda
         *
         * @return  self
         */ 
        public function setTienda($tienda)
        {
                $this->tienda = $tienda;

                return $this;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */ 
        public function setPrecio($precio)
        {
                $this->precio = $precio;

                return $this;
        }
    }



?>