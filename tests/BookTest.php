<?php

    /**
    * @BackupGlobals disabled
    * @BackupStaticAttributes disabled
    */

    require_once "src/Book.php";

    // $DB = new PDO('pgsql:host=localhost;dbname=Library');

    Class BookTest extends PHPUnit_Framework_TestCase
    {

        function test_getAuthorName()
        {
            //Arrange
            $author = "Jane Olstin";
            $title = "Pride and Prejudice";
            $id = null;
            $test_book = new Book($author, $title, $id);

            //Act
            $result = $test_book->getAuthor();

            //Assert
            $this->assertEquals("Jane Olstin", $result);

        }
    }


?>