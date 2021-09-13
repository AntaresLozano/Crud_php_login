<?php include('db.php');
include('includes/header.php');
session_start();
?>

<div class="container">
    <div class="row">
        <!-- formulario -->
        <div class="col-md-4 pt-5" >

            <?php if(isset($_SESSION['message'])){ ?>

                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>              
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

           <?php session_unset(); }?>


            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name ="title" class="form-control"
                        placeholder ="Task Title" autofocus>
                    </div>
                    <div class="form-group pt-2 pb-2" >
                        <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                </form>
            </div>
        </div>
        <!-- tabla -->
        <div class="col-md-8">
                <table class="table table-striped">
                    <!-- cabeza tabla -->
                    <thead>
                        <!-- fila superior -->
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>category</th>
                            <th>Created at</th>
                            <th>Actions</th> 
                        </tr>
                    </thead>
                    <!-- cuerpo de la tabla -->
                    <tbody>
                        <?php 
                        $query = "SELECT * FROM task Ta INNER JOIN category Ca ON Ta.id_category = Ca.id_category";

                        $result_tasks = mysqli_query($conn,$query);

                        // recorrer una a una la infomación de result
                        while($row = mysqli_fetch_assoc($result_tasks)){ ?>
                            <tr>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['name_category'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            
                            <td>
                                
                                <a class="btn btn-primary mb-2" href="edit.php?id=<?php echo $row['id'] ?>"><i class="far fa-edit"></i></a>
                                <a class="btn btn-danger" href="delete_task.php?id=<?php echo $row['id'] ?>"><i class="fas fa-trash-alt"></i></i></a>
                                
                            </td>                             
                            
                        </tr>
                            
                        
                        <?php } ?>                    
                        
                       
                    </tbody>
                </table>
        </div>
    </div>
</div>


<?php include('includes/footer.php')?>