<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Resource</title>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

</head>
<body class = "text-center px8 py-12">
  <?php if(session('success')): ?>
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
        <?php echo e(session('success')); ?>

    </div>
  <?php endif; ?>
    <header>
    <nav>
    <h1>List of information</h1>
    <a href="<?php echo e(route('Introduction.index')); ?>" class="btn mt-4 inline-block ">show List</a>
    <a href="<?php echo e(route('Introduction.create')); ?>" class="btn mt-4 inline-block">Create new information</a>
    </nav>
    </header>
    
    <main class="container">
    <?php echo e($slot); ?>

    </main>

</body>
</html><?php /**PATH C:\Users\astro\Herd\Test-run\resources\views/components/layout.blade.php ENDPATH**/ ?>