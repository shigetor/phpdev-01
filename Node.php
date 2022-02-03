<?php


Class Node{
    public function __construct(string $name){
        $this->name = $name;
    }
    public function getName(): string{
        return $this->name;
    }
    public function getChildren(): array{
        $array[]=$name;
        return $array;
    }
    function addChild(Node $node){
        $depth =1;
        if (isset($this->array[0])){
            foreach($this->array[0] as $value){
                echo "*"*$depth + $value[0];
                $depth+=1;
                $this->addChild();
            }
        }
    }
}
//пока еще разбираюсь в ооп на php, еще не могу прикинуть как обновлять глубину или перестраиваться когда родитель обновляется