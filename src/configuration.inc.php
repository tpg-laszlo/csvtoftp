<?php

    namespace CsvFtp;

    use Palvoelgyi\Helper\Helper;

    class Configuration
    {
        protected $ftp_server;
        protected $ftp_username;
        protected $ftp_userpass;
        protected $file_name;
        protected $head;
        protected $stream_context;
        protected $ftp_conn;
        protected $login;
        protected $ftp;

        public function __construct( array $configuration ){

            $this->ftp_server   = $configuration['ftp_server'];
            $this->ftp_username = $configuration['ftp_username'];
            $this->ftp_userpass = $configuration['ftp_userpass'];
            $this->file_name    = $configuration['file_name'];

            $this->connect();

            return $this;            
        }

        protected function connect()
        {
            $this->ftp_conn       = ftp_connect( $this->ftp_server) or die("Could not connect to $this->ftp_server" );
            $this->login          = ftp_login( $this->ftp_conn, $this->ftp_username, $this->ftp_userpass );
            $this->stream_context = stream_context_create( [ 'ftp' => [ 'overwrite' => true ] ] );
            $this->ftp            = 
            fopen("ftp://$this->ftp_username:$this->ftp_userpass@$this->ftp_server/$this->file_name", 'w', 0, $this->stream_context);
        }

        function __destruct() : void
        {

            @ftp_close($this->ftp_conn);
        }

        protected function getFtpServer()
        {
            return $this->ftp_server;
        }

    }