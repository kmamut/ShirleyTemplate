<?php
// »phpunit test« to call all Tests: starting in
// working-directory ShirleyTemplate. (or using plugin,
// or »Run«/»External Tools«.
// require_once 'PHPUnit/Framework.php';

require_once (dirname(__FILE__) . '/../../Adder.php'); // example for relative path

/**
 * Test class for Adder.
 * Generated by PHPUnit on 2011-04-06 at 16:34:15.
 */
class AdderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Adder
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Adder;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @todo Implement testGetValue().
     */
    public function testGetValue()
    {
        $this->assertEquals(42,$this->object->getValue());
    }
}
?>
