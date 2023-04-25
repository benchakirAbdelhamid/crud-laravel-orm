
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>CRUD APPLICATION</h2>
                    </div>
                    <?php if(count($students)>0): ?>
                    <div class="card-body">
                        <a href="<?php echo e(url('/student/create')); ?>" class="btn btn-success w-100 " title="Add New Student">
                           Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->address); ?></td>
                                        <td><?php echo e($item->mobile); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/student/' . $item->id)); ?>" ><button class="btn btn-info btn-sm">View</button></a>
                                            
                                            
                                            <a href="<?php echo e(route('student.edit',$item->id)); ?>" ><button class="btn btn-primary btn-sm"> Edit</button></a>
                                            
                                            <form method="POST" action="<?php echo e(route('student.destroy', $item->id)); ?>"  style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php else: ?>
                        <h1 class="alert alert-danger text-center" role="alert" >Data Not Found</h1> 
                    <?php endif; ?>
                   
                </div>
                
                    
                

                <div class="modal-footer">
                    <a href="student/deleteAll" class="btn btn-danger" 
                       >Yes, Delete them all !</a>
                </div>
               
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\orm laravel\project-ORM\resources\views/students/index.blade.php ENDPATH**/ ?>