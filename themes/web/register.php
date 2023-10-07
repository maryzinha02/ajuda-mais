<?php
    $this->layout("_theme");
?>
<link rel="stylesheet" href="<?= url("./assets/web/userRegister.css");?>">
<script src="https://kit.fontawesome.com/ec0f2a2d91.js" crossorigin="anonymous"></script>
 <div class="container">
        <h1>Formulário de Registro de Usuário</h1>
        <form id="form-cad" class="form">

<input id="name" type="text" name="name" placeholder="Seu nome">
<input id="email" type="text" name="email" placeholder="Seu e-mail">
<input id="password" type="password" name="senha" placeholder="Sua Senha">

<button id="cadastre">Cadastrar</button>


</form>
    </div>
    <script type="text/javascript" async>
    const form = document.querySelector("#form-cad");

    // const headers = {
    //     email: "fabiosantos@ifsul.edu.br",
    //     password: "12345678"
    // };

    form.addEventListener("submit", async (e) => {
        e.preventDefault();
        //console.log(new FormData(form));
        const data = await fetch(`<?= url("api/user/cad");?>`,{
            method: "post",
            body: new FormData(form),
            //headers: headers
        });
        const user = await data.json();
        console.log(user);
    });
</script>