<?php

class Queue {
    function __construct($capacity=10) {
        $this->queue = [];
        $this->front = $this->rear = 0;
        $this->size = 0;
        $this->capacity = $capacity;
    }

    function enqueue($new_elem) {
        if(!$this->isFull()) {
            array_push($this->queue, $new_elem);
            $this->size++;
            $this->rear = $this->size - 1;
        } else {
            echo "The queue is full, dequeue before enqueueing!\n";
        }
    }

    function dequeue() {
        if(!$this->isEmpty()) {
            // popping the first element of the queue off
            $popped = array_shift($this->queue);
            $this->size--;

            // updating the rear index
            $this->rear = $this->size - 1;
            return $popped;
        } else {
            echo "Cannot dequeue of an empty queue\n";
            return null;
        }
    }

    function getFront() {
        if(!$this->isEmpty()) {
            return $this->queue[$this->front];
        } else {
            echo "The queue is empty, cannot return the front element!\n";
        }
    }

    function getRear() {
        if(!$this->isEmpty()) {
            return $this->queue[$this->rear];
        } else {
            echo "The queue is empty, cannot return the rear element!\n";
        }
    }

    function display() {
        if(!$this->isEmpty()) {
            echo "Front => " . implode("--", $this->queue) . " <= Rear\n";
        } else {
            echo "Cannot display an empty queue!\n";
        }
    }

    function isEmpty() {
        return $this->size == 0;
    }

    function getSize() {
        return count($this->queue);
    }

    function isFull() {
        return $this->getSize() == $this->capacity;
    }
}

$my_queue = new Queue();

$my_queue->display();
$my_queue->enqueue(99);

echo $my_queue->getFront();
echo $my_queue->getRear();

$my_queue->enqueue(11);
$my_queue->enqueue(33);

$my_queue->display();
$deq = $my_queue->dequeue();

echo $deq . "\n";
$my_queue->display();
