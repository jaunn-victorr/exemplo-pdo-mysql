<?php
require_once './vendor/autoload.php';

use ExemploPDOMysql\MySQLConnection; 

$bd = new MySQLConnection(); 

$comando = $bd->prepare('select * from generos');
$comando-> execute();
$generos = $comando->fetchAll(PDO::FETCH_ASSOC);

$_tiltle= 'Gêneros';
?>

<?php include('./includes/reader.php');?>
            <a class="btn btn-primary" href="insert.php">Novo gênero</a>
            
                    <table class="table table-borderless">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>&nbsp;</th>
                        </tr>
                            <?php foreach($generos as $g): ?>
                            <tr>
                                <td><?= $g['id']?></td>
                                <td><?=$g['nome'] ?></td>
                                <td> <a class="btn btn-secondary" href="update.php?id=<?=$g['id'] ?>">Editar</a> |
                                    <a class="btn btn-danger" href="delete.php?id=<?=$g['id'] ?>">Remover</a></td>
                            </tr>
                            <?php endforeach ?>
                        </table>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
                        
<?php include('./includes/footer.php');?>