<?php
        switch ($_REQUEST['response']) {
                case "XML":
                        header('Content-Type:application/xml');
                        $msg = "<msg>Hello Data it is " . gmdate("Y/m/d H:i:s") . "</msg>";
                        print($msg);
                        break;
                case "JSON":
                        header('Content-Type:application/json');
                        $msg->msg = "Hello Data it is " . gmdate("Y m d H:i:s");
                        $myJSON = json_encode($msg);
                        print($myJSON);
                        break;
                }
?>