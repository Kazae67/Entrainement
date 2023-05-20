<?php
require '../app/Database.php';
require_once '../app/Table/Article.php';
$db = new App\Database('blog');
?>


<ul>
    <?php foreach($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?>
        
  <h2><a href="<?= $post->getUrl() ?>"><?= $post->titre;?></a></h2>
    
  <p><?= $post->getExtrait();?></p>

    <?php endforeach; ?>
</ul>
<?php



// à désactiver pour ne pas créer un nouveau tableau
// $count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date="' . date('Y-m-d H:i:s') . '"'); // Exec nous renvoie un entier 
// var_dump($count);
?>