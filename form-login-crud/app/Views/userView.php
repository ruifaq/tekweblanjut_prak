<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand mt-2" href="#"> <h3><i class="fa fa-server" aria-hidden="true"></i> Data User</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
<div class="container">
 <div class="dropdown">
    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
    <img src="../assets/img/userlog.png" width="30" height="30" alt="" loading="lazy">
    </button>
    <div class="dropdown-menu">
      <h5 class="dropdown-header"><i class="fa fa-info-circle" aria-hidden="true"></i> Info Akun</h5>
      <h7 class="dropdown-header"><i class="fa fa-envelope-o" aria-hidden="true" ></i> <?= session()->getFlashdata('msg_login'); ?></h7>
      <a class="dropdown-item" href="/user"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
     
    </div>
  </div>
</div>
      </li>
    </ul>
  
  </div>
</nav>
    <button type="button" class="btn btn-success mt-2 mb-2" data-toggle="modal" data-target="#addModal">Tambah
    <i class="fa fa-user-plus" aria-hidden="true"></i>
    </button>

    <!-- Message CRUD -->
    <?php if (session()->get('msg_login')) : ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              <strong><?= session()->getFlashdata('msg_logindua'); ?> </strong>
              <strong><?= session()->getFlashdata('msg_login'); ?> </strong>
              </div>
          <?php endif; ?>

          <?php if (session()->get('msg_tambah')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              <strong><?= session()->getFlashdata('msg_tambah'); ?> </strong>
              </div>
          <?php endif; ?>

          <?php if (session()->get('msg_edit')) : ?>
            <div class="alert alert-primary  alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              <strong><?= session()->getFlashdata('msg_edit'); ?> </strong>
              </div>
          <?php endif; ?>

          <?php if (session()->get('msg_hapus')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              <strong><?= session()->getFlashdata('msg_hapus'); ?> </strong>
              </div>
          <?php endif; ?>
    <!-- End Message CRUD-->

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>User ID</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($ci_user as $row):?>
                <tr>
                    <td><?= $row->user_id;?></td>
                    <td><?= $row->user_nama;?></td>
                    <td><?= $row->user_email;?></td>
                   
                    <td>
                        <a href="#" class="btn bg-primary btn-sm btn-edit text-white" data-id="<?= $row->user_id;?>" 
                        data-name="<?= $row->user_nama;?>" data-email="<?= $row->user_email;?>" > <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                        <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->user_id;?>"> <i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>

                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </div>
    
    <!-- Modal Tambah Data-->
    <form action="/home/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <div class="form-group">
                    <label>User ID</label>
                    <input type="text" class="form-control" name="user_id">
                </div>
                
                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" class="form-control" name="user_nama">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="user_email">
                </div>

             
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Tambah Data-->

    <!-- Modal Edit Data-->
    <form action="/home/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <div class="form-group">
                    <label>User ID</label>
                    <input type="text" class="form-control user_id" name="user_id" disabled>
                </div>
                
                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" class="form-control user_nama" name="user_nama">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control user_email" name="user_email">
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="user_id" class="user_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Data-->

    <!-- Modal Delete Data-->
    <form action="/home/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
               <h4>Apakah anda yakin hapus user ini?</h4>
            
            </div>
            <div class="modal-footer">
                <input type="hidden" name="user_id" class="userID">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Delete Data-->

    
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){

        // get Edit Data
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const name = $(this).data('name');
            const email = $(this).data('email');
           
            // Set data to Form Edit
            $('.user_id').val(id);
            $('.user_nama').val(name);
            $('.user_email').val(email);
          
            // Call Modal Edit
            $('#editModal').modal('show');
        });

        // get Delete Data
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.userID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
        
    });
</script>
</body>
</html>