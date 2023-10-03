<?php
if (!empty($_POST)) {
    $_POST['name'] = test_input($_POST['name']);
    $_POST['email'] = test_input($_POST['email']);
    $_POST['comment'] = test_input($_POST['comment']);
    $_POST['website'] = test_input($_POST['website']);
    echo (!empty($_POST['name']))?((!preg_match("/^[a-zA-Z \~\.\']*$/",$_POST['name']))?"Input Name is Incorrect. Only letter white space. dot (.) and dash (-) are allowed <br>":"Thanks, ".$_POST['name']."<br>"):"Input name required<br>";
    echo (!empty($_POST['email']))?((filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))?"Your Email is ".$_POST['email']."<br>":"Invalid email format<br>"):"Input email required<br>";
    echo (!empty($_POST['website']))?((filter_var($_POST['website'],FILTER_VALIDATE_URL))?"Your Website is ".$_POST['website']."<br>":"Invalid URL format <br>"):"Input URL is none <br>";
    echo (!empty($_POST['comment']))?"Your comment is ".$_POST['comment']."<br>":"Your comment is none <br>";
    echo (!empty($_POST['gender']))?"Your gender is ".$_POST['gender']."<br>":"Input gender required <br>";
}
function test_input($data)
{
    return stripslashes(trim($data));
}
