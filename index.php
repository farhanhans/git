<html>
<head>
    <title>Tugas 6</title>
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
    </style>
</head>
<body>
<?php

if(isset($_GET['nama'])){

if($_GET['nama'] == "kosong"){

echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
}
?>
<center>
<div style="border:0; padding:10px; width:760px; height:auto;">
<form action="test.php" method="POST">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="orange" size="2">Form</font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Nama</td>
            <td><input type="text" name="nama" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Jenis Kelamin</td>
            <td><select name="kelamin">
                    <option>Pria</option<>
                    <option>Wanita</option>
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Alamat</td>
            <td><input type="text" name="alamat" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>tempat lahir</td>
            <td><input type="text" name="tempatlahir" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Usia</td>
            <td><input type="text" name="usia" size="20" maxlength="12" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
                <input type="reset" name="reset" value="Cancel"></td>
        </tr>
        </center>
    </table>
</form>
</div>
</body>
</html>