<?php
require_once("Components/layout.php");
?>

<body id="bodyForUpdateUser">
    <?php
    require_once("Components/Header.php");
    ?>
    <main class="editPage">
        <section class="front">
            <div class="text-center bg-image">
                <div class="mask" style="margin:0" ;>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white">
                            <h1 class="mb-3 tittle">Modificar aventura</h1>
                            <a class="btn btn-outline-light text-align:center" href='?action=#' role="button">VOLVER</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="formUpdate">
            <form class="row g-3" id="formUpdateUser" action='?action=update&id=<?php echo $data["user"]->getId() ?>' method="post">
                <div id="checkImages">
                    <div class="form-check, check" >
                        <label class="form-check-label" for="flexRadioDefault1">                    
                            <img class="imgAdventure" src="public/images/descenso-en-canoa.jpeg" alt="escoger aventura descenso en canoa">
                        </label>
                        <br>
                        <input class="form-check-input, point" type="radio" name="adventure" id="flexRadioDefault1" value="descenso en canoa" <?php if ($data["user"]->getAdventures()=="descenso en canoa"){ echo "checked";}?>>
                    </div>
                    <div class="form-check, check">
                        <label class="form-check-label" for="flexRadioDefault2">
                            <img class="imgAdventure" src="public/images/motosagua.jpeg" alt="Escoger aventura motos de agua">
                        </label>
                        <br>
                        <input class="form-check-input, point" type="radio" name="adventure" id="flexRadioDefault2" value="motos de agua" <?php if ($data["user"]->getAdventures()=="motos de agua"){ echo "checked";}?>>
                    
                    </div>
                    <div class="form-check, check">
                        <label class="form-check-label" for="flexRadioDefault3">                    
                            <img class="imgAdventure" src="public/images/parapente.jpeg" alt="escoger aventura parapente">
                        </label>
                        <br>
                        <input class="form-check-input, point" type="radio" name="adventure" id="flexRadioDefault3" value="parapente" <?php if ($data["user"]->getAdventures()=="parapente"){ echo "checked";}?>>
                    
                    </div>
                    <div class="form-check, check">
                        <label class="form-check-label" for="flexRadioDefault4">
                        <img class="imgAdventure" src="public/images/Ruta_del_Cares.jpeg" alt="Escoger aventura Ruta del Cares">
                        </label>
                        <br>
                        <input class="form-check-input, point" type="radio" name="adventure" id="flexRadioDefault4" value="Ruta del Cares" <?php if ($data["user"]->getAdventures()=="Ruta del Cares"){ echo "checked";}?>>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="inputName" class="form-label">Nombre</label>
                    <input type="name" class="form-control" id="inputName" name="name" required value='<?php echo $data["user"]->getName() ?>'>
                </div>
                <div class="col-md-6">
                    <label for="inputPhone" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="inputPhone" name="phone" required value='<?php echo $data["user"]->getPhone() ?>'>
                </div>
                <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputEmail" name="email" required value='<?php echo $data["user"]->getEmail() ?>'>
                </div>
                <div class="col-12">
                    <label for="inputPeople" class="form-label">Nº de personas:</label>
                    <input type="text" class="form-control" name="people" id="inputPeople" required value='<?php echo $data["user"]->getPeople() ?>'>
                </div>
                <div class="col-md-6">
                    <label for="inputInfo" class="form-label">Observaciones:</label>
                    <input type="text" class="form-control" id="inputInfo" name="info" required value='<?php echo $data["user"]->getInfo() ?>'>
                </div>

                <div class="col-12" id="deleteButton">
                    <button type="reset" class="deleteButton btn btn-primary">Borrar formulario</button>
                </div>    
                <div class="col-12" id="editSubmitButton">
                    <button type="submit" class= "submitButton btn btn-primary">Aceptar</button>
                </div>    
            </form>
        </section>
    </main>
</body>