<?php

    class PingpongGenerator
    {
        function makePingPong($input)
        {
            $numberarray = array();
            $count = $input;

            while ($count > 0) {
                if (($input % 3 ==0) && ($input % 5 == 0)) {
                    return "PingPong";
                }
                elseif ($input % 3 == 0) {
                    return "Ping";
                }
                elseif ($input % 5 == 0) {
                    return "Pong";
                }

                else {
                    return $input;
                }
                $count = $count - 1;
            }
        }
    }

?>
