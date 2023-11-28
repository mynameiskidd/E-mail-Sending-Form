<?php
// Null
$NameError="";
$EmailError="";
$WebsiteError="";
//On Click for Submit: If not null - taking user input; If null - Showing error
if(isset($_POST['Submit'])){
//Name Block	
 if(empty($_POST["Name"])){
$NameError="Name is Required";
 }
else{
$Name=UserInput($_POST["Name"]);
//Filtering user input with Regular Expressions
if(!preg_match("/^[A-Za-z\. ]*$/",$Name)){
    $NameError="Please Enter a valid name (no special characters/numbers)";
    }
}

//Email Block
if(empty($_POST["Email"])){
$EmailError="E-mail is Required";
 }
else{
$Email=UserInput($_POST["Email"]);
//Filtering user input with Regular Expressions
if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email))
{
    $EmailError="Invalid Email Format";
    }
}
//Link Block
if(empty($_POST["Website"])){
$WebsiteError="URL is Required";
 }
 else{
$Website=UserInput($_POST["Website"]);
if(!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)){
    $WebsiteError="Invalid Webside Address Format";	
    }

}  
//Displaying user input IF  the data is filtered and not empty
if(!empty($_POST["Name"])&&!empty($_POST["Email"])&&!empty($_POST["Website"])){
    if((preg_match("/^[A-Za-z\. ]*$/",$Name)==true)&&
    (preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)==true)&&
    (preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website))){
        echo "<h2>Thank you!</h2> <br>";
        echo "<h3>Name:".ucwords ($_POST["Name"])."<br></h3>";
        echo "<h3>E-mail: {$_POST["Email"]}<br></h3>";
        echo "<h3>Website: {$_POST["Website"]}<br></h3>";
        echo "<h3>Comments: {$_POST["Comment"]}<br></h3>";
    }

}
}


function UserInput($Data){
	return $Data;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Pics and Comments</title>
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            background-color: #ececec;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        input[type="text"],
        input[type="email"],
        textarea {
        border: 1px solid #fafafa;
        background-color: #e3f6f5; 
        width: 400px;
        padding: 0.5em;
        font-size: 1.0em;
        border-radius: 5px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
        transition: border-color 0.3s ease, box-shadow 0.3s ease; /* Transition for smooth effects */
}

                        /* Hover effect */
        input[type="text"]:hover,
        input[type="email"]:hover,
        textarea:hover {
        border-color: #bae8e8; /* Change border color on hover */
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Adjust box shadow on hover */
}

        .Error {
            color: red;
        }

        input[type="submit"] {
            background-color: #323232;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        h2 {
            color: turquoise;
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: black;
            text-align: center;
            font-size: 3em;
            font-family: 'Arial', sans-serif;
        }
     /*    h3 {
            color: turquoise;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: black;
            text-align: left;
            font-size: 1.5em;
            font-family: 'Arial', sans-serif;
        } */
        
    </style>
</head>
<body>
    <?php
        
    ?>

    <h2>Your Cat Pics:3</h2>

    <form action="index.php" method="post">
        <fieldset>
            <legend>Please fill out the following fields(* - are required fields)</legend>
            Your name*:<br>
            <input type="text" name="Name" value="">
            <span class="Error"><?php echo $NameError; ?></span><br>
            Your E-mail*:<br>
            <input type="email" name="Email" value="">
            <span class="Error"><?php echo $EmailError; ?></span><br>
            Url with cat.jpg*:<br>
            <input class="input" type="text" Name="Website" value="">
            <span class="Error"><?php echo $WebsiteError; ?></span><br>
            Comment(Optional):<br>
            <textarea name="Comment" rows="5" cols="25"></textarea><br><br>
            <input type="submit" name="Submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>
