<!DOCTYPEhtml>
<html>
    <head>
        <title>Hasil Login</title>
        <style media="screen">
        body{
            background:url("pict/1.jpg");
            background-size : cover;
            margin : 0;
            font-family: arial;
        }
        table {
            width:350px;
            margin:100px auto;
            padding:20px 40px;
            border:1px solid #ccc;
            background:rgba(255, 255, 255, 0.77);
            border-radius: 10px;
            box-shadow: 0 0 10px #fff;
            }
         h1 {
          text-align: center;
          color:blue;
         }

        </style>
    </head>
    <body>
        <form action="login.php" method="post" name="form1">
            <table>
                <tr>
                    <td>
                        <?php
                        if(isset($_POST['Login'])){
                            $login = $_POST['username'];
                            $pass  = $_POST['password'];

                            if($login == "username" && $pass == "password") {
                                echo "<h1>Login Berhasil</h1>";
                            } 
                            else {
                                echo "<h1>Login Gagal</h1>";
                            }
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>