<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="container pt-5">
    <div class="d-grid gap-2">
        <a href="<?php echo e(route('stagiaires.create')); ?>" class="btn btn-primary" type="button">Add New Stagiaire</a>
      </div>
    <?php if(count($s)>0): ?>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">NAME</th>
                <th scope="col">AGE</th>
                <th scope="col">WORK</th>
                <th scope="col">UPDATE</th>
                <th scope="col">DELETE</th>

            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $__currentLoopData = $s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td scope="row"> <?php echo e($item->id); ?> </td>
                <td> <?php echo e($item->name); ?> </td>
                <td> <?php echo e($item->age); ?> </td>
                <td> <?php echo e($item->work); ?> </td>
                <td> <a href="<?php echo e(route('stagiaires.edit',$item->id)); ?>" class="btn btn-warning">update</a> </td>
                <td> <a href="<?php echo e(route('stagiaires.destroy',$item->id)); ?>"  class="btn btn-danger" >delete</a> </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
    <?php else: ?>
    <p class="alert alert-danger" role="alert" >pas de stagiaire dans la base do donnes</p> 
    <?php endif; ?>

  
    
</body>
</html><?php /**PATH C:\xampp\htdocs\orm laravel\project-ORM\resources\views/showstagiaires.blade.php ENDPATH**/ ?>