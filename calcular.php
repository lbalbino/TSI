<html lang="en">
<head>
</head>
<body>
    <?php
        $opera = $_POST["operacao"]; 
     echo "O resultado da operacao $opera é = ";
     switch($_POST["operacao"]) 
     {
            case "somar":
            echo $_POST["primeiro"] + $_POST["segundo"];
            break;
            case "subtrair":
            echo $_POST["primeiro"] - $_POST["segundo"];
            break;
            case "multiplicar":
            echo $_POST["primeiro"] * $_POST["segundo"];
            break;
            case "dividir":
            echo $_POST["primeiro"] / $_POST["segundo"];
            break;   
    }
    ?>
</body>
</html>