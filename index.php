<?php

class Tree {

    private $db_connect = null;
    public  $category = array();
    public  $tree = array();

    public function __construct() {
#        $this->db_connect = new PDO("mysql:dbname=devenergru_drup1;host=localhost", "devenergru_drup1", "weduucixwa");
        $this->category = $this->getCategoryArray();
     }

    private function getCategoryArray() {
        $category_array = [
		0 => [
			[
				'id_tree_test' => 2,
				'id_parent' => 0,
				'title' => "Два"
			]
		],
		1 => [
			[
				'id_tree_test' => 4,
				'id_parent' => 1,
				'title' => "Четыре"
			]

		],
		2 => [
			[
				'id_tree_test' => 1,
				'id_parent' => 2,
				'title' => "Один"
			],
			[
				'id_tree_test' => 5,
				'id_parent' => 2,
				'title' => "Пять"
			]
		],
		4 => [
			[
				'id_tree_test' => 3,
				'id_parent' => 4,
				'title' => "Три"
			]
		]
 	];

        return $category_array;
    }

    public function buildTree($parent_id, $level) {
        if (isset($this->category[$parent_id])) { 
            foreach ($this->category[$parent_id] as $value) { 
                echo "<div style=\"margin-left:" . ($level * 25) . "px;\">" . $value["id_tree_test"] . " : " . $value["title"] . "</div>";
                $level++;
                $this->buildTree($value["id_tree_test"], $level); 
                $level--;
            }
        }
    }

}

$tree = new Tree();
$tree->buildTree(0, 0); 

?>