<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <img class="picnic" src="picnic.jpg" alt="IIT" >
    <div class="container">
    <h3> Welcome to IIT Family Tour </h3>
    <p> Enter your details and submit the form to participate</p>
    <Form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other info here"> </textarea>
        <button class="btn">Submit</button>
        <button class="btn">Reset </button>

    </Form>
    </div>
   
    <script src="index.js"></script>
</body>
</html>