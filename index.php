<?php

include_once('bookModel.php');

$data= BookModel::getBooks();
print_r($data);