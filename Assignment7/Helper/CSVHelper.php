<?php

class csvFunctions {
    public $inputFile;

    #getter and setter for the input file variable
    public function getInputFile() {
        return $this->inputFile;
    }

    public function setInputFile($inputFile) {
        $this->inputFile = $inputFile;
    }

    #this function reads through the input file row by row, storing each rows content into an array
    #which is then returned to the user.
    public function csvToArray()
    {
        if (file_exists($this->inputFile)) {
            $file = fopen($this->inputFile, 'r');
            while ($row = fgetcsv($file)) {
                $array[] = $row;
            }
            fclose($file);
            return $array;
        }
        return [];
    }

    #this function appends an array of values ($element) to the designated input file.
    public function addCSVRecord($element)
    {
        if (file_exists($this->inputFile)) {
            $file = fopen($this->inputFile, 'a');
            fputcsv($file, $element);
            fclose($file);
        }
    }

    #this function returns an element from the csv file at the "$element" index specified by the user
    public function getCSVElement($element)
    {
        if (file_exists($this->inputFile)) {
            $array = $this->csvToArray($this->inputFile);
            return $array[$element];
        }
        return [];
    }

    #this function takes an array of values ($modification), and then overwrites the values at the specified
    #index with them.
    public function modifyCSVRecord($modification, $index)
    {
        if (file_exists($this->inputFile)) {
            $array = $this->csvToArray($this->inputFile);
            $file = fopen($this->inputFile, 'w');
            for($i = 0; $i < count($array); $i++) {
                #replaces the element at the index argument with the modification
                if($i == $index) {
                    $array[$i] = $modification;
                }
                fputcsv($file, $array[$i]);
            }
            fclose($file);
        }
    }

    #this function takes an index and then deletes the element at that index.
    public function deleteCSVRecord($index)
    {
        if (file_exists($this->inputFile)) {
            $array = $this->csvToArray($this->inputFile);
            $file = fopen($this->inputFile, 'w');
            for($i = 0; $i < count($array); $i++) {
                #rewrites all of the elements that aren't at the index back into the file.
                #This is used to "delete" the specified element.
                if($i != $index) {
                    fputcsv($file, $array[$i]);
                }
            }
            fclose($file);
        }
    }
}

?>