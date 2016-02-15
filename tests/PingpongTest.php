<?php

    require_once "src/Pingpong.php";

    class PingpongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_pingPong_Pong()
        {
            //Arrange
            // $test_PingpongGenerator = new PingpongGenerator;
            $input = 3;

            //Act
            $result = makePingPong($input);
            //Assert
            $this->assertEquals(["Ping", "2", "1"], $result);
        }

        function test_pingPong_Ping()
        {
            //Arrange
            // $test_PingpongGenerator = new PingpongGenerator;
            $input = "6";

            //Act
            $result = makePingPong($input);

            //Assert
            $this->assertEquals(["Ping", "Pong", "4", "Ping", "2", "1"], $result);
        }

        function test_pingPong_PingPong()
        {
            //Arrange
            // $test_PingpongGenerator = new PingpongGenerator;
            $input = "4";

            //Act
            $result = makePingPong($input);

            //Assert
            $this->assertEquals(["4", "Ping", "2", "1"], $result);
        }

    }

?>
