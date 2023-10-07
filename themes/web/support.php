<?php
    $this->layout("_theme");
?>
<link rel="stylesheet" href="<?= url("./assets/web/doar.css");?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="<?= url("./assets/web/styles.css");?>">


    <main style="padding: 30px;">
        <div class="inputAndBtn">
            <button type="button" class="btn btn-secondary">Cadastrar Grupo</button>
            <div>
            <label>🔎</label>
            <input type="text" placeholder="Pesquisar Cidade">
        </div>
        </div>
        
        <br>  <br>
        <div class="container">
       
              <?php 
                foreach ($groupshelps as $groupshelp){
              ?>     
              <div class="btn-part">
                <button type="button" class="btn btn-light" style="border-radius: 0% ;">Participar</button>
              </div>
              <div class="innerDiv">
                <img src="assets/icon.jpg" alt="Group Image">
              <div>
                <h2><?=$groupshelp->grupo_name;?></h2>
                <p><?=$groupshelp->grupo_cidade;?></p>
                <p>meta de doação:10/89</p>
                
              </div>
            </div>
            <div class="additionalDiv">
                <h3>Descrição</h3>
              <p><?=$groupshelp->grupo_desc;?></p>
            </div>
            <div class="itens">
                <h3>O que precisa?</h3>
                <ul>
                  <li><?=$groupshelp->doa_name;?></li>
            
                </ul>
            </div>

            <?php
            }
            ?>
          </div>
    </main>


    <!-- Inicio dos Links do Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Fim dos Links do Bootstrap -->
