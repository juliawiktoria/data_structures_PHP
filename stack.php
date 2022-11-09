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
      if ($this->get_space_left() >= 1) {
        array_push($this->stack, $new_value);
        $this->size++;
      } else {
        echo "No space on stack to push new values!\n";
      }
      
    }

    function pop() {
      if (!$this->is_empty()) {
        $this->size--;
        return array_pop($this->stack);
      } else {
        echo "Cannot pop from an empty stack!\n";
        return null;
      }
    }

    function get_size() {
      return $this->size;
    }

    function is_empty() {
      return $this->size == 0;
    }

    function get_space_left() {
      return ($this->limit - $this->size);
    }
  }

$my_stack = new Stack(4, [1,2,3,4]);
$my_stack->print_stack();

$my_stack->push(55);
$my_stack->print_stack();

$popped1 = $my_stack->pop();
echo "Popped element is $popped1\n";
$my_stack->print_stack();

?>