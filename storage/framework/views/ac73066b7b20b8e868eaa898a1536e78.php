
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Id : <?php echo e($students->id); ?></h5>
        <h5 class="card-title">Name : <?php echo e($students->name); ?></h5>
        <p class="card-text">Address : <?php echo e($students->address); ?></p>
        <p class="card-text">Mobile : <?php echo e($students->mobile); ?></p>
  </div>
      
    </hr>
  
  </div>
</div>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\orm laravel\project-ORM\resources\views/students/show.blade.php ENDPATH**/ ?>