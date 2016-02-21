<?php
/**
 * Created by PhpStorm.
 * User: AleksLi
 */

abstract class AbstractClass {

    /* Данный метод должен быть определён в дочернем классе */
    abstract protected function getValue();

    /* Общий метод */
    public function printIt() {
      print $this->getValue();
    }

}

class ConcreteClass1 extends AbstractClass {

    protected function getValue() {
        return "ConcreteClass1";
    }

}

class ConcreteClass2 extends AbstractClass {

    protected function getValue() {
        return "ConcreteClass2";
    }

}

$class1 = new ConcreteClass1;
$class1->printIt();

$class2 = new ConcreteClass2;
$class2->printIt();
?>