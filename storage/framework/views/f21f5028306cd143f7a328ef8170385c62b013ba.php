<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?>  Quiz Oluştur  <?php $__env->endSlot(); ?>
    
     <div class="card">
         <div class="card-body">
             <form method="POST" action="<?php echo e(route('quizzes.store')); ?>">
                 <?php echo csrf_field(); ?>   
                 <div class="form-group">
                     <label>Quiz Başlığı</label>
                     <input type='text' name='title' class="form-control" value="<?php echo e(old('title')); ?>"> 
                 </div>
                 <div class="form-group">
                     <label>Quiz Açıklama</label>
                     <textarea name='description' class="form-control" rows="4"><?php echo e(old('description')); ?></textarea>
                 </div>
                 <div class="form-group">
                     <label>Bitiş Tarihi</label>
                     <input type="datetime-local" name="finished_at" value="<?php echo e(old('finished_at')); ?>" class="form_control">
                 </div> 
                 <div class="form-group">
                     <button type="submit"  class="btn btn-success btn-sm btn-block">Quiz Oluştur </button>
                 </div> 
             </form>
        </div>
     </div>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\Furkan\laravel\quiz\resources\views/admin/quiz/create.blade.php ENDPATH**/ ?>