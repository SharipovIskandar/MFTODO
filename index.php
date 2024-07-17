<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> MYFTODO </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
    <div class="form-container">
        <form method="post" action="ui.php">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="text" name="lastName" class="form-control" placeholder="Last Name" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Save</button>
        </form>
    </div>

    <div class="mt-4">
        <table class="styled-table table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Status</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require 'connDB.php';
            require 'todo.php';

            $db = cannDB::connect();
            $todo = new todo($db);
            $Todo = $todo->get();

            if ($Todo) {
                foreach ($Todo as $row) {
                    $rowClass = $row['status'] ? 'table-success' : '';
                    echo "<tr class='{$rowClass}'>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['lastName'] . "</td>";
                    echo "<td>
                            <form method='post' action='status.php' style='display:inline;'>
                                <input type='hidden' name='id' value='" . $row['id'] . "'>
                                <button type='submit' class='btn btn-warning'>Update Status</button>
                            </form>
                          </td>";
                    echo "<td>
                            <form method='post' action='delete.php' style='display:inline;'>
                                <input type='hidden' name='delete_id' value='" . $row['id'] . "'>
                                <button type='submit' class='btn btn-danger'>Delete</button>
                            </form>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No records found</td></tr>";
            }
            ?>
            </tbody>

        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
    .form-container {
        max-width: 500px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
    }

    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 18px;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .btn {
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px 2px;
        cursor: pointer;
        border-radius: 5px;
    }

    .btn-success {
        background-color: #009879;
        color: white;
        border: none;
    }

    .btn-success:hover {
        background-color: #007a63;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }
    .form-container .btn-block {
        display: block;
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        margin-top: 10px;
        background-color: #009879;
        color: white;
        border: none;
        border-radius: 5px;
    }

    .form-container .btn-block:hover {
        background-color: #007a63;
    }

</style>
