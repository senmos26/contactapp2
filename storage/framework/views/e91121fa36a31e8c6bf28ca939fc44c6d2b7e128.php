<?php echo $__env->renderUnless(empty($companies), 'layouts._filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

<div class="table-responsive">
    <table class="table table-striped table-hover table-borderless table-primary align-middle">
        <thead class="table-light">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Company</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php if($contacts->isEmpty()): ?>
            <tr><td colspan="7">Aucun contact trouvé</td></tr>
        <?php else: ?>
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="table-primary">
                    <td><?php echo e($contact->id); ?></td>
                    <td><?php echo e($contact->first_name); ?></td>
                    <td><?php echo e($contact->phone); ?></td>
                    <td><?php echo e($contact->email); ?></td>
                    <td><?php echo e($contact->company); ?></td>
                    <td>Item</td>
                    <td>
                        <a href="<?php echo e(route('contacts.show', ['id' => $contact->id])); ?>" class="btn btn-outline-primary">Détails</a>
                        <a class="btn btn-outline-warning">Modifier</a>
                        <a class="btn btn-outline-danger">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </tbody>
        <tfoot></tfoot>
    </table>
</div>
<?php /**PATH C:\laragon2\www\Contact-App2\resources\views/contacts/_contact.blade.php ENDPATH**/ ?>