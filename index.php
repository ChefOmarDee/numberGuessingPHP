<!DOCTYPE html>    <!-- guess.php -->
<html>
<body>

<style type="text/css">
body{
<!-- ADDING THE QUESTION MARK BACKGROUND AND COLORSCHEME -->
       background-image:black;
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVg8SJQQ4voNmKTTyxwn3rrETlkLmVMgyrmA&usqp=CAU');
}
p{
<!-- MAKING "P" TEXT CENTERED AND MAKING SURE IT GETS A FONT AND A BACKGROUND -->
 display:inline-block;
    margin:10px auto auto auto;
    font-family: 'Raleway', sans-serif;
    margin:auto;
    padding:10px;
    font-display: bold;
    color:#011126;
    font-size:1em;
    border-radius: 15px;
    border: 1.5px #222;
    background-color: WHITE;
    width:48.5vw;
    align-self:center;
 color:#F9A7B0;

}
form{
<!-- MAKING "FROM" TEXT CENTERED AND MAKING SURE IT GETS A FONT AND A BACKGROUND -->

 display:inline-block;
    margin:10px auto auto auto;
    font-family: 'Raleway', sans-serif;
    margin:auto;
    padding:10px;
    font-display: bold;
    color:#011126;
    font-size:1em;
    border-radius: 15px;
    border: 1.5px #222;
    background-color: WHITE;
    width:48.5vw;
    align-self:center;
    color:#F9A7B0;
}




</style>

<?php
session_start();
//STARTED SESSION AND MAKING SESSION VARIABLES THAT PERSIST EVEN AFTER AN INPUT IS GIVE, ESSESENTIALLY SESSION VARIABLES MAKE THE CODE "REMEMBER"
$_SESSION['randNum'] = isset($_SESSION['randNum']) ? $_SESSION['randNum'] : rand(1, 10);
//INITIALIZE AND DEFINE RANDNUM TO A RANDOM NUMBER
$randNum = $_SESSION['randNum'];
//SETTING USERGUESS TO WHAT USER GIVEN VALUES
$userGuess=$_POST["userGuess"];
//CREATED AN IF THEN TREE TO GIVE HINTS ON WHAT THE NUMBER IS BASED ON LAST IMMEDIATE INPUT(LAST INPUT WAS TOO HIGH, TOO LOW, ETC)
if (isset($randNum)&&(!($userGuess<1||$userGuess>10))) {
    if ($userGuess<$randNum) {
            echo "<center><p> your guess was low </p> </center>";
           
        }
    if ($userGuess>$randNum) {
            echo "<center><p>your guess was high! </p></center>";
        }
    if ($userGuess==$randNum) {
            echo "<center><p>Good Job, your guess was correct, $randNum. If you want you can try to guess the next number by inputting a value into the box </p></center>";
                         unset($_SESSION["randNum"]);
    }
  }
else {
    echo "<center><p>you MUST enter a valid response</p></center>";
}
//
?>
<center>
<!-- CREATING QUESTIONAIR AND ALSO MAKING FORM TO SEND VALUES THROUGH POST TO THE PHP CODE ABOVE BY SETTING METHOD TO POST -->
<form action="index.php" method="POST">
<p> I'm thinking of a number between 1 and 10 </p>
<p>What will be your Guess?</p>
<input type="text" name="userGuess"/>
<input type="submit" value="Guess"/>
</form>
</center>
</body>
</html>