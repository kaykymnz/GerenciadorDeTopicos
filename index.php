<?php include('task.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Topics Manager</title>
   
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Gerenciador De Tópicos</h1>
        </div>
        <div class="form">
            <form action="" method="get">
                <label for="tarefa">Itens:</label>
                <input type="text" id="tarefa" name="task_name" placeholder="Nome da tarefa">
                <input type="submit" class="cad"value="Incluir">
            </form>
            <?php
                if(isset($_SESSION['msg'])){
                    echo "<p>".$_SESSION['msg']."</p>";
                    unset($_SESSION['msg']);
                }
            ?>
        </div>
        <div class="separator">
        </div>
        <div class="list_tasks">
                <?php
                    if(isset($_SESSION['tasks'])){
                        echo "<ul>";
                        foreach($_SESSION['tasks'] as $key => $task){
                            
                        echo    "<li>
                                    <span>$task</span>
                                    <input type='button' class='btn' onclick='deletar$key()' value='Remover'>
                                    <script>
                                        function deletar$key(){
                                            if(confirm('Confirmar remoção?')){
                                                window.location ='http://localhost/gerenciadorDeTarefas/?key=$key';
                                            }
                                            return false;
                                        }
                                    </script>
                                </li>";
                        }
                        echo "<ul>";
                    }
                ?>
           <form action="" class="form" method="get">
                <input type="hidden" name="clear" value="clear">
                <input type="submit" class="cad" value="Limpar Tarefas">
           </form>
        </div>
        <div class="footer">
            <p>Desenvolvido por Kayky Bezerra</p>
        </div>


    </div>

</body>
</html>