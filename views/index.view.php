
<?php require "components/header.php"; //gets html code thats from doctype to <body> ?>
<?php require "components/navbar.php"; //gets html code for navbar ?>


<h1>Blog</h1>

<form>
<input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
<button>Search!</button>
</form>

<?php if (count($posts) == 0){ ?>
 <p>No results hoe</p>
<?php } ?>


<ul>
<?php foreach($posts as $post){ ?>
    <li> <?= $post['content' ] ?> </li> 
<?php } ?>
</ul>


<?php require "components/footer.php"; //gets html code thats from doctype to </body> ?>