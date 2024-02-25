<!-- _company-selection.blade.php -->
<?php if(isset($companies) && !empty($companies)): ?>
    <select class="form-select form-select-sm">
        <option selected>--All Companies</option>
        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($company->id); ?>"><?php echo e($company->email); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
<?php endif; ?>
<?php /**PATH C:\laragon2\www\Contact-App2\resources\views/Companies/_company-selection.blade.php ENDPATH**/ ?>