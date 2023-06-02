<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prime Numbers</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <h1>Prime Numbers Generator</h1>
            <p>Welcome to my prime number generator page</p>
            <p>Simply input a numerical limit to get all the numbers that are prime</p>
        </div>
    </header>
    <main>
        <div class="container">
            <form method="post">
                <div class="form-group">
                    <label for="start">The starting number:</label>
                    <input type="number" id="start" name="start" required>
                </div>
                <div class="form-group">
                    <label for="end">The ending number:</label>
                    <input type="number" id="end" name="end" required>
                </div>
                <button type="submit">Generate All the Prime Numbers</button>
            </form>
            <?php
            function is_prime($num)
            {
                if ($num <= 1) {
                    return false;
                }
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0) {
                        return false;
                    }
                }
                return true;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $start = $_POST["start"];
                $end = $_POST["end"];

                echo "<table>";
                echo "<tr><th>Prime Numbers from $start to $end</th></tr>";
                for ($i = $start; $i <= $end; $i++) {
                    if (is_prime($i)) {
                        echo "<tr><td>$i</td></tr>";
                    }
                }
                echo "</table>";
            }
            ?>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; Prime Numbers Generator</p>
        </div>
    </footer>
</body>

</html>