<?php
//create a program that shows the stops of buses together with their prices
//create a program that calculates the performance of students
//using interfaces, define the marks that show highest and lowest marks
//output class Student who inheirts functionalities of interface then shows the student with the highest marks
interface markingScheme{
    //interfaces only declares methods and variables but does not assign values into them;
    //Interface enables you to model multiple inheritance.
    //method should be public
   public function markingGrade();
   public function name();
   public function average();

}

class Student implements markingScheme{
    public function __construct(public int $marks)
    {
        $this->marks = $marks;
    }
    public function markingGrade()
    {
        if($this->marks < 50)
        {
               echo "marks is fair";
        }
        else if($this->marks > 50)
        {
            echo "marks is high";
        };

    }
    public function name()
    {
        $myname = readline('Enter your name');
        echo 'Nice to meet you '. $myname;

    }
    public function average()
    {
        echo $this->marks/2;
    }
}
class Child implements markingScheme{
    public function name()
    {
        $myname = readline('Enter your name');
        echo 'Nice to meet you '. $myname;
    }

    public function markingGrade()
    {
        echo "grade not provided";
    }
    public function average()
    {
        echo "find average";
    }

}

$student1 = new Student(45);
// print_r($student1->markingGrade()). PHP_EOL;
print_r($student1->name())





?>