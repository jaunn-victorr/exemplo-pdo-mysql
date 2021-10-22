<?php
require_once './vendor/autoload.php';

use ExemploPDOMysql\MySQLConnection; //PDO;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $bd = new MySQLConnection; //new PDO('mysql:host=localhost;dbname=biblioteca', 'root', '');
    $comando = $bd->prepare('INSERT INTO generos(nome) values (:nome)');
    $comando->execute([':nome' => $_POST['nome']]);
    header('Location:index.php');
}

$_tiltle= 'novo gênero';
?>

<?php include('./includes/reader.php');?>
        <h1>Novo Gênero</h1>
        <form action="insert.php" method= post>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" id="">
            </div>
            <br>
            <a class="btn btn-secondary" href="index.php">Voltar</a>
            <button class="btn btn-success" type="submit">Salvar</button>
        </form>

    </main>
    
</html>