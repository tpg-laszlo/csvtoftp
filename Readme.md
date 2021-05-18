# Installation

# Embed

    use CsvFtp\CsvToFtp;

# Use

    $configuration = [ 'ftp_server'  => 'XXX',
                       'ftp_username'=> 'XXX',
                       'ftp_userpass'=> '9WejXXXghz2',
                       'file_name'   => 'TEST14.csv' ];

    $dataArray = [ 'example 1' => '1',
                   '....'      => '2'];

    $csv = new CsvToFtp( $configuration );

    $csv->addHead(['this','andthis']) // Method addHead() is optional 
        ->setData($dataArray)
        ->generateCSV();
