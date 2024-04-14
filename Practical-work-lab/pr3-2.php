<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Payment Calculator</title>
</head>

<body>
    <h2>Employee Payment Calculator</h2>
    <form action="" method="post">
        <label for="basic_salary">Enter Basic Salary:</label>
        <input type="number" id="basic_salary" name="basic_salary" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    // Check if form is submitted
    
    // Retrieve basic salary from form
    $basic_salary = $_POST['basic_salary'];

    // Calculations
    $da = 0.5 * $basic_salary;
    $hra = 0.1 * $basic_salary;
    $medical = 0.04 * $basic_salary;
    $gross_salary = $basic_salary + $da + $hra + $medical;
    $insurance = 0.07 * $gross_salary;
    $pf = 0.05 * $gross_salary;
    $deduction = $insurance + $pf;
    $net_salary = $gross_salary - $deduction;

    // Output
    echo "Net Salary: $net_salary";

    ?>
</body>

</html>