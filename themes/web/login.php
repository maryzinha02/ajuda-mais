<?php
    $this->layout("_theme");
?>
<link rel="stylesheet" href="<?= url("./assets/web/userLogin.css");?>">
<script src="https://kit.fontawesome.com/ec0f2a2d91.js" crossorigin="anonymous"></script>
<div class="container">
        <h1>Formulário de Login</h1>
        <div class="conteudo">
        <div data-conteudo="entrar" id="entrar">
            <form id="form-log" class="form">
                <input id="enEmail" type="text" name="email" placeholder="Seu e-mail">
                <input id="enPassword" type="password" name="password" placeholder="Sua senha">
                
                <button>Entrar</button>
        
                <div class="response">

                </div>
    </div>
    <script type="text/javascript" async>
    const url = `<?= url("api/user/login");?>`;

    async function request (url, options) {
        try {
            const response = await fetch (url, options);
            const data = await response.json();
            return data;
        } catch (err) {
            console.error(err);
            return {
                type: "error",
                message: err.message
            };
        }
    }

    document.querySelector("#form-log").addEventListener("submit", async (e) => {
        e.preventDefault();
        //const formData = new FormData(document.querySelector("#form-log"));
        const options = {
            method: 'get',
            headers : {
                email: document.querySelector("#enEmail").value,
                password: document.querySelector("#enPassword").value
            }
        };
        const resp = await request(url, options);
        console.log(resp);
    });

</script>