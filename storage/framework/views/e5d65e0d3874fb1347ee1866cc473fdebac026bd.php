<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> Quizler <?php $__env->endSlot(); ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="<?php echo e(route('quizzes.create')); ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Quiz Oluştur</a>
            </h5>
            <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Quiz</th>
      <th scope="col">Durum</th>
      <th scope="col">Bitis Tarihi</th>
      <th scope="col">İşlemler</th>
    </tr>
  </thead>
  <tbody>
      <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <tr>
      <td> <?php echo e($quiz->title); ?></td>   <!-- veritabanına bağlantı -->
      <td><?php echo e($quiz->status); ?></td>
      <td><?php echo e($quiz->finished_at); ?></td>
      <td>
          <a href="#" class="btn btn -sm btn-primary"><i class="fa fa-pen"></i></a>
          <a href="#" class="btn btn -sm btn-danger"><i class="fa fa-times"></i></a>
          
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
    <?php echo e($quizzes->links()); ?>  <!-- veritabnaından geçen verileri 5/10 şekilde ayırmayı sağlar-->
    </div>
    
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Furkan\laravel\quiz\resources\views/admin/quiz/list.blade.php ENDPATH**/ ?>