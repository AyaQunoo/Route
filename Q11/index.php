<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: <?php if (isset($_COOKIE['bgcolor'])) echo $_COOKIE['bgcolor'] ?>;
    }
</style>

<body>

    <form method="get" action="../Q11/handle.php">
        <label for="bg">Choose a color:</label>

        <select name="bgcolor" id="bg">
            <option value="red">red</option>
            <option value="green">green</option>
            <option value="blue">blue</option>
            <option value="black">black</option>

        </select>
        <button type="submit" name="submit">submit</button>

    </form>

</body>

</html>