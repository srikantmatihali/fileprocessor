# Supplier Product List Processor

License: MIT
Authors: Srikanth V Mattihalli [github](https://github.com/srikantmatihali) | [Linkedin](https://www.linkedin.com/in/srikanthvmattihalli/) | [Twitter](https://twitter.com/srikantmatihali/) | <a href="mailto:srikantmatihali@gmail.com?"><img src="https://img.shields.io/badge/gmail-%23DD0031.svg?&style=for-the-badge&logo=gmail&logoColor=white"/></a>

#### Problem Statement

We have multiple different formats of files that need to be parsed and returned back as a Product object with all the headings as mapped properties. 

Each product object constitutes a single row within the csv file.

#### Example Application API:
`parser.php --file example_1.csv --unique-combinations=combination_count.csv`

When the above is run the parser should display row by row each product object representation of the row. And create a file with a grouped count for each unique combination i.e. make, model, colour, capacity, network, grade, condition.

#### Example Product Object:
- make: 'Apple' (string, required) - Brand name
- model: 'iPhone 6s Plus' (string, required) - Model name
- colour: 'Red' (string) - Colour name
- capacity: '256GB' (string) - GB Spec name
- network: 'Unlocked' (string) - Network name
- grade: 'Grade A' (string) - Grade Name
- condition: 'Working' (string) - Condition name

#### Example Unique Combinations File:
- make: 'Apple'
- model: 'iPhone 6s Plus'
- colour: 'Red'
- capacity: '256GB'
- network: 'Unlocked'
- grade: 'Grade A'
- condition: 'Working'
- count: 129

#### Things to note:
  - New formats could be introduced in the future ie. (json, xml etc).
  - File headings could change in the future.
  - Some files can be very large so watch out for memory usage.
  - The code should be excutable from a terminal.
  - Please provide brief read me describing how to run your application.
  - PHP 7+ must be used.
  - Should be built using native PHP and no third party libraries.
  - Required fields if not found within file should throw an exception.


#### Bonus:
  - Add unit/integration tests. (Yet to be implemented)

Example files can be found in the examples directory.

Please make sure this project is completed at least one working day before your interview.

## Execution Method
- php parser.php tsv examples/products_tab_separated.tsv

- php parser.php csv examples/products_comma_separated.csv

Where
argument1: csv/tsv
argument2: filepath from where files has to be taken for processing.