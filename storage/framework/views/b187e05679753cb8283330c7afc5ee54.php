<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h1> <?php echo e($introduction->name); ?>'s profile</h1> 

    <div class="bg-gray-200 p-4 rounded">
    <p><strong>Skill level:</strong> <?php echo e($introduction->skill); ?></p>
    <p><strong>About me:</strong></p>
    <p><?php echo e($introduction->bio); ?></p>
  </div>
  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>Location Details</h3>
    <p><strong>Name:</strong> <?php echo e($introduction->location->name); ?></p>
    <p><strong>Location:</strong> <?php echo e($introduction->location->location); ?></p>
    <p><strong>Description:</strong> <?php echo e($introduction->location->description); ?></p>
  </div>
  <form action="<?php echo e(route('Introduction.destroy', $introduction->id)); ?>" method="POST">
   <?php echo csrf_field(); ?>
   <?php echo method_field('DELETE'); ?>

   <button type="submit" class="btn my-4">Delete a list</button>


  </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\astro\Herd\Test-run\resources\views/show.blade.php ENDPATH**/ ?>