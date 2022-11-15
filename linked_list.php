<?php
// https://www.hackerrank.com/challenges/print-the-elements-of-a-linked-list/problem

// node with a single link only
class Node {
    public $value;
    public $next;

    function __construct($val) {
        $this->value = $val;
        $this->next = null;
    }
}

// singly linked list
class LinkedList {
    public $head;
    public $tail;

    function __construct() {
        $this->head = null;
    }

    function instert_node($new_node) {
        echo "Inserting $new_node into the LinkedList!\n";
        $node = new Node($new_node);

        if ($this->head == null) {
            $this->head = $node;
        } else {
            $current = $this->head;
            while ($current != null) {
                if ($current->next == null) {
                    $current->next = $node;
                    break;
                } else {
                    $current = $current->next;
                }
            }
        }
    }
}

function printLinkedList($list_head) {
    while ($list_head != null) {
        echo $list_head->value . "\n";
        $list_head = $list_head->next;
    }
}

$input_array = [16, 13];

$my_list = new LinkedList();

foreach ($input_array as $number) {
    $my_list->instert_node($number);
}

printLinkedList($my_list->head);