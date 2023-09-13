<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="STYLE.CSS">
    <title>Order Summary</title>
    <style>
        /* Add your CSS styles here or link an external stylesheet */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .content {
            background-color: #fff;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin: 0;
            padding: 0;
        }

        p {
            margin: 0.5em 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Online Ticket Shop</h1>
    </header>
    <div class="content">
        <h2>Order Summary</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<p><strong>Customer Name:</strong> " . $_POST["customerName"] . "</p>";
            echo "<p><strong>Gender:</strong> " . $_POST["gender"] . "</p>";
            echo "<p><strong>Age:</strong> " . $_POST["age"] . "</p>";
            echo "<p><strong>Address:</strong> " . $_POST["address"] . "</p>";
            echo "<p><strong>Cinema to Watch:</strong> " . $_POST["cinema"] . "</p>";
            echo "<p><strong>Number of Tickets:</strong> " . $_POST["numTickets"] . "</p>";
            
            if (!empty($_POST["addOns"])) {
                $addOns = implode(", ", $_POST["addOns"]);
                echo "<p><strong>Add Ons:</strong> " . $addOns . "</p>";
            } else {
                echo "<p><strong>Add Ons:</strong> None</p>";
            }
        }
        ?>
    </div>
</body>
</html>
