<?php
    class Hoa {
        private $hoaId;
        private $hoaTen;
        private $hoaMoTa;
        private $hoaAnh;

        public function __construct($hoaId, $hoaTen, $hoaMoTa, $hoaAnh) {
            $this->hoaId = $hoaId;
            $this->hoaTen = $hoaTen;
            $this->hoaMoTa = $hoaMoTa;
            $this->hoaAnh = $hoaAnh;
        }

        /**
         * @return mixed
         */
        public function getHoaId()
        {
            return $this->hoaId;
        }

        /**
         * @param mixed $hoaId
         */
        public function setHoaId($hoaId)
        {
            $this->hoaId = $hoaId;
        }

        /**
         * @return mixed
         */
        public function getHoaTen()
        {
            return $this->hoaTen;
        }

        /**
         * @param mixed $hoaTen
         */
        public function setHoaTen($hoaTen)
        {
            $this->hoaTen = $hoaTen;
        }

        /**
         * @return mixed
         */
        public function getHoaMoTa()
        {
            return $this->hoaMoTa;
        }

        /**
         * @param mixed $hoaMoTa
         */
        public function setHoaMoTa($hoaMoTa)
        {
            $this->hoaMoTa = $hoaMoTa;
        }

        /**
         * @return mixed
         */
        public function getHoaAnh()
        {
            return $this->hoaAnh;
        }

        /**
         * @param mixed $hoaAnh
         */
        public function setHoaAnh($hoaAnh)
        {
            $this->hoaAnh = $hoaAnh;
        }
    }
?>
