<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="container bg-dark">
    <h1 class="text-light text-md-center">Bem vindo ao Bootstrap</h1>
    <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam, enim assumenda
        accusantium blanditiis aut earum quaerat nihil vel dolores! Id delectus officiis nesciunt debitis tenetur
        placeat et, autem tempore?</p>




    <div class="row my-3">
        <div class="col-md-4">
            <p class="text-success text-md-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi
                accusantium, ipsa sunt a possimus neque exercitationem commodi molestias saepe ducimus ratione quibusdam
                provident molestiae laudantium! Nulla amet ipsum cumque eaque. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Perferendis mollitia dolorem, a placeat qui commodi. Maiores, natus itaque. Cum illo
                officiis exercitationem iusto sed eveniet alias, quia temporibus ab nobis!</p>
        </div>
        <div class="col-md-4">
            <div class="text-center my-3"><img class="img-fluid img-thumbnail" src="palworld.jfif" class="rounded"
                    alt="..."></div>
        </div>
        <div class="col-md-4">
            <p class="text-danger text-md-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque,
                corporis harum. Error nobis, recusandae voluptas consequatur, unde ea ex magni autem distinctio
                inventore repellat aperiam. Asperiores ullam incidunt fugiat non! Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Cum ut ex at provident iusto vero dolores, facere distinctio nesciunt
                facilis doloremque sequi, libero beatae odit quo alias sit fuga quaerat.</p>
        </div>
    </div>
    <!--3ª linha-->

    <div class="row">
        <!--1ª linha-->
        <div class="col-md-6">
            <p class="text-info text-md-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut facere
                labore repellendus suscipit laboriosam molestiae nulla ea? Vitae, qui perferendis reprehenderit neque
                placeat distinctio earum rerum, quod autem pariatur aliquid.</p>
        </div>
        <!---1ª coluna-->
        <div class="col-md-6">
            <p class="text-warning text-md-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                quibusdam dolorum fugiat obcaecati corporis adipisci illum ea accusamus, perferendis vitae consequatur
                neque aut odio iure voluptatum placeat. Dolorum, ullam iusto?</p>
        </div>
        <!--2ª coluna-->
    </div>

    <div class="row">
        <div class="col-md-3"><img class="img-fluid" src="palworld.jfif"></div>
        <div class="col-md-3"><img class="img-fluid" src="palworld.jfif"></div>
        <div class="col-md-3"><img class="img-fluid" src="palworld.jfif"></div>
        <div class="col-md-3"><img class="img-fluid" src="palworld.jfif"></div>
    </div>
    <!--2ª linha-->
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="mostrar.php" method="post">
                <p></p>
                <p class="text-light">Nome</p><input name="txt_Name" class="form-control" type="text" placeholder="Nome" required><br>
                <p class="text-light">E-mail</p><input name="txt_Email" class="form-control" type="email" placeholder="E-mail" required><br>
                <p class="text-light">Login</p><input name="txt_Login" class="form-control" type="email" placeholder="Login" required><br>
                <p class="text-light">Senha</p><input name="txt_Password" class="form-control" type="password" placeholder="Senha" required><br>
                <p class="text-light">Confirmar a Senha</p><input name="txt_PasswordConfirm" class="form-control" type="password" placeholder="Comfirmar a Senha" required><br>
                <p class="text-light">Telefone</p><input name="txt_Phone" class="form-control" type="tel" placeholder="Telefone"><br>
                <p class="text-light">Data de Cadastro</p><input name="txt_Date" class="form-control" type="date" value="2024-03-11"><br>
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control btn btn-success" type="submit">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control btn btn-danger" type="reset" value="Cancelar">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>