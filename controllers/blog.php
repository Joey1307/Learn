<?php
/*//complete code for controllers/blog.php
return "<h1>blog entries coming soon!</h1>";
*/
/*
include_once "models/Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table( $db );

$isEntryClicked = isset( $_GET['id'] );
if ($isEntryClicked ) {
    //show one entry
    $entryId = $_GET['id'];
    $entryData = $entryTable->getEntry( $entryId );  
    $blogOutput = include_once "views/entry-html.php";
} else {
    //show all entries
    $entries = $entryTable->getAllEntries();
    $blogOutput = include_once "views/list-entries-html.php";
}

return $blogOutput;
*/

//complete code for controllers/blog.php
include_once "models/Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table( $db );

//$entries is the PDOStatement returned from getAllEntries
$entries = $entryTable->getAllEntries();
//fetch data from the first row as a StdClass object
$oneEntry = $entries->fetchObject();
//print the object
$test = print_r( $oneEntry, true );
//return the printed object to index to see it in browser
return "<pre>$test</pre>";