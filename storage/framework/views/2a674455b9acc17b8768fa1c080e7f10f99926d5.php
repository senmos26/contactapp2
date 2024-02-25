<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Contacts</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>
<body>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <h1 class="text-center">Liste des Contacts</h1>
    <div class="row justify-content-center"><!-- Utilisation de justify-content-center pour centrer la rangée -->
        <div class="col-md-4 mb-4">
            <div class="card mx-auto"><!-- Utilisation de mx-auto pour centrer la carte -->
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($contact->first_name); ?> <?php echo e($contact->last_name); ?></h5>
                    <p class="card-text"><strong>Email:</strong> <?php echo e($contact->email); ?></p>
                    <p class="card-text"><strong>Téléphone:</strong> <?php echo e($contact->phone); ?></p>
                    <p class="card-text"><strong>Adresse:</strong> <?php echo e($contact->address); ?></p>
                    <p class="card-text"><strong>Entreprise:</strong> <?php echo e($contact->company); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\Contact-App\resources\views/contacts/show.blade.php ENDPATH**/ ?>