<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Model test 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <?php
    // define variables and set to empty values
    $name = $age = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $age = test_input($_POST["age"]);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="container">
        <h3 class="text-center">Table Info</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Sarah</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Mike</td>
                    <td>28</td>
                </tr>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo "<tr>";
                    echo "<td>" . $name . "</td>";
                    echo "<td>" . $age . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <br>
        <h2>Add New Person</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Name: <input type="text" name="name"><br>
            Age: <input type="text" name="age"><br>
            <input type="submit" name="submit" value="Submit">
        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>