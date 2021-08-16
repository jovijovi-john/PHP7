<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 34 - For Each (Pratica) </title>

    </head>

    <body style="padding: 10px 40px;">

        <?php 


            $champions = [
                ["Nome" => "Thresh", "Lore" => "Sádico e astuto, Thresh é um espírito ambicioso e incansável das Ilhas das Sombras. Ele já foi guardião de incontáveis segredos arcanos"], 
                ["Nome" => "Kassadin", "Lore" => "Abrindo um rastro ardente por um dos lugares mais sombrios do mundo, Kassadin sabe que seus dias estão contados. Guia e explorador experiente de Shurima"],
                ["Nome" => "Jax", "Lore" => "Maior mestre de armas de Runeterra, Jax é o último dos Kohari — campeões que juraram defender Icathia"], 
                ["Nome" => "Malzahar", "Lore" => "Filho único de vendedores ambulantes de bugigangas, Malzahar só se deu conta do seu talento quando seus pais sucumbiram a uma doença fatal"], 
                ["Nome" => "Orianna", "Lore" => "Orianna já foi uma menina curiosa de carne e osso, mas hoje é uma maravilha tecnológica totalmente composta por partes mecânicas.
                "], 
                ["Nome" => "Alistar", "Lore" => "Um poderoso guerreiro com uma temível reputação, Alistar busca vingança por seu clã, morto pelas mãos do império de Noxus. "], 
                ["Nome" => "Malphite", "Lore" => " Malphite, uma imensa criatura feita de pedra viva, nasceu do coração da grande construção ixtalense conhecida como Monolito"], 
                ["Nome" => "Braum", "Lore" => "Abençoado com bíceps gigantescos e um coração maior ainda, Braum é um amado herói Glacinata de Freljord."]
            ];

            // para guardar o indice do elemento atual, basta usar uma variavel assim:
            // foreach($array as $indice => $valor);
            foreach($champions as $idx => $champion){
                echo "<b>[ $idx ] ".$champion["Nome"]."</b><br/>";
                echo "<p>Lore: ".$champion["Lore"]."</p><hr/>";
            }

        ?>
    
    </body>

</html>