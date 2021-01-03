<?= $this->extend('layout') ?>
<?= $this->section('content') ?>  
    <?php
          $username = [
              'name' => 'username',
              'id' => 'username' ,
              'value' => null,
              'class' => 'form-control'
        ];
          
          $password = [
              'name' => 'password' ,
              'id' => 'password' ,
              'class' => 'form-control'
        ];

          $repeatPassword = [
            'name' => 'repeatPassword' ,
            'id' => 'repeatPassword' ,
            'class' => 'form-control'
        ];

        $session = session();
        $errors = $session->getFlashdata('errors');
    ?>
    <div class="row align-items-center h-100 align-middle">
        <div class="col-6 mx-auto">
            <div class="jumbotron">
                <div class ="container">
                    <h2 class ="text-primary mb-5"><center>REGISTRATION FORM</center></h2>
                    <?php if($errors != null): ?>
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Terjadi Kesalahan</h4>
                            <hr>
                            <p class="mb-0">
                                <?php
                                    foreach($errors as $err){ 
                                        echo $err.'<br>';
                                    }
                                    ?> 
                            </p> 
                        </div>
                    <?php endif ?>
    <?= form_open('Auth/register') ?>
        <div class = "form_group mb-3">
            <?= form_label("Username", "username")?>
            <?= form_input($username)?>
        </div>
        <div class = "form_group mb-3">
            <?= form_label("Password", "password")?>
            <?= form_password($password)?>
        </div>
        <div class = "form_group">
            <?= form_label("Repeat Password", "repeatPassword")?>
            <?= form_password($repeatPassword)?>
        </div>
        <div class="mt-3 text-right">
            <?= form_submit('submit', 'Submit',['class'=>'btn btn-primary']) ?>
        </div>
    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div> 

<?= $this->endSection() ?>    
