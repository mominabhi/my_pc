<?php

class Teacher
{
    private $name;
    public function div()
    {
        echo"Division result";
    }
    protected function remind()
    {
        echo "remainder result";
    }
    private function sqrt()
    {
        echo "Squre Root ";
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;

    }
    public function all_access()
    {
       echo $this->div();
       echo $this->remind();
       echo  $this->sqrt();
    }
}
$oob=new Teacher();
$oob->setName('abhi');
echo "In this Way we can access the private variable: ". $oob->getName();
$oob->all_access();