# Installation

# Embed

    use CsvFtp\CsvToFtp;

# Use

    $configuration = [ 'ftp_server'  => 'alfa3205.alfahosting-server.de',
                       'ftp_username'=> 'web24398854f3',
                       'ftp_userpass'=> '9Wejghz2',
                       'file_name'   => 'TEST14.csv' ];

    $dataArray = [ 'example 1' => '1',
                   '....'      => '2'];

    $csv = new CsvToFtp( $configuration );

    $csv->addHead(['this','andthis']) // Method addHead() is optional 
        ->setData($dataArray)
        ->generateCSV();
