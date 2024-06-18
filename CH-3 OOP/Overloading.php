<?php
class A {
    public function __call($name, $s) {
        if ($name === 'add') {
            return $this->addNumbers(...$s);
        }
    }

    private function addNumbers(...$num) {
        return array_sum($num);
    }
}

$obj = new A();
echo $obj->add(1) . "\n";        // Output: 1
echo $obj->add(1, 1) . "\n";     // Output: 2
echo $obj->add(1, 1, 1) . "\n";  // Output: 3
?>
