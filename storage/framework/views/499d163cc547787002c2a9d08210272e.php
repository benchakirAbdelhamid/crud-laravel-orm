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

    <form method="POST" action="<?php echo e(route('stagiaires.update',$data[0]->id)); ?>"  >
        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>
        <div class="mb-3">
          
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" value="<?php echo e($data[0]->name); ?>" >
          
          
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <input type="text" name="age" class="form-control" id="age" value="<?php echo e($data[0]->age); ?>">
            <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
        </div>
        <div class="mb-3">
          <label for="work" class="form-label">Work</label>
          <input type="text" name="work" class="form-control" id="work" value="<?php echo e($data[0]->work); ?>">
            <?php $__errorArgs = ['work'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
        </div>
        <button type="submit" class="btn btn-primary btn-submit">Update Data</button>
      </form>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\orm laravel\project-ORM\resources\views/editstagiaires.blade.php ENDPATH**/ ?>