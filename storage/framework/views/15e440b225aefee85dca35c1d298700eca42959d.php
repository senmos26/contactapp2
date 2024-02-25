<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Contacts</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#refreshButton').click(function(e) {
                e.preventDefault();
                location.reload();
            });
        });
    </script>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>
<body class="">
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container ">
    <div class="row ">

            <div class="col">
                <?php if(session('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
            </div>

    </div>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col"><h3>All Contacts</h3></div>
                <div class="col"><a class="btn btn-outline-success" href="<?php echo e(route('contacts.create')); ?>">Add New</a></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <?php if ($__env->exists('Companies._company-selection', ['companies' => $companies])) echo $__env->make('Companies._company-selection', ['companies' => $companies], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
                <div class="col">
                    <?php echo $__env->make('layouts._filter', ['companies' => $companies], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
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
                        <a class="btn btn-outline-warning" href="<?php echo e(route('contacts.modify',['id'=>$contact->id])); ?>">Modifier</a>

                        <form id="delete-form-<?php echo e($contact->id); ?>" action="<?php echo e(route('contacts.destroy', ['id' => $contact->id])); ?>" method="POST" style="display: inline" >
                            <button type="button" class="btn btn-outline-danger" onclick="confirmDelete('<?php echo e($contact->id); ?>')">Supprimer</button>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot></tfoot>
            <script>
                function confirmDelete(contactId) {
                    if (confirm("Êtes-vous sûr de vouloir supprimer ce contact ?")) {
                        event.preventDefault();
                        document.getElementById('delete-form-' + contactId).submit();
                    }
                }
            </script>
        </table>
    </div>

    <nav aria-label="Page navigation example" class="" >
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>



<!-- JS Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon2\www\Contact-App2\resources\views/contacts/index.blade.php ENDPATH**/ ?>