<!DOCTYPE html>
<head>
    <title> Produtos de Portugal </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="pt.css">
    <script src="pt.js"></script>
    <link rel="icon" type="image/png" href="LOGO.png">
    
</head>
<body>
<?php
    session_start();
  ?>
  <!-- MENU -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php"><img src="LOGO.png" width="80" height="80"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Produtos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="pt.php">Portugal</a></li>
              <li><a class="dropdown-item" href="usa.php">Estados Unidos</a></li>
              <li><a class="dropdown-item" href="es.php">Espanha</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historia.php">História</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactos.php">Contato</a>
          </li>
          <?php
            if(isset($_SESSION['username'])){
              $username = $_SESSION['username'];
              echo '<li class="nav-item dropdown">';
              echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"';
              echo 'data-bs-toggle="dropdown" aria-expanded="false">' . $username . '</a>';
              echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
              echo '<li><a class="dropdown-item" href="logout.php">Logout</a></li>';
              echo '</ul></li>';
            }
            else{
              echo '<li class="nav-item">';
              echo '<a id="loginBtn" href="login.php"><i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>';
              echo '</li>';
            }
          ?>
  
        </ul>
      </div>
    </div>
  </nav>
  <!-- FIM DO MENU -->
  <!-- CORPO -->
  <!-- Linha 1-->
  <div class="container">
  <div class="row">
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysoriginais_popup_header_image_243x389_vs3.png?sfvrsn=0" alt="Lay's Originais" 
      onclick="showPopup('As deliciosas Lay’s® que te permitem desfrutar do autêntico sabor da batata. Realmente saborosas. |  INGREDIENTES: Batatas, óleos vegetais (milho e girassol em proporções variáveis), sal.Não contém alergénios de declaração obrigatória.SEM GLÚTEN.')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/lays-camponesas_popup_header_image_243x389_vs3.png?sfvrsn=0" alt="Lay's Camponesa" 
      onclick="showPopup('Uma cuidada seleção dos sabores vegetais para que os desfrutes nas tuas Lay’s® de sempre. | INGREDIENTES: Batatas, óleos vegetais (milho e girassol em proporções variáveis), condimento preparado de vegetais e especiarias [lactose (de leite), sal, açúcar, intensificadores de sabor (glutamato monossódico, 5’ribonucleótido dissódico), dextrose, cebola em pó, pimentão moído, tomate em pó, alho em pó, salsa, proteína hidrolizada de soja, preparações e substâncias aromatizantes, reguladores de acidez (ácido cítrico, ácido málico), aroma de fumo, corante (extrato de pimentão), edulcorante (aspartame)].Contém uma fonte de fenilalanina.SEM GLÚTEN.')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysqueijoecebola_popup_header_image_243x389_vs3.png?sfvrsn=0 " alt="Lay's Queijo & Cebola" 
      onclick="showPopup('Batatas fritas com sabor a queijo e cebola |  INGREDIENTES:Batatas, óleos vegetais (milho e girassol em proporções variáveis), aroma a queijo e cebola [soro de leite em pó, cebola em pó, sal, açúcar, intensificadores de sabor (glutamato monossódico, guanilato e inosinato dissódicos), cloreto de potássio, preparações e substâncias aromatizantes, especiarias e plantas aromáticas, acidulante (ácido cítrico), queijo em pó (de leite), corantes (extrato de pimentão, curcumina)].')">
    </div>
    <div class="col-md-3">
      <img src="https://veganfoundry.com/wp-content/uploads/2021/02/laysvinagreta_popup_header_image_243x389_vs3.png" alt="Lay's Sal e Vinagre" 
      onclick="showPopup('Uma receita clássica que combina o sabor original de Lay’s® e a personalidade do vinagre. |  INGREDIENTES: Batatas, óleos vegetais (milho e girassol em proporções variáveis), aroma a sal e vinagre [reguladores de acidez (acetato e diacetato de sódio), sal, acidificante (ácido cítrico), intensificadores de sabor (glutamato monossódico, 5-ribonucleótido dissódico), cloreto de potássio].Não contém alergénios de declaração obrigatória.SEM GLÚTEN.')">
    </div>
  </div>
</div>
<!-- Linha 2-->
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/layspaprika_popup_header_image_243x389_vs3.png?sfvrsn=0" alt="Lay's Paprika" 
      onclick="showPopup('Batatas fritas com sabor a pimentão doce. | INGREDIENTES: Batatas, óleos vegetais (milho e girassol em proporções variáveis), aroma a pimentão doce [açúcar, sal, pão ralado (de trigo), pimentão, soro de leite em pó, cebola em pó, cloreto de potássio, preparações e substâncias aromatizantes, alho em pó, alfarroba em pó, corante (extrato de pimentão), aromas de fumo, reguladores de acidez (ácido cítrico e ácido málico)].')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/default-album/lays_light.png?sfvrsn=0" alt="Lay's Light" 
      onclick="showPopup('Deliciosas com 30% menos de gordura +vs. a média de batatas fritas do mercado. | INGREDIENTES: Batatas, óleo de girassol com alto teor oleico (22%), sal.')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/layssnack3dbugles_popup_header_image_243x389.png?sfvrsn=0 " alt="Lay's Cones de milho" 
      onclick="showPopup('Elaborados com milho de grande qualidade, sempre seguindo um cuidadoso processo de elaboração.|  Snack de milho frito com sabor a queijo e bacon |  INGREDIENTES:Sémola de milho (70%), óleos vegetais (milho e girassol em proporções variáveis), aroma a queijo e bacon [soro de leite em pó, sal, queijo em pó (de leite), preparações e substâncias aromatizantes, intensificadores de sabor (glutamato monossódico, guanilato e inosinato dissódicos), acidificante (ácido cítrico), corante (extrato de pimentão), aromas de fumo], açúcar, sal.SEM GLÚTEN.')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysmeds2021_popup_header_image_243x389.png?sfvrsn=0" alt="Lay's Sal e Vinagre" 
      onclick="showPopup('100% Batatas de Agricultura Local, elaboradas em azeite e óleo de girassol. |  Batatas fritas com azeite |  INGREDIENTES: Batatas, azeite (16.4%^), óleo de girassol (15.7%^), sal.^ sobre o produto final.SEM GLÚTEN.')">
    </div>
  </div>
</div>
<!-- Linha 3 -->
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/default-album/laysforno_crackers_ervas-120g4.png?sfvrsn=2" alt="Lay's crackers ervas" 
      onclick="showPopup('Lay’s® Forno Crackers têm um sabor delicioso e uma textura crocante. Por serem feitas no forno, podes desfrutá-las com 40% menos de gordura+. |  Aperitivo salgado de batata e trigo com sabor a ervas provençais e azeite  |   INGREDIENTES: Farinha de trigo, flocos de batata (contém sulfitos), óleo de girassol, xarope de glicose, amido de batata, aroma a ervas provençais e azeite [sal, extrato de levedura, dextrose, soro de leite em pó, açúcar, queijo em pó (contém leite), aroma de ervas secas (manjericão, salsa, orégãos) (2%), alho seco, azeite virgem extra (0,1%), corante (curcumina)], maltodextrina, levedantes (bicarbonato de sódio, fosfato monocálcico), emulsionante (lecitina de soja).Este produto pode conter ovos e sésamo.Feito em fábrica que processa mostarda, aipo, aveia, cevada, amendoins, frutos secos.')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/default-album/laysforno_crackers_sal-120g1.png?sfvrsn=0" alt="Lay's crackers sal" 
      onclick="showPopup('Deliciosas com 30% menos de gordura +vs. a média de batatas fritas do mercado. | INGREDIENTES: Batatas, óleo de girassol com alto teor oleico (22%), sal.')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysfornosal_popup_header_image_243x389.png?sfvrsn=0 " alt="Lay's forno originais" 
      onclick="showPopup('Elaborados com milho de grande qualidade, sempre seguindo um cuidadoso processo de elaboração.|  Snack de milho frito com sabor a queijo e bacon |  INGREDIENTES:Sémola de milho (70%), óleos vegetais (milho e girassol em proporções variáveis), aroma a queijo e bacon [soro de leite em pó, sal, queijo em pó (de leite), preparações e substâncias aromatizantes, intensificadores de sabor (glutamato monossódico, guanilato e inosinato dissódicos), acidificante (ácido cítrico), corante (extrato de pimentão), aromas de fumo], açúcar, sal.SEM GLÚTEN.')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysfornocamponesas_popup_header_image_243x389.png?sfvrsn=0" alt="Lay's forno camponesa" 
      onclick="showPopup('100% Batatas de Agricultura Local, elaboradas em azeite e óleo de girassol. |  Batatas fritas com azeite |  INGREDIENTES: Batatas, azeite (16.4%^), óleo de girassol (15.7%^), sal.^ sobre o produto final.SEM GLÚTEN.')">
    </div>
  </div>
</div>
<!-- Linha 4 -->
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysfornoervasprovencais_popup_header_image_243x389.png?sfvrsn=0" alt="Lay's forno ervas" 
      onclick="showPopup('Um snack de batata com um sabor delicioso e uma textura crocante, graças ao seu delicado processo de cozedura no forno. Além disso,por ser feito no forno, podes desfrutá-lo com 50% menos de gordura+. |  Produto aperitivo de batata no forno com sabor a ervas provençais |  INGREDIENTES: Flocos de batata (62%), amido, óleo de girassol, aroma a ervas provençais [soro de leite em pó, sal, cebola em pó, preparações e substâncias aromatizantes (contém leite, lactose), cloreto de potássio, especiarias (0,3%) (salsa, manjericão, tomilho, alecrim), alho em pó, acidulante (ácido cítrico), corante (extrato de paprika)], açúcar, emulsionante (lecitina de girassol), corante (extrato de raiz de curcuma).')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysfornopaprika_header_image_243x389.png?sfvrsn=0" alt="Lay's forno paprika" 
      onclick="showPopup('Deliciosos e crocantes snacks de batata feitos no forno.  |  Produto aperitivo de batata no forno com sabor a pimentão doce 50% menos de gordura+   |   INGREDIENTES: Flocos de batata (63%), amido, óleo de girassol, aroma a pimentão doce [açúcar, sal, pão ralado (de trigo), pimentão doce, soro de leite em pó, reguladores de acidez (ácido cítrico, ácido málico), cebola em pó, cloreto de potássio, preparações e substâncias aromatizantes, alho em pó, corante (extrato de pimentão), alfarroba em pó, aroma de fumo], açúcar, emulsionante (lecitina de girassol), corante (extrato de raiz de curcuma).')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysfornoveggiebatatadoce_popup_header_image_243x389.png?sfvrsn=0" alt="Lay's forno veggie batata doce" 
      onclick="showPopup('Lay’s® Forno Veggie Batata Doce Sabor a Pimentão é feito no forno para ficar crocante e delicioso e tem menos 40%+ de gordura com todo o sabor de Lay’s®.  |   Snack de trigo, batata e batata doce com sabor a pimentão doce.   |   INGREDIENTES:  Farinha de trigo, flocos de batata (contém sulfitos), óleo de girassol, batata doce em pó (10%), xarope de glucose, amido de batata, maltodextrina, aroma a pimentão doce [açúcar, sal, pão ralado (de trigo), pimentão, cebola seca, aromas, glucose, tomate seco, alho seco, corante (extrato de pimentão), aroma de fumo, acidificantes (ácido cítrico, ácido málico)], gasificantes (bicarbonato de sódio, fosfato de cálcio), emulsionante (lecitina de soja), corante (extrato de pimentão), aroma natural.Este produto pode conter leite, cevada, aveia. Feito em fábrica que processa amendoins, frutos secos, aipo, mostarda, sésamo, ovos.')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysfornoveggiebeterraba_popup_header_image_243x389.png?sfvrsn=0" alt="Lay's forno veggie beterraba" 
      onclick="showPopup('Lay’s® Forno Veggie Beterraba sabor a Chili Doce é feito no forno para ficar crocante e delicioso e tem menos 40%+ de gordura com todo o sabor de Lay’s®.  |   Snack de trigo, batata e e beterraba com sabor a chili doce |  INGREDIENTES: Farinha de trigo, flocos de batata (contém sulfitos), óleo de girassol, beterraba em pó (10%), xarope de glucose, amido de batata, aroma a chili doce [açúcar, aroma natural, sal, melaço, acidificante (ácido cítrico), especiarias (pimenta em pó, alho), corante (extrato de pimentão)], maltodextrina, levedantes (bicarbonato de sódio, fosfato de cálcio), emulsionante (lecitina de soja). Este produto pode conter leite, cevada, aveia.Feito em fábrica que processa amendoins, frutos secos, aipo, mostarda, sésamo, ovos.')">
    </div>
  </div>
</div>
<!-- Linha 5 -->
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysgourmetoriginal_popup_header_image_243x389.png?sfvrsn=0" alt="Lay's gourmet original" 
      onclick="showPopup('Excelência em sabor e sensação crocante, com um corte mais grosso e um lento processo de elaboração. | INGREDIENTES: Batatas, óleo de girassol, sal.SEM GLÚTEN.')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysgourmet-jamoniberico_popup_header_image_243x389.png?sfvrsn=0" alt="Lay's gourmet jamón ibérico" 
      onclick="showPopup('O seu sabor irresistível e textura crocante são ideais para os momentos de aperitivo.  |  Batatas fritas com sabor a presunto ibérico  |  INGREDIENTES: Batatas, óleo de girassol, aroma a presunto ibérico [soro de leite em pó, sal, preparações e substâncias aromatizantes (contêm leite), açúcar, presunto ibérico].')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysgourmet_queso_pimenta_popup_header_image_243x389.png?sfvrsn=0" alt="Lay's gourmet queso pimenta" 
      onclick="showPopup('O seu sabor irresistível e textura crocante são ideais para os momentos de aperitivo. |  Batatas fritas com sabor a queijo curado e pimenta preta |  INGREDIENTES: Batatas, óleo de girassol, aroma a queijo curado e pimenta preta [soro de leite em pó, sal, dextrose, leite gordo em pó, cebola em pó, pimenta preta, queijo Manchego em pó (de leite), aromas naturais (contêm leite), extrato de levedura, acidificante (ácido cítrico)].')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.pt/images/default-source/products/popup-headers/laysgourmettrufanegra_popup_header_image_243x389.png?sfvrsn=0" alt="Lay's gourmet trufa negra" 
      onclick="showPopup('Estas batatas são o resultado de uma cuidadosa seleção de ingredientes de alta qualidade e de um lento processo de elaboração. O seu sabor irresistível e textura crocante são ideais para os momentos de aperitivo. |  Batatas fritas com sabor a trufa negra e sal marinho |  INGREDIENTES: Batatas, óleo de girassol, aroma a trufa negra e sal marinho [sal marinho, preparações e substâncias aromatizantes, pimenta preta, trufa em pó (0,1%)].')">
    </div>
  </div>
</div>
<div class="popup">
  <div class="popup-content">
    <span class="close" onclick="hidePopup()">&times;</span>
    <h2 id="popup-title"></h2>
    <p id="popup-description"></p>
  </div>
</div>


</body>
<footer class="footer">
  <nav class="menu">
    <ul>
      <li><a href="home.php"><img src="LOGO.png" width="80" height="80"> © 2020 Pipe's</a></li>
    </ul>
  </nav>
</footer>
</html>