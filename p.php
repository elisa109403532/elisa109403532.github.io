<?php
            $f = $_GET['f'];
            echo "document.write('".$f."');";
            data_default_timezone_set('Asia/Taipei');
            $datetime = date("H");

            if($datetime<"10"){
                echo "Good morning!";
            } else if($datetime <"14"){
                echo "Good afternoon!";
            } else if($datetime <"18"){
                echo "Good evening!";
            } else {
                echo "Good night!";
            }
?>