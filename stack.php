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
      $this->size = count($this->stack);
    }

    // other methods

    function print_stack() {
      echo "The stack of size $this->size with limit $this->limit:\nBottom -> " . implode("--", $this->stack) . "\n";
    }

    function push($new_value) {
      array_push($this->stack, $new_value);
      $this->size++;
    }

    function pop() {
      $this->size--;
      return array_pop($this->stack);
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
$my_stack->push(55);
$my_stack->print_stack();
$popped = $my_stack->pop();
echo "Popped element is $popped\n";
$my_stack->print_stack();
?>