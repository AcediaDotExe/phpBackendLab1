<?php

namespace lab1;

use Exception;

require_once('Employee.php');
require_once('Department.php');

function main(){
//    check_employees();
    check_department();
}

function check_employees(){
    try{
        //все классно
        $empl1 = new Employee(1, "Tom", "999", "12.3.2023");

        //беда с именем, в нем цифры
        $empl2 = new Employee(1, "mda1488", "999", "12.3.2023");

        //очень длинное имя
        $empl3 = new Employee(
            1,
            "VeryLongNAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAmeow",
            "999",
            "12.3.2023"
        );

        //буквенная зарплата
        $empl4 = new Employee(1, "Tom", "Yes, BIG salary", "12.3.2023");

        //неправильный формат даты (через /)
        $empl5 = new Employee(1, "Tom", "999", "12/3/2023");

        //несуществующая дата
        $empl6 = new Employee(1, "Tom", "999", "33/3/2023");

    } catch (Exception $e){
        echo $e;
    }
}

function check_department(){
    $empls1 = array();
    for ($i = 0; $i < 1; $i++) {
        $empls1[$i] = new Employee($i, "Tom", "2000", "12.3.2023");
    }

    $empls2 = array();
    for ($i = 0; $i < 2; $i++) {
        $empls2[$i] = new Employee($i, "Bob", "1000", "12.3.2023");
    }

    $empls3 = array();
    for ($i = 0; $i < 3; $i++) {
        $empls3[$i] = new Employee($i, "Biba", "0", "12.3.2023");
    }

    $departments = array();
    $departments[0] = new Department("SameSalary1", $empls1);
    $departments[1] = new Department("SameSalary2", $empls2);
    $departments[2] = new Department("MorePeople", $empls3);

    Department::filter($departments);

}

main();
