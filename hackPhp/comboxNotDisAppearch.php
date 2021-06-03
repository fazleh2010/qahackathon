<html><body>
<form action="index.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <select name="filtro" id="filtro" >
   <option value="0">Popularidade</option>
   <option value="1">A-Z</option>
   <option value="2">Z-A</option>
 </select>
</form>

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

?>
</body>
</html>
