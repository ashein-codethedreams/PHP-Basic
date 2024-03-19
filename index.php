<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $employees = [
        ["name" => "John", "employeeNo" => 001, "role" => "Admin"],
        ["name" => "Alex", "employeeNo" => 002, "role" => "Staff"],
        ["name" => "Mike", "employeeNo" => 003, "role" => "Staff"]
    ];

    foreach ($employees as $employee) {
        if ($employee['role'] == "Admin") {
    ?>
            <h1><?php echo $employee['name'] ?></h1>
            <h1> His emplyoee number is <?php echo $employee['employeeNo'] . "." ?></h1>
    <?php
        }
    }
    ?>
</body>

</html>