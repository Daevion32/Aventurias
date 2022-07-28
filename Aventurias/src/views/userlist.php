<html>
    <?php
    require_once ("Components/layout.php");
    ?>
    <body class="userlist">
          <?php
        require_once ("Components/header.php");
        ?>
        <main class="homePage">
          <section class="front"> 
            <div class="text-center bg-image">
                <div class="mask" style="margin:0";>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white">
                        <h1 class="mb-3 tittle">RESERVAS</h1>
                        <a class="btn btn-outline-light text-align:center" href= '?action=create' role="button">Nueva Aventura</a>
                        </div>
                    </div>
                </div>
            </div>
          </section>  
            <div id="wrapper">
              <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                  <div id="container-fluid card shadow mb-4 card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Fecha</th>
                            <th>Aventura</th>
                            <th>Nombre</th>
                            <th>Nº</th>
                            <th>Info</th>
                            
                          </tr>
                        </thead>

                        <tbody>
                        <?php
                          foreach ($data["user"] as $user){
                              
                              echo "
                              <tr>
                                <td>
                                <a href= '?action=delete&id={$user->getID()}'>🗑️</a>
                                <a href= '?action=edit&id={$user->getID()}'>📝</a>
                                </td>    
                                <td>{$user->getDate_time()}</td>
                                <td>{$user->getAdventures()}</td>
                                <td>{$user->getName()}</td>
                                <td>{$user->getPeople()}</td>
                                <td>{$user->getInfo()}</td
                              </tr>
                              ";
                          }
                          ?>
                        </tbody>
                      </table>

                  </div>
                </div>
                </div>
              </div>
            </div>
        </main>
    </body>
</html>