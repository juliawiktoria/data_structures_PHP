<?php

// implementation of a Stack data structure in PHP

class Stack {
    // Properties
    public $stack;
    public $limit;
    public $size;

    // constructor
    function __construct($limit = 10, $empty_array = array()) {
      $this->stack = $empty_array;
      $this->limit = $limit;
    }

    // other methods

    function print_stack() {
      echo "The stack with limit $this->limit:\nBottom -> " . implode("--", $this->stack) . "\n";
    }

    function push($name) {
      $this->name = $name;
    }

    function pop() {
      return $this->name;
    }

    function get_size() {
      return $this->size;
    }

    function get_space_left() {
      return ($this->limit - $this->size);
    }
  }

$my_stack = new Stack(10, [1,2,3,4]);
$my_stack->print_stack();
?>