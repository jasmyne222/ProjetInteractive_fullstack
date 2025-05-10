<?php $__env->startSection('title', 'Test Vue'); ?>

<?php $__env->startSection('app'); ?>
  <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.vue', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/jasmine/Documents/Cours/ProjetInteractive_fullstack/resources/views/test.blade.php ENDPATH**/ ?>