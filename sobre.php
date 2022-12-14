<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <?php 
            include('inc/config.php'); 
            include('inc/functions.php');
            include('inc/meta-header.php'); 
        ?>
    <title>BDPI USP - Sobre</title>
</head>

<body>

    <?php
        if (file_exists("inc/analyticstracking.php")) {
            include_once "inc/analyticstracking.php";
        }
        ?>

    <?php include('inc/navbar.php'); ?>
    <div class="uk-container uk-margin-large-top">
        <h1>Sobre</h1>
        <p>Esta é uma interface desenvolvida especialmente para consulta aos registros das partituras cadastradas no
            Banco de dados Bibliográficos da USP Dédalus. As informações e formas de busca foram adaptadas para melhor
            atender às necessidades de quem procura esse tipo de documento musical, sejam pesquisadores ou intérpretes.
        </p>
        <p>O maior acervo de partituras cadastrado no Dédalus pertence à Biblioteca da Escola de Comunicações e Artes,
            que forma e organiza documentos musicais desde a década de 1970. Os registros do Dédalus vieram da base de
            dados Acorde, desenvolvida pela Biblioteca da ECA e que tem suas origens num pioneiro catálogo automatizado
            criado em 1978. A coleção é composta por obras de música erudita de compositores brasileiros e estrangeiros
            de várias épocas e estilos, partituras de música folclórica e popular, obras didáticas para ensino de
            música. Os destaques são as obras de música sacra colonial, originárias das cidades mineiras de Ayuruoca,
            Brasópolis e Campanha e as partituras manuscritas de compositores brasileiros como Henrique
            Oswald, Fructuoso Vianna, Fúrio Franceschini, Gilberto Mendes, Osvaldo Lacerda e Lycia de Biase.
        </p>
        <p>O empréstimo é facultado a todos os usuários USP, de acordo com as normas do Empréstimo Unificado. As obras
            manuscritas e as partituras raras podem ser consultadas apenas no espaço da Biblioteca da ECA.
        </p>
        <p>Estão sendo digitalizados os manuscritos que estão em domínio público ou que recebemos autorização dos
            detentores dos direitos autorais para disponibilizar a obra na íntegra. Nesses casos, o link do registro
            abre o pdf da partitura completa. Nos casos de partituras com direitos autorais vigentes, estamos
            digitalizando apenas primeira página da obra.
        </p>

        <hr class="uk-grid-divider">

        <?php include('inc/footer.php'); ?>

    </div>


    <?php include('inc/offcanvas.php'); ?>


</body>

</html>