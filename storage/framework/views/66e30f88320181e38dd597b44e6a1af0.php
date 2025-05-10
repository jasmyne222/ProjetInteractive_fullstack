<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="api-base-url" content="<?php echo e(url('api')); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->yieldContent('app'); ?>
  </head>
  <body>
    <div id="app">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
  </body>
</html><?php /**PATH /Users/jasmine/Documents/Cours/ProjetInteractive_fullstack/resources/views/layouts/vue.blade.php ENDPATH**/ ?>