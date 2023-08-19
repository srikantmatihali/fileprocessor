<?php
require_once 'product.php';
class CombinationsCounter
{
    private $combinations = [];
    private $delimeter = '-';

    public function addCombination($combination)
    {
        $key = implode($this->delimeter, $combination);
        if (!isset($this->combinations[$key])) {
            $this->combinations[$key] = 0;
        }
        $this->combinations[$key]++;
    }

    public function generateCountFile($filename)
    {
        // Implement counting unique combinations and generating the count file
        $fp = fopen($filename, 'w');
        fputcsv($fp, Product::$finalCombinations);
        foreach ($this->combinations as $key => $count) {
            $combination = explode($this->delimeter, $key);
            fputcsv($fp, array_merge($combination, [$count]));
        }
        fclose($fp);
    }
}
