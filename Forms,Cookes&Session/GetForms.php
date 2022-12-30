<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Get</title>
</head>

<body>
    <h1>Form get </h1>
    <form action="display.php" method="get">
        <fieldset>
            <legend>Student Enquiry form </legend>
            <p>
                <label for="input_text">Text:</label>
                <input type="text" name="input_text" id="input_text">
            </p>
            <p>
                <label for="input_email">Email:</label>
                <input type="email" name="input_email" id="input_email">
            </p>
        </fieldset>
        <p>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </p>
    </form>
</body>

</html>