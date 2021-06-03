<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
 <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body {
                font-family: Arial;
            }

            * {
                box-sizing: border-box;
            }

            form.example input[type=text] {
                padding: 10px;
                font-size: 17px;
                border: 1px solid grey;
                float: left;
                width: 80%;
                background: #f1f1f1;
            }

            form.example button {
                float: left;
                width: 20%;
                padding: 10px;
                background: #2196F3;
                color: white;
                font-size: 17px;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
            }

            form.example button:hover {
                background: #0b7dda;
            }

            form.example::after {
                content: "";
                clear: both;
                display: table;
            }
        </style>


        <style>

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <style>
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>


        <script>
         function validateForm() {
         var rule = document.forms["myForm"]["selectRule"].value;
         if (rule == "" || rule == null) {
         alert("Select a rule!!");
          return false;
         }
         var inter = document.forms["myForm"]["selectInter"].value;
          if (inter == "" || inter == null) {
          alert("Select an interestingness measure!!");
          return false;
          }
          var search = document.forms["myForm"]["searchBox"].value;
          if (search == "" || search == null) {
          alert("Search a lexical item!!");
          return false;
          }

         }
        </script>

        <style>

            body {
                font-family: Arial;
            }

            * {
                box-sizing: border-box;
            }

            form.example input[type=text] {
                padding: 10px;
                font-size: 17px;
                border: 1px solid grey;
                float: left;
                width: 80%;
                background: #f1f1f1;
            }

            form.example button {
                float: left;
                width: 20%;
                padding: 10px;
                background: #2196F3;
                color: white;
                font-size: 17px;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
            }

            form.example button:hover {
                background: #0b7dda;
            }

            form.example::after {
                content: "";
                clear: both;
                display: table;
            }
        </style>


        <style>
            div {
                background-color: lightgrey;
                width: 700px;
                border: 15px solid green;
                padding: 30px;
                margin: 20px;
            }
        </style>

        <style>
            select {
                width: 150px;
                margin: 10px;
            }
            select:focus {
                min-width: 150px;
                width: auto;
            }
        </style>

</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="margin:auto;max-width:700px" >  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
   <select name="filtro" id="filtro" >
   <option value="1">AllConf</option>}
   <option value="2">Coherence</option>
   <option value="3">Cosine</option>
   <option value="4">Kulczynski</option>
   <option value="5">MaxConf</option>
   <option value="6">Imbalance Ratio</option>
   </select>
   <br><br>
   Select interestingness measure:
  <input type="radio" name="AllConf" <?php if (isset($gender) && $gender=="AllConf") echo "checked";?> value="AllConf">AllConf
  <input type="radio" name="Coherence" <?php if (isset($gender) && $gender=="Coherence") echo "checked";?> value="Coherence">Coherence
  <input type="radio" name="Cosine" <?php if (isset($gender) && $gender=="Cosine") echo "checked";?> value="Cosine">Cosine
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
 Website: <input type="text" name="website" value="<?php echo $website;?>"  style="font-size: 14pt">

                <button type="submit" name="submit" value="Submit"><i class="fa fa-search"></i></button>
  <!--input type="submit" name="submit" value="Submit"-->  
</form>



 <div>
            <form class="example" action="index.php" name="myForm" onsubmit="return validateForm()" style="margin:auto;max-width:700px" method="post">
                <select id="select_page" style="width: 400px;" name="selectRule" class="operator">
                    <option value="" disabled selected>Select a rule</option>
                    <option value="predict_po_for_s_given_localized_l">predict_po_for_s_given_localized_l</option>
                    <option value="predict_p_for_o_given_localized_l">predict_p_for_o_given_localized_l</option>
                </select>
                <select name="selectInter" style="width: 400px" style="font-size: 14pt">
                    <option value="" disabled selected>Select an interestingness measure</option>
                    <option value="AllConf">AllConf</option>}
                    <option value="Coherence">Coherence</option>
                    <option value="Cosine">Cosine</option>
                    <option value="Kulczynski">Kulczynski</option>
                    <option value="MaxConf">MaxConf</option>
                    <option value="Imbalance Ratio">Imbalance Ratio</option>
                </select>
                <input type="text" placeholder="enter a lexical element" name="searchBox" placeholder="" style="font-size: 14pt">
                <button type="submit" name="submit" value="Submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

<script type="text/javascript" language="javascript">
document.getElementById('filtro').onchange=function(){
    document.getElementById('form1').submit();
}

function setSelected(value){
    var filtro = document.getElementById('filtro');
    var options = filtro.options;
    for(var i=0;i<options.length;i++){
        if(options[i].value == value){
            filtro.selectedIndex = i;
        }
    }   
}
</script>



<?php
if(isset($_POST['filtro'])){
    $selectedValue = $_POST['filtro'];
    // code to process the data
    //...

    // code to remember dropdown
    echo "<script type='text/javascript'>setSelected($selectedValue)</script>";


}



echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
