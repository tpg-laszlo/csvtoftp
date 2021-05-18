# Installation

# Embed

    use CsvFtp\CsvToFtp;

# Use

    $configuration = [ 'ftp_server'  => 'XXX',
                       'ftp_username'=> 'XXX',
                       'ftp_userpass'=> 'XXX',
                       'file_name'   => 'TEST15.csv' ];

    $dataArray = [ 'example 1' => '1',
                   '....'      => '2'];

    $csv = new CsvToFtp( $configuration );

    $csv->addHead(['this','andthis']) // Method addHead() is optional 
        ->setData($dataArray)
        ->generateCSV();
