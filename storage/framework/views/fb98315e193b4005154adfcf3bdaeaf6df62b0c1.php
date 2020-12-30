<table class="table table-sm table-dark">
    <thead>
      <tr>
        <th scope="col">Cne</th>
        <th scope="col">First Name</th>
        <th scope="col">Second Name</th>
        <th scope="col">Age</th>
        <th scope="col">Speciality</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $students): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e(.$students->['cne']); ?></td>
        <td><?php echo e(.$students->['firstName']); ?></td>
        <td><?php echo e(.$students->['secondName']); ?></td>
        <td><?php echo e(.$students->['age']); ?></td>
        <td><?php echo e(.$students->['speciality']); ?></td>
        <td>
            <a href="#" class="btn btn-sm btn-info">Show</a>
            <a href="<?php echo e(url('/edit/'.$students->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table><?php /**PATH D:\CRUD\resources\views/studentlist.blade.php ENDPATH**/ ?>