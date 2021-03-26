<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="account-settings-container layout-top-spacing">
            <a href="../smtp.txt" class="btn btn-danger">
                <u>How To Authenticate SMTP?</u>
            </a>
            <div class="account-content">
                <div
                    class="scrollspy-example"
                    data-spy="scroll"
                    data-target="#account-settings-scroll"
                    data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form
                                id="general-info"
                                class="section general-info"
                                method="post"
                                action="php/uhome.php"
                                enctype="multipart/form-data">
                                <div class="info">
                                    <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
                                    <div class="alert btn-success mb-4" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewbox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-x close"
                                                data-dismiss="alert">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                        <strong>Success!</strong>
                                        SMTP Berhasil DiUpdate!.
                                    </div>

                                    <?php
  }  
  if($_GET['msg']=='error'){
      ?>
                                    <div class="alert alert-danger mb-4" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewbox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-x close"
                                                data-dismiss="alert">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                        <strong>Failed!</strong>
                                        SMTP Gagal DiUpdate!.
                                    </div>

                                    <?php
  } } 
?>
                                    <?php
    $query="SELECT * FROM smtp_setup"; 
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>

                                    <h6 class="">SMTP Settings</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="auth">SMTP Auth</label>
                                                                    <input
                                                                        class="form-control mb-4"
                                                                        type="text"
                                                                        name="auth"
                                                                        value="<?=$data['auth']?>"
                                                                        id="auth"
                                                                        placeholder="true">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for="port">SMTP Port</label>
                                                                <input
                                                                    class="form-control mb-4"
                                                                    type="text"
                                                                    name="port"
                                                                    value="<?=$data['port']?>"
                                                                    id="port"
                                                                    placeholder="666">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="host">SMTP Host</label>
                                                            <input
                                                                class="form-control mb-4"
                                                                type="text"
                                                                name="host"
                                                                value="<?=$data['hostid']?>"
                                                                id="host"
                                                                placeholder="smtp.gmail.com">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="gambar">User Email</label>
                                                        <input
                                                            class="form-control mb-4"
                                                            type="text"
                                                            name="usermail"
                                                            value="<?=$data['usermail']?>"
                                                            id="usermail"
                                                            placeholder="admin@admin.com">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="userpass">User Password</label>
                                                    <input
                                                        class="form-control mb-4"
                                                        type="text"
                                                        name="userpass"
                                                        value="<?=$data['userpass']?>"
                                                        id="userpass"
                                                        placeholder="Password">
                                                </div>
                                            </div>

                                            <input class="btn btn-primary" type="submit" name="save" value="Save Changes">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php }
                                                        ?>