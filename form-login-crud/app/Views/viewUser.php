<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Lists</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h3>Product Lists</h3>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($user as $row): ?>
            <tr>
                <td><?= $row['user_id'];?></td>r
                <td><?= $row['user_nama'];?></td>
                <td><?= $row['user_email'];?></td>
                <td><a href="/user/edit/<?= $row['user_id']; ?>">Edit</a>
                     <a href="/user/delete/<?= $row['user_id']; ?>">Delate</a>
                     
            </td>
            </tr>
            <?php endforeach;?>
        </tbody>
        </table>

    </div>
    
    <!-- Modal Add Product-->
    <form action="/user/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
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
    <!-- End Modal Add Product-->

    <!-- Modal Edit Product-->
    <form action="/user/update" method="post">
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
                    <input type="text" class="form-control user_id" name="user_id">
                </div>
                
                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" class="form-control user_nama" name="user_nama">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control user_nama" name="user_email">
                </div>

              
            
            </div>
            <div class="modal-footer">
                <input type="hidden" name="user_id" class="user_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->

    <!-- Modal Delete Product-->
    <form action="/user/delete" method="post">
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
            
               <h4>apakah anda yakin ingin menghapus user ini?</h4>
            
            </div>
            <div class="modal-footer">
                <input type="hidden" name="user_id" class="userID">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Delete Product-->


<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){

        // get Edit Product
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

        // get Delete Product
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