<?php

include("Author.php");
include("prototype.php");
echo 'Prototype Pattern';

    $author1 = new Author("K", "D");
    $doc1 = new Document("O psie ktory jezdzil koleja", "Tresc blablablabla", $author1);

    $doc1->addTask("Sprawdzian z wz. kreacyjnych");

    $doc2 = clone $doc1;
    $doc2->addTask("Cwiczenie praktyczne");
    print_r($doc2);

?>