<?php

// implementation of a Stack data structure in PHP

class Stack {
    // Properties
    private $stack;
    private $limit;
    public $size;

    // constructor
    private function __construct($limit = 10, $initial = array()) {

    }

    // other methods
    function push($name) {
      $this->name = $name;
    }

    function pop() {
      return $this->name;
    }

    function get_size() {
      return $this->$size;
    }

    function get_space_left() {
      return ($this->$limit - $this->$size);
    }
  }

?>