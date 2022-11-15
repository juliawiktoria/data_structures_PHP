<?php

// tree node supporting only 2 children per parent
class TreeNode {
    public $value;
    public $left;
    public $right;
    public $level;

    function __construct($info) {
        $this->value = $info;
        $this->left = null;
        $this->right = null;
        $this->level = null;
    }
}

class BinaryTree{
    public $root;

    function __construct() {
        $this->root = null;
    }

    public function create($new_value) {
        if ($this->root == null) {
            $this->root = new TreeNode($new_value);
        } else {
            $current = $this->root;
            while ($current != null) {
                if ($new_value < $current->value) {
                    if ($current->left != null) {
                        $current = $current->left;
                    } else {
                        $current->left = new TreeNode($new_value);
                        break;
                    }
                } elseif ($new_value > $current->value) {
                    if ($current->right != null) {
                        $current = $current->right;
                    } else {
                        $current->right = new TreeNode($new_value);
                        break;
                    }
                } else {
                    break;
                }
            }
        }
    }

}

function inOrder($root) {
    if ($root != null){
        inOrder($root->left);
        echo $root->value . " ";
        inOrder($root->right);
    }
}

function preOrder($root) {
    if ($root != null) {
        echo $root->value . " ";
        preOrder($root->left);
        preOrder($root->right);
    }
}

function postOrder($root) {
    if ($root != null) {
        postOrder($root->left);
        postOrder($root->right);
        echo $root->value . " ";
    }
}


// $fp = fopen("php://stdin", "r");
// $n = fgets($fp);
// $numbers = array_map('intval', explode(' ', fgets($fp)));
// fclose($fp);

$numbers = [1, 2, 5, 3, 6, 4];

$my_tree = new BinaryTree();

for ($i = 0; $i < count($numbers); $i++) {
    $my_tree->create($numbers[$i]);
}

echo "Pre-order traversal: ";
preOrder($my_tree->root);
echo "\n\n";

echo "In-order traversal: ";
inOrder($my_tree->root);
echo "\n\n";

echo "Post-order traversal: ";
postOrder($my_tree->root);
echo "\n=====";

?>