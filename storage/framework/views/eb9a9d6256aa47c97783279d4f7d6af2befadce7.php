<?php $__env->startSection('content'); ?>
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">All Categories</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="">Add Category</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message"></div>
                    <table class="content-table">
                        <thead>
                            <th>S.No</th>
                            <th>Category Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="edit">
                                        <a href="" class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="delete">
                                        <form action="" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger delete-author">Delete</button>
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </td>
                                </tr>
                            
                                <tr>
                                    <td colspan="4">No Category Found</td>
                                </tr>

                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\My PC\Documents\Laravel Project\Library-Management-System\resources\views/category/index.blade.php ENDPATH**/ ?>