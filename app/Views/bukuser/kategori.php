<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
<nav>
       

        <div class="card-group">
        <div class="card mr-3">
                <img src="/img/fiction.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                   <p class="card-text"><a href="#" class="btn btn-primary mb-3">Kategori Fiksi</a> 
                      </p>
                </div>
            </div>          
                  

            <div class="card mr-3">
                <img src="/img/pelajaran.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><a href="#" class="btn btn-primary mb-3">Kategori Edukasi</a> 
                      </p>
                </div>
            </div>

            <div class="card">
                <img src="/img/biografi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><a href="#" class="btn btn-primary mb-3">Kategori Biografi</a> 
                      </p>
                </div>
            </div>


         
    </nav>
    </div>
<?= $this->endSection(''); ?>