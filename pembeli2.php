<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMBELI</title>
    <style>
    #no{
    background-color: lightcoral;
    width: 90%;
    margin: auto;
    text-align: left;
    padding: 50px;
}
#card{
    background-color: lightgrey;
    border-radius: 8px;
    height: 500px;
    margin-left: 350px;
    width: 500px;
}

#cardd-content{
    padding: 12px 20px;
}
#cardd-title{
    font-family: cursive;
    letter-spacing: 4px;
    padding-bottom: 23px;
    padding-top: 13px;
    text-align: center;
}
.login{
    padding: 20px;
    margin: 1px 60px;
    color: saddlebrown;
    font-family: fantasy;
    font-size: 30px;
}

#abl{
    margin: 0px 150px;
}
button{
    height: 50px;
    width: 300px;
    background-color: rosybrown;
    margin:auto;
    color:white;
}
h2{
    font-size: 30px;
    color: salmon;
}

</style>
    
</head>
<body>
    
    <div id ="no">
    <div id="card">
    <div id="cardd-content">
    <div id="cardd-title">
    <h2>STRUK PEMBELIAN</h2>
    <div class="underline-title"></div>
    </div>
    <div>

    <table>
    <div>
    <tr class="login">
            <td>NO MEJA</td> <td> : <?php echo $_GET['no_meja']?? ''?></td>
    </tr>
    </div>
    <div>
    <tr class="login">
            <td>NAMA</td> <td> : <?php echo $_GET['nama_pembeli']?? ''?></td>
    </tr>
    </div>
    <div >
    <tr class="login">
            <td>PORSI</td> <td> : <?php echo $_GET['jumlah_porsi']?? ''?></td>
    </tr>
    </div>
    <div >
    <tr class="login">
            <td>MAKANAN</td> <td> : <?php echo $_GET['makanan']?? ''?></td>
    </tr>
    </div>
    <div >
    <tr class="login">
            <td>MINUMAN</td> <td> : <?php echo $_GET['minuman']?? ''?></td>
    </tr>
    </div>
    </table>
  
    </div>
    </div>
    </div>
    </div>
    
</body>
</html>