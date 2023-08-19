<?php
require_once 'parser.php';

class Processor {
    private $parser;

    // public function __construct(ParserInterface $parser, CombinationsCounter $combinationsCounter) {
    public function __construct(ParserInterface $parser) {
        $this->parser = $parser;
        // $this->combinationsCounter = $combinationsCounter;
    }

    public function processFile(string $filePath): array {
        // $products = $this->parser->parse($filePath);
        // Display each product object representation
        
        // $this->combinationsCounter->generateCountFile($products);
        return $this->parser->parse($filePath);
    }
}
