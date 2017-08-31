<!DOCTYPE html>
<html>
<head>
    <title>Formos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Formos</h1>
        <div class="row"> 
            <div class="col">
                <form method="POST">
                    <input type="text" name="num1">
                    <input type="text" name="num2">
                    <select name="operations">
                        <option name="Sudetis">sudetis</option>
                        <option name="Atimtis">atimtis</option>
                        <option name="daugyba">daugyba</option>
                        <option name="dalyba">dalyba</option>
                    </select>
                    <input type="submit" value="Calculate">

                </form>
            </div>
            <div class="col">
                <?php print_r($_POST); ?>
                Rezultatas: <br/>

                <?php

                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $operation = $_POST["operations"];

                    if($operation == "sudetis")
                    {
                        $answer_add = $num1 + $num2;
                        echo $answer_add;
                    }

                    if($operation == "atimtis"){
                        $answer_sub = $num1 - $num2;
                        echo $answer_sub;
                    }

                    if($operation == "daugyba"){
                        $answer_mult = $num1 * $num2;
                        echo $answer_mult;
                    }

                    if($operation == "dalyba"){
                        $answer_div = $num1 / $num2;
                        echo $answer_div;
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>