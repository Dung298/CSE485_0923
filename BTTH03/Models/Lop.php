<?php
    class Lop{
        private $id;
        private $tenLop;

        public function __construct($id,$tenLop)
        {
            $this->id = $id;
            $this->tenLop = $tenLop;
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
         * Get the value of tenLop
         */ 
        public function getTenLop()
        {
                return $this->tenLop;
        }

        /**
         * Set the value of tenLop
         *
         * @return  self
         */ 
        public function setTenLop($tenLop)
        {
                $this->tenLop = $tenLop;

                return $this;
        }
    }
?>