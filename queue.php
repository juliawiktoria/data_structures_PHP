<?php

class Queue {
    function __construct($capacity=10) {
        $this->queue = [];
        $this->front = 0;
        $this->rear = 0;
        $this->size = 0;
        $this->capacity = $capacity;
    }

    function enqueue($new_elem) {
        $this->size++;
    }

    function dequeue() {
        if(!$this->isEmpty()) {
            $popped = 0;
            $this->size--;
            return $popped;
        } else {
            echo "Cannot dequeue of an empty queue\n";
            return null;
        }
    }

    function get_front() {
        if(!$this->isEmpty()) {

        } else {
            echo "The queue is empty, cannot return the front element!\n";
        }
    }

    function get_rear() {
        if(!$this->isEmpty()) {

        } else {
            echo "The queue is empty, cannot return the rear element!\n";
        }
    }

    function display() {
        if(!$this->isEmpty()) {

        }
    }

    function isEmpty() {
        return $this->size == 0;
    }

    function getSize() {
        return count($this->queue);
    }
}