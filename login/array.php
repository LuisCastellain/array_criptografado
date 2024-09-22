<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanduíche Delicioso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="array.css">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center">Bem-vindo ao Sanduíche Delicioso!</h1>
        <div class="row">
            
            <?php
            // Função auxiliar para exibir ingredientes e suas imagens
            function exibirIngredientes($ingredientes, $imagens = []) {
                echo "<div class='row'>";
                foreach ($ingredientes as $ing) {
                    echo "<div class='col-md-4 text-center'><p>{$ing}</p>";
                    if (isset($imagens[$ing])) {
                        echo "<img src='../img/{$imagens[$ing]}' class='ingredient-img' alt='{$ing}'>";
                    }
                    echo "</div>";
                }
                echo "</div>";
            }

            // Ingredientes e suas respectivas imagens
            $sanduiche = ["Pão", "Maionese", "Queijo", "Mortadela", "Ovos", "Alface"];
            $imagens = [
                "Pão" => "pao.jpg",
                "Maionese" => "maionese.jpg",
                "Queijo" => "queijo.jpg",
                "Mortadela" => "mortadela.jpg",
                "Ovos" => "ovos.jpg",
                "Alface" => "alface.jpg",
                "Ketchup" => "ketchup.jpg",
                "Mostarda" => "mostarda.jpg",
                "Pepino" => "pepino.jpg"
            ];

            // Função 1: Exibir os ingredientes e imagens
            echo "<div class='col-md-12'><div class='card p-4 shadow-sm'><h2>Ingredientes do Sanduíche</h2>";
            exibirIngredientes($sanduiche, $imagens);
            echo "</div></div>";

            // Função 2: Contagem e exibição do sanduíche completo
            echo "<div class='col-md-12'><div class='card p-4 shadow-sm'><h2>Sanduíche Completo</h2>";
            echo "<p>O sanduíche possui " . count($sanduiche) . " ingredientes.</p>";
            echo '<img src="../img/sanduiche_completo.jpg" class="img-fluid" alt="Sanduíche completo"></div></div>';

            // Função 3: Adicionar ingredientes extras com array_push
            array_push($sanduiche, "Ketchup", "Mostarda", "Pepino");
            echo "<div class='col-md-12'><div class='card p-4 shadow-sm'><h2>Ingredientes Extras</h2>";
            exibirIngredientes($sanduiche, $imagens);
            echo "</div></div>";

            // Função 4: Remover o último ingrediente com array_pop
            array_pop($sanduiche);
            echo "<div class='col-md-12'><div class='card p-4 shadow-sm'><h2>Sanduíche sem Pepino</h2>";
            echo "<p>Removemos o último ingrediente (Pepino):</p>";
            exibirIngredientes($sanduiche, $imagens); 
            echo '<img src="../img/sanduiche_sem_pepino.jpg" class="img-fluid" alt="Sanduíche sem Pepino"></div></div>';

            // Função 5: Remover o primeiro ingrediente com array_shift
            array_shift($sanduiche);
            echo "<div class='col-md-12'><div class='card p-4 shadow-sm'><h2>Sanduíche sem Pão</h2>";
            echo "<p>Removemos o primeiro ingrediente (Pão):</p>";
            exibirIngredientes($sanduiche, $imagens); 
            echo '<img src="../img/sanduiche_sem_pao.jpg" class="img-fluid" alt="Sanduíche sem Pão"></div></div>';
            ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>