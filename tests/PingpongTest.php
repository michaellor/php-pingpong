<?php

    require_once "src/Pingpong.php";

    class PingpongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_pingPong_Pong()
        {
            //Arrange
            $test_PingpongGenerator = new PingpongGenerator;
            $input = "10";

            //Act
            $result = $test_PingpongGenerator->makePingPong($input);

            //Assert
            $this->assertEquals("Pong", $result);
        }

        function test_pingPong_Ping()
        {
            //Arrange
            $test_PingpongGenerator = new PingpongGenerator;
            $input = "6";

            //Act
            $result = $test_PingpongGenerator->makePingPong($input);

            //Assert
            $this->assertEquals("Ping", $result);
        }

        function test_pingPong_PingPong()
        {
            //Arrange
            $test_PingpongGenerator = new PingpongGenerator;
            $input = "15";

            //Act
            $result = $test_PingpongGenerator->makePingPong($input);

            //Assert
            $this->assertEquals("PingPong", $result);
        }

    }

?>
