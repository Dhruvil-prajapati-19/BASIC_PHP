<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <h2>Registration Form</h2>
    <form action="pr2sdata.php">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
        </div>
        <div>
            <label for="branch">Branch:</label>
            <input type="text" id="branch" name="branch" required>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

</body>

</html>