<?php
require_once 'product.php';
require_once 'combinations.php';


interface ParserInterface
{
    public function parse(string $filePath): array;
}

class CsvParser implements ParserInterface
{
    private $combinationsCounter;
    public function parse(string $filePath): array
    {
        $products = [];
        $handle = fopen($filePath, "r");
        $combinationCounter = new CombinationsCounter();
        try {
            if ($handle !== false) {
                $header = fgetcsv($handle);  //getting first value
                while (($data = fgetcsv($handle)) !== false) {
                    $product = array_combine($header, $data);
                    $products[] = new Product(
                        $product['brand_name'],
                        $product['model_name'],
                        $product['colour_name'],
                        $product['gb_spec_name'],
                        $product['network_name'],
                        $product['grade_name'],
                        $product['condition_name']
                    );

                    $combinationCounter->addCombination([
                        $product['brand_name'],
                        $product['model_name'],
                        $product['colour_name'],
                        $product['gb_spec_name'],
                        $product['network_name'],
                        $product['grade_name'],
                        $product['condition_name']]
                    );
                }
                fclose($handle);
                $combinationCounter->generateCountFile('examples/combination_count.csv');
            } else {
                echo 'Could not open file';
            }
        } catch (Exception $ex) {
            echo 'Message: ' . $e->getMessage();
        }
        return $products;
    }
}

class TsvParser implements ParserInterface
{
    private $combinationsCounter;
    public function parse(string $filePath): array
    {
        $products = [];
        $handle = fopen($filePath, "r");
        $combinationCounter = new CombinationsCounter();
        try {
            if ($handle !== false) {
                $header = fgetcsv($handle, 0, "\t");  //getting first value
                while (($data = fgetcsv($handle, 0, "\t")) !== false) {
                    $product = array_combine($header, $data);
                    $products[] = new Product(
                        $product['brand_name'],
                        $product['model_name'],
                        $product['colour_name'],
                        $product['gb_spec_name'],
                        $product['network_name'],
                        $product['grade_name'],
                        $product['condition_name']
                    );

                    $combinationCounter->addCombination([
                        $product['brand_name'],
                        $product['model_name'],
                        $product['colour_name'],
                        $product['gb_spec_name'],
                        $product['network_name'],
                        $product['grade_name'],
                        $product['condition_name']]
                    );
                }
                fclose($handle);
                $combinationCounter->generateCountFile('examples/combination_count.csv');
            } else {
                echo 'Could not open file';
            }
        } catch (Exception $ex) {
            echo 'Message: ' . $e->getMessage();
        }
        return $products;
    }
}
