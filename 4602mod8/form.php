<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="process.php" method="post" style=" width:40%;display:flex;flex-direction:column;">
        <h1>Student Union Form</h1>
        <input type="text" required name="name" id="name" placeholder="name">
        <input type="email" required name="email" id="email" placeholder="email">
        <input type="text" name="website" id="website" placeholder="website">
        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="comment"></textarea>
        <div>    
            <input type="radio" name="gender" value="male" required> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender"value="other"> Other
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>