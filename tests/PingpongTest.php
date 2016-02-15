<?php

    require_once "src/Pingpong.php";

    class PingpongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_pingPong()
        {
            //Arrange
            $test_PingpongGenerator = new PingpongGenerator;
            $input = "10";

            //Act
            $result = $test_PingpongGenerator->makePingPong($input);

            //Assert
            $this->assertEquals("Pong", $result);
        }

    }

?>
