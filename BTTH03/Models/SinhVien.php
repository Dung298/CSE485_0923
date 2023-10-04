<?php
    

    class SinhVien{
        private $id;
        private $tenSinhVien;
        private $email;
        private $ngaySinh;
        private $idLop;
    
        public function __construct($id,$tenSinhVien,$email,$ngaySinh,$idLop){
            $this->id=$id;
            $this->tenSinhVien=$tenSinhVien;
            $this->email=$email;
            $this->ngaySinh=$ngaySinh;
            $this->idLop=$idLop;
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
         * Get the value of tenSinhVien
         */ 
        public function getTenSinhVien()
        {
                return $this->tenSinhVien;
        }

        /**
         * Set the value of tenSinhVien
         *
         * @return  self
         */ 
        public function setTenSinhVien($tenSinhVien)
        {
                $this->tenSinhVien = $tenSinhVien;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of ngaySinh
         */ 
        public function getNgaySinh()
        {
                return $this->ngaySinh;
        }

        /**
         * Set the value of ngaySinh
         *
         * @return  self
         */ 
        public function setNgaySinh($ngaySinh)
        {
                $this->ngaySinh = $ngaySinh;

                return $this;
        }

        /**
         * Get the value of idLop
         */ 
        public function getIdLop()
        {
                return $this->idLop;
        }

        /**
         * Set the value of idLop
         *
         * @return  self
         */ 
        public function setIdLop($idLop)
        {
                $this->idLop = $idLop;

                return $this;
        }
        
    }
    
        
    
        