<?php

$_POST['submitted_var_1']=19;
// $_POST['submitted_var_12']=10;
// $_POST['submitted_var_3']=11;
// $_POST['dangerous_var']=12;
foreach ($_POST as $key => $value)
{
    // echo $key;
    // exit;
        switch ($key)
        {
                case "submitted_var_1":
                    echo "Submited 1";
                case "submitted_var_2":
                    echo "Submited 2";
                case "submitted_var_3":
                        $$key = $value; echo $$key.PHP_EOL; break;

                case "dangerous_var":
                        $value = $value;
                        $$key = $value;
                        echo $$key.PHP_EOL;
                        break;
        }
}
?>