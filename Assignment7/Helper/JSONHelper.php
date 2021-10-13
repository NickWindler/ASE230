<?php
class jsonFunctions {
    public $inputFile;

    #getter and setter for the input file variable
    public function getInputFile() {
        return $this->inputFile;
    }

    public function setInputFile($inputFile) {
        $this->inputFile = $inputFile;
    }

    #this function gets the content of the json file, and then decodes the json file into an array.
    public function jsonToArray()
    {
        if (file_exists($this->inputFile)) {
            $file = file_get_contents($this->inputFile);
            $array = json_decode($file, true);
            return $array;
        }
        return [];
    }

    #this function appends a user specified element to the json file.
    public function addJSONRecord($element)
    {
        if (file_exists($this->inputFile)) {
            $array = $this->jsonToArray();
            array_push($array, $element);
            $newArray = json_encode($array);
            file_put_contents($this->inputFile, $newArray);
        }
    }

    #this function receives an $element argument, and then returns the particular element from
    #the json file that is stored there.
    public function getJsonElement($element)
    {
        if (file_exists($this->inputFile)) {
            $file = file_get_contents($this->inputFile);
            $array = json_decode($file, true);
            return $array[$element];
        }
        return [];
    }

    #this function takes a modification and an index and will read through the array until
    #the particular index is reached. The element at the index is then overwritten with the modification.
    #The new array is then stored in the json file.
    public function modifyJSONRecord($modification, $index) {
        if (file_exists($this->inputFile)) {
            $array = $this->jsonToArray();
            for($i = 0; $i < count($array); $i++) {
                #replaces the element at the index argument with the modification
                if($i == $index)
                    $array[$i] = $modification;
            }
            $newArray = json_encode($array);
            file_put_contents($this->inputFile, $newArray);
        }
    }

    #this function receives an index and will delete the element at that particular index
    public function deleteJSONRecord($index) {
        if (file_exists($this->inputFile)) {
            $array = $this->jsonToArray();
            array_splice($array, $index, 1);
            $newArray = json_encode($array);
            file_put_contents($this->inputFile, $newArray);
        }
    }
}
?>