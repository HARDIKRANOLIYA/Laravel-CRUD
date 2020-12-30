<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

    <title>Student Management System</title>
  </head>
  <body>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <?php if($layout == 'index'): ?>
        <div class="container-fluid mt-4">
            <div class="row">
                <section class='col'>
                    <?php echo $__env->make('studentslist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </section>
                <section class="col"></section>
            </div>
        </div>
    <?php elseif($layout == 'create'): ?>
        <div class="container-fluid mt-4">
            <div class="row">
                 <section class='col'>
                    <?php echo $__env->make('studentslist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </section>
                <section class="col">
                    <div class="card mb-3">
                        <img class="card-img-top gallery rounded" src="https://images.unsplash.com/photo-1560553713-c508ee98d3fb?ixid=MXwxMjA3fDB8MHxzZWFyY2h8ODN8fHN0dWRlbnR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Enter Your Details</h5>
                                    <form class="mt-3" action="<?php echo e(url('/store')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label>Cne</label>
                                            <input type="text" name='cne' class="form-control" placeholder="Enter Your Cne">
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name='firstName' class="form-control" placeholder="Enter Your First Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Second Name</label>
                                            <input type="text" name='secondName' class="form-control" placeholder="Enter Your Surname">
                                        </div>
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type="text" name='age' class="form-control" placeholder="Enter Your Age">
                                        </div>
                                        <div class="form-group">
                                            <label>Speciality</label>
                                            <input type="text" name='speciality' class="form-control" placeholder="Enter Your speciality">
                                        </div>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        <input type="reset" class="btn btn-warning" value="Reset">
                                    </form>
                            </div>
                    </div>
                    
                </section>
            </div>
        </div>
    <?php elseif($layout == 'show'): ?>
        <div class="container-fluid mt-4">
            <div class="row">
                <section class='col'>
                    <?php echo $__env->make('studentslist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </section>
                <section class="col">
                    <div class="card details h-30 w-50 mx-auto">
                        <div class="card-body">
                            <form class="mt-3" action="<?php echo e(url('/show/'.$student->id )); ?>" method="get">
                                CNE: <?php echo e($student->cne); ?> <br>
                                Name: <?php echo e($student->firstName); ?> <br>
                                Surname: <?php echo e($student->secondName); ?> <br>
                                Age: <?php echo e($student->age); ?> <br>
                                Speciality: <?php echo e($student->speciality); ?> <br>
                            </form>
                        </div>
                      </div>
                </section>
            </div>
        </div>
    <?php elseif($layout == 'edit'): ?>
        <div class="container-fluid mt-4">
            <div class="row">
                <section class='col'>
                    <?php echo $__env->make('studentslist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </section>
                <section class="col">
                    <form class="mt-3" action="<?php echo e(url('/update/'.$student->id )); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                          <label>Cne</label>
                          <input type="text" value=" <?php echo e($student->cne); ?> " name='cne' class="form-control" placeholder="Enter Your Cne">
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" value="<?php echo e($student->firstName); ?>" name='firstName' class="form-control" placeholder="Enter Your First Name">
                        </div>
                        <div class="form-group">
                            <label>Second Name</label>
                            <input type="text" value="<?php echo e($student->secondName); ?>" name='secondName' class="form-control" placeholder="Enter Your Surname">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" value="<?php echo e($student->age); ?>" name='age' class="form-control" placeholder="Enter Your Age">
                        </div>
                        <div class="form-group">
                            <label>Speciality</label>
                            <input type="text" value="<?php echo e($student->speciality); ?>" name='speciality' class="form-control" placeholder="Enter Your speciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="reset" class="btn btn-warning" value="Reset">
                      </form>
                </section>
            </div>
        </div>
    <?php elseif($layout == 'destroy'): ?>
        <div class="container-fluid mt-4">
            <div class="row">
                <section class='col'>
                    <?php echo $__env->make('studentslist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </section>
                <section class="col"></section>
            </div>
        </div>
    <?php endif; ?>
   
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html><?php /**PATH D:\CRUD\resources\views/student.blade.php ENDPATH**/ ?>