<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scnkalkulator</title>
</head>
<body>
    kalkulator
    <form action="" method="post" name="font1">
        <input type="text" name="text1"id=""><br>

        <input type="button" value="1" onclick="font1.text1.value+='1'">
        <input type="button" value="2" onclick="font1.text1.value+='2'">
        <input type="button" value="3" onclick="font1.text1.value+='3'"><br>
        <input type="button" value="4" onclick="font1.text1.value+='4'">
        <input type="button" value="5" onclick="font1.text1.value+='5'">
        <input type="button" value="6" onclick="font1.text1.value+='6'"><br>
        <input type="button" value="7" onclick="font1.text1.value+='7'">
        <input type="button" value="8" onclick="font1.text1.value+='8'">
        <input type="button" value="9" onclick="font1.text1.value+='9'"><br>
        <input type="button" value="0" onclick="font1.text1.value+='0'">
        <input type="button" value="+" onclick="font1.text1.value+='+'">
        <input type="button" value="-" onclick="font1.text1.value+='-'">
        <input type="button" value="x" onclick="font1.text1.value+='*'">
        <input type="button" value=":" onclick="font1.text1.value+='/'">
        <input type="button" value="=" onclick="font1.text1.value=eval(form1.text1value)">

        <td colspan=4>HASIL: {{ $hasil }}</td>
    </form>
</body>
</html>