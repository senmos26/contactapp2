<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body class="container ">
    <?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h2>Add New Contact</h2>
                </div>
            </div>
            <form>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" class="form-control">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" rows="3" name="adress">

                    </textarea>
                </div>
                <div class="form-group">
                    <label>Company</label>
                    <select class="form-select" name="company">
                        <option selected>select commpany</option>
                        <option value="marjane">Company One</option>
                        <option value="istadev">Company two</option>
                        <option value="">Company three</option>
                    </select>
                </div>
                <hr class="border border-1 border-secondary">
                <div class="form-group">

                    <button class="btn btn-outline-primary">Save</button>
                    <button class="btn btn-outline-secondary">Cancel</button>
                </div>
            </form>
        </div>

    </section>


    <!-- CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- JS Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-pzjw8f+TjOqXjlJ/3y+Ym5R5O0K+PZ/Dz+8Dk3NIcUWNf1V+i1kaX7x1yJ7vG" crossorigin="anonymous"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\Contact-App\resources\views/contacts/create.blade.php ENDPATH**/ ?>