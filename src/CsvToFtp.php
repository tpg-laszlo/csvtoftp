<?php

    declare(strict_types = 1);

    namespace CsvFtp;

    include_once "configuration.inc.php";

    class CsvToFtp extends Configuration
    {
        private $data;

        public function setData( array $data )
        {
            $this->data = $data;

            return $this;
        }

        public function generateCSV() : void
        {
            foreach( $this->data AS $key => $row ){
                
                fwrite($this->ftp, "$key;$row" . PHP_EOL );
            }
        }

        public function addHead( array $head = [] )
        {
            if( !empty( $head ) ){ $this->head = $head; }

            fwrite( $this->ftp, implode( ";", $this->head ) . PHP_EOL );

            return $this;
        }
    }