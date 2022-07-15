<html>
    <?php
    //echo "estoy en coderlist";
    require_once ("Components/layout.php");
    ?>
    <body>
        <?php
        require_once ("Components/header.php");
        ?>
        <main>
            <div class="card-header py-3">
                <h1 class="font-weight-bold text-black titulo-pagina">Task appointment</h1>
            </div>

            <div>
              <a href= '?action=create&id={$coder->getID()}'>➕</a>
            </div>

            <div id="wrapper">
              <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                  <div id="container-fluid card shadow mb-4 card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Date / time</th>
                            <th>Coder name / Team</th>
                            <th>Issue</th>
                            <th>Id</th>
                            <th>Action</th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php
                          foreach ($data["coder"] as $coder){
                              
                              echo "
                              <tr>
                                <td>{$coder->getDate_time()}</td>
                                <td>{$coder->getCoder()}</td>
                                <td>{$coder->getIssue()}</td>
                                <td>{$coder->getID()}</td>
                                <td>
                                  <a href= '?action=delete&id={$coder->getID()}'><i class='lnr lnr-trash'>🗑️</i></a>
                                </td>                                
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
        <?php
        require_once ("Components/footer.php");
        ?>
    </body>
</html>