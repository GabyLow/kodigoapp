<?php require_once('templates/Header.php'); ?>

<h1>Form to add new bootcamp</h1>

<form method ="POST" action ="<?php $_SERVER['PHP_SELF'] ?>">
    <input type = "text" name = "title" placeholder="Type your title"/>
    <input type = "text" name = "description" placeholder="Type your description"/>
    <input type = "date" name = "start_bootcamp" placeholder="Type start bootcamp date"/>
    <input type = "date" name = "end_bootcamp" placeholder="Type end bootcamp date"/>
    <input type = "number" name = "modules" placeholder="Type bootcamp modules "/>

    <button type = "Submit"> Add new Bootcamp </button>

</form>
<?php require_once('templates/Footer.php'); ?>