<?php
require_once 'parse_data.php';
require_once 'processor.php';
$parserType = $argv[1];
$filePath = $argv[2];
print_r($argv);
// $parser = null;


// switch($parserType){
//     default:    echo 'Unsupported Parser Type. Please specify';
//                 exit(1);
//                 break;
//     case 'csv': $parser = new CsvParser();
//                 break;
//     case 'tsv': $parser = new TsvParser();
//                 break;
// }

// $processor = new Processor($parser);
// $products = $processor->processFile($filePath);

// foreach($products as $product){
//     var_dump($product);
// }

?>