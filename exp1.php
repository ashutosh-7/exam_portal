<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body><form><input type="radio" name="bt" id="btn1">
<input type="radio" name="bt" id="btn2">
<input type="radio" name="bt" id="btn3">
<input type="radio" name="bt" id="btn4">
<input type="submit" name="submit">
</form>

</body>
</html>
<?php
require 'configure.php';

    echo" <script>
    var x = 1;
    if(x==1)
    {document.getElementById('btn1').checked=true;}
    if(x==2)
    {document.getElementById('btn2').checked=true;}
    if(x==3)
    {document.getElementById('btn3').checked=true;}
    if(x==4)
    {document.getElementById('btn4').checked=true;}
    </script>
";

?>