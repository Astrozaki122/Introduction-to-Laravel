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
  <form action="<?php echo e(route('Introduction.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <h2>Create a New List</h2>

    <!--  Name -->
    <label for="name"> Name:</label>
    <input 
      type="text" 
      id="name" 
      name="name" 
      value="<?php echo e(old('name')); ?>" 
      required
    >

    <!-- Skill -->
    <label for="skill"> Skill (0-100):</label>
    <input 
      type="number" 
      id="skill" 
      name="skill" 
      value = "<?php echo e(old('skill')); ?>"
      required
    >

    <!-- Bio -->
    <label for="bio">Biography:</label>
    <textarea
      rows="5"
      id="bio" 
      name="bio" 
      required
    > <?php echo e(old('bio')); ?></textarea>

    <!-- select a location -->
    <label for="location_id">location:</label>
    <select id="location_id" name="location_id" required>
      <option value="" disabled selected>Select a location</option>
      <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($location->id); ?>" <?php echo e($location->id == old('location_id') ? 'selected' : ''); ?>><?php echo e($location->name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <button type="submit" class="btn mt-4">Create New List</button>

    <!-- validation errors -->
    <?php if($errors->any()): ?> 
    <ul class = "px-4 py-2 bg-red-100">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="my-2 text-red-500">
      <?php echo e($error); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </li>
    </ul>
    <?php endif; ?>
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
<?php endif; ?><?php /**PATH C:\Users\astro\Herd\Test-run\resources\views/create.blade.php ENDPATH**/ ?>