<?php $__env->startSection('content'); ?>
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="admin-heading">All Students</h2>
                </div>
                <div class="offset-md-6 col-md-2">
                    <a class="add-new" href="">Add Student</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message"></div>
                    <table class="content-table">
                        <thead>
                            <th>S.No</th>
                            <th>Student Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            
                                <tr>
                                    <td class="id"></td>
                                    <td></td>
                                    <td class="text-capitalize"></td>
                                    <td></td>
                                    <td></td>
                                    <td class="view">
                                        <button data-sid=''
                                            class="btn btn-primary view-btn">View</button>
                                    </td>
                                    <td class="edit">
                                        <a href="" class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="delete">
                                        <form action="" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger delete-student">Delete</button>
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </td>
                                </tr>
                            
                        </tbody>
                    </table>
                    
                    <div id="modal">
                        <div id="modal-form">
                            <table cellpadding="10px" width="100%">

                            </table>
                            <div id="close-btn">X</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\My PC\Documents\Laravel Project\Library-Management-System\resources\views/student/index.blade.php ENDPATH**/ ?>