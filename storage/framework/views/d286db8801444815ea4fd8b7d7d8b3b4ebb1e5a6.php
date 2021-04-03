  <?php $__env->startPush('customcss'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">
  <?php $__env->stopPush(); ?>
  <?php $__env->startSection('title','Dahboard'); ?>
  <?php $__env->startSection('page-title','Home'); ?>
  <?php $__env->startSection('content'); ?>
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Add New Artikel

      </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <form action="<?php echo e(route('artikel.store')); ?>" enctype="multipart/form-data" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <?php if($errors->has('judul')): ?>
              <div class="alert alert-danger">
                  <strong><?php echo e($errors->first('judul')); ?></strong>
              </div>
          <?php endif; ?>
          <label>Judul Artikel</label>
          <input type="text" class="form-control" name="judul">
        </div>
        <div class="form-group">
           <?php if($errors->has('gambar')): ?>
              <div class="alert alert-danger">
                  <strong><?php echo e($errors->first('gambar')); ?></strong>
              </div>
          <?php endif; ?>
          <label>Gambar</label>
          <input type="file" class="form-control" name="gambar">
        </div>
        <div class="form-group">
          <label>Kategori Artikel</label>
          <select name="categoris_id" class="form-control">
              <?php $__currentLoopData = $categori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value=<?php echo e($item->id); ?>><?php echo e($item->nama_kategori); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <div class="form-group">
          <label>Isi Artikel</label>
          <?php if($errors->has('body')): ?>
          <div class="alert alert-danger">
              <strong><?php echo e($errors->first('body')); ?></strong>
          </div>
         <?php endif; ?>
           <textarea name="body" id="editor1" class="textarea" placeholder="Place some text here"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
          </textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Tambah Artikel</button>
          <a href="<?php echo e(route('artikel.index')); ?>" class="btn btn-danger">Kembali</a>
        </div>

      </form>
    </div>
  </div>
</div>
  <!-- /.box -->
  <?php $__env->stopSection(); ?>
  <?php $__env->startPush('datatables'); ?>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      //CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
  </script>
  <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_blog\resources\views/artikel1/create.blade.php ENDPATH**/ ?>