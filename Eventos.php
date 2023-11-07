<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    
    <link href="assets1.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
</head>
<body>


  <div class="topbar">
  <form class="form">
    <label for="search">
        <input class="input" type="text" required="" placeholder="Pesquisar" id="search">
        <div class="fancy-bg"></div>
        <div class="search">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr">
                <g>
                    <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                </g>
            </svg>
        </div>
        <button class="close-btn" type="reset">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </label>
</form>  
    <img src="./img/t.jpg" alt="" class="perfiltop" >
    <div class="usuario" >
                  <h5 >Thiago Wyse</h5>
                  <p >@wysethiago</p>
                </div>
                <div>
                <i class='bx bx-bell' id="iconenotificacao"></i> 
                <i class='bx bx-image-add' id="iconeadd" ></i>
                <a href="feed.php">
                <i  class='bx bx-home' id="iconehome"></i>
                </a>
                </div>
                <ul class="navbar-nav  mb-2 mb-lg-0 opcoes">

                <li class="nav-item dropdown" style="color:black;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                        <li><a class="dropdown-item" href="#">Meu Perfil</a></li>
                        <li><a class="dropdown-item" href="configperfil.php">Configurações</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="sair.php">Sair</a></li>
                    </ul>
                </li>

                </ul>

                </div>
              
  </div>

                
    </div>

  <!-- Sidebar no lado esquerdo -->
  <div class="sidebar-left">
      <img src="./img/logoe.png"  class="logo">

  <div class="linha3"></div>
        <div class="menu_container" >
            <div class="menu_items">
                <div class="menu_title flex" id="menu_title_flex" >
                    <span class="title">Menu</span>
                    <span class="line"></span>
                </div>
                <ul class="menu_item">
                    <li class="item">
                        <a href="feed.php" class="link flex">
                            <i class='bx bx-news'></i>
                            <span>Feed</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="meuperfil.php" class="link flex">
                            <i class='bx bx-user'></i>
                            <span>Perfil</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="challenge.php" class="link flex">
                            <i class='bx bx-trophy'></i>
                            <span>Challenge</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="eventos.php" class="link flex">
                            <i class='bx bx-calendar-event'></i>
                            <span>Eventos</span>
                        </a>
                    </li>
                </ul>
                <ul class="menu_item">
                    <div class="menu_title flex" id="menu_geral" >
                        <span class="title">Geral</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="sair.php" class="link flex">
                            <i class='bx bx-exit' ></i>
                            <span>Sair</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="termosdeuso.php" class="link flex">
                        <i class='bx bx-star'></i>
                            <span>Créditos</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="termosdeuso.php" class="link flex">
                        <i class='bx bx-copy-alt' ></i>
                            <span>Termos de Uso</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
   



  <!-- Conteúdo principal -->
  <div class="content">
  <br>
  <br>
  <h1 class="titulo">Eventos📅</h1>
  <br>
  <br>
  
    <!-- Conteúdo principal da página -->
    <div class="slider">

<div class="slides">
    <!-- radio buttons -->
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    <input type="radio" name="radio-btn" id="radio4">
    
    <!-- slide imagens  -->
    <div class="slide first">
        <img src="mundosenai.jpg" alt="imagem 1"/>
    </div>
        <div class="slide">
        <img src="background4.jpg" alt="imagem 2"/>
    </div>
    <div class="slide">
        <img src="mundosenai.jpg" alt="imagem 3"/>
    </div>
    <div class="slide">
        <img src="background4.jpg" alt="imagem 4"/>
    </div>
    <!-- fim de imagens -->

        <!-- Navigation auto -->
        <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
        
        </div>

 </div>
  <!-- Topbar -->
  <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lizard_banco";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Consulta SQL
    $sql = "SELECT * FROM `usuarios`
    WHERE `idUsuario` =  " . $_SESSION["idUsuario"] . ";";
    $resultado = $conn->query($sql);
    if ($resultado->num_rows != 0) {
        $row = $resultado->fetch_array();
        $nomeCompleto = $row[1];
        $nomeUsuario = $row[2];
        $perfilFoto = $row[9];
    } else {
        echo '<p class="sadff">Nada cadastrado.';
    }
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $perPage = isset($_GET['perPage']) ? intval($_GET['perPage']) : 100;
    $offset = ($page - 1) * $perPage;

    $sql2 = "SELECT * FROM posts ORDER BY idMsg DESC LIMIT $offset, $perPage";
    $resultado = $conn->query($sql2);





    $sql3 = "SELECT nomeUsuario, nomeCompleto, perfilFoto, idUsuario
         FROM usuarios
         WHERE idUsuario <> " . $_SESSION["idUsuario"] . "
         AND idUsuario NOT IN (SELECT idUsuarioSeguido FROM listaseguidores WHERE idUsuarioSeguidor = " . $_SESSION["idUsuario"] . ")
         ORDER BY RAND()
         LIMIT 6";
    $resultado3 = $conn->query($sql3);

    ?>

<div class="sidebar-right">
        <!-- Conteúdo da sidebar direita -->
        <div class="caixa">
            <span class="titulosug" id="titulosug" style="color:black">Sugestões de Seguidores</span>
        </div>
        <?php
        if ($resultado3->num_rows > 0) {
            // Loop através dos resultados e exiba as caixas de perfil
            while ($row = $resultado3->fetch_assoc()) {
                echo '<div class="caixa2">';
                echo '<div class="perfilcaixa">';
                echo '<div class="fotoperfilcaixa">';
                echo '<a href="perfil.php?nomeUsuario=' . $row["nomeUsuario"] . '&nomeCompleto=' . $row["nomeCompleto"] . '&fotoPerfil=' . $row["perfilFoto"] . ' &idUsuario=' . $row["idUsuario"] . ' ">';
                echo '<img src="' . (empty($row["perfilFoto"]) ? './img/image.jpeg' : './img/' . $row["perfilFoto"]) . '" alt="" class="fotoperfilcaixa">';
                echo '</a>';
                echo '</div>';
                echo '<a href="perfil.php?nomeUsuario=' . $row["nomeUsuario"] . '&nomeCompleto=' . $row["nomeCompleto"] . '&fotoPerfil=' . $row["perfilFoto"] . ' &idUsuario=' . $row["idUsuario"] . ' ">';
                echo '<p class="titulocaixa">' . $row["nomeCompleto"] . '</p>';
                echo '</a>';
                echo '<a href="perfil.php?nomeUsuario=' . $row["nomeUsuario"] . '&nomeCompleto=' . $row["nomeCompleto"] . '&fotoPerfil=' . $row["perfilFoto"] . ' &idUsuario=' . $row["idUsuario"] . ' ">';
                echo '<p class="titulocaixa2">@' . $row["nomeUsuario"] . '</p>';
                echo '</a>';
                echo '<button class="botaocaixa seguir" data-nomeusuario="' . $row["nomeUsuario"] . '">';
                echo '<p class="titulobotao">Seguir</p>';
                echo '</button>';



                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "Nenhum usuário encontrado.";
        }
        ?>
        <div class="vermais">
            <a href="pesquisa.php">
                <p class="titulovermais">Ver mais</p>
            </a>
        </div>
    </div>
  
    
        

</div>
        
  </div>

  <!-- Sidebar no lado direito -->
  <script src="script.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
