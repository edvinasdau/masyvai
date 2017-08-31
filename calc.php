<?php

                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $operation = $_POST["operations"];

                    if($operation == "add")
                    {
                        $answer_add = $num1 + $num2;
                        echo $num1. "+" .$num2." = ";
                        echo $answer_add;
                    }

                    if($operation == "sub"){
                        $answer_sub = $num1 - $num2;
                        echo $answer_sub;
                    }

                    if($operation == "mult"){
                        $answer_mult = $num1 * $num2;
                        echo $answer_mult;
                    }

                    if($operation == "div"){
                        $answer_div = $num1 / $num2;
                        echo $answer_div;
                    }
?>