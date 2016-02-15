<?php

    class PingpongGenerator
    {
        private $input;

        function __construct($input)
        {
            $this->input = $input;
        }

        function setInput($new_input)
        {
            $this->input = $new_input;
        }

        function getInput()
        {
            return $this->input;
        }

    }

    function makePingPong($input)
    {
        $numberarray = array();

        while ($input > 0) {
            if (($input % 3 ==0) && ($input % 5 == 0)) {
                array_push($numberarray, "PingPong");
            }
            elseif ($input % 3 == 0) {
                array_push($numberarray, "Ping");
            }
            elseif ($input % 5 == 0) {
                array_push($numberarray, "Pong");
            }

            else {
                array_push($numberarray, $input);
            }
            $input = $input - 1;

        }
        return $numberarray;
    }


?>
