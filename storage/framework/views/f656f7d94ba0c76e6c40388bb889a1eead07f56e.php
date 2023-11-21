<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <h1>Contents</h1>
    <div>
        <table class="table table-hover table-bordered table-sm">
            <thead class="table-primary">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Created at</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($content->id); ?></th>
                        <td><?php echo e($content->title); ?></td>
                        <td><?php echo e($content->details); ?></td>
                        <td><?php echo e($content->created_at); ?></td>
                        <td>
                        <a href="<?php echo e(route('contents.edit', ['content'=>$content])); ?>" >Update</a>
                        <form action="<?php echo e(route('content.delete', ['content'=>$content])); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit">Delete</button>
                        </form>
                        <!--<a href="<?php echo e(route('content.delete', ['content'=>$content])); ?>" >Delete</a>-->
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
    </table>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\ecom_elastic\resources\views/contents/index.blade.php ENDPATH**/ ?>