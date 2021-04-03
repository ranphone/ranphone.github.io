<?php $__env->startSection('content'); ?>
<?php $__env->startPush('nav'); ?>
<ul class="nav-menu nav navbar-nav">
    <?php $__currentLoopData = $categori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="cat-4"><a href="<?php echo e(route('artikel.kategori',$item->slug)); ?>"><?php echo e($item->nama_kategori); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopPush(); ?>
<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <ul class="page-header-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ul>
                <h1>Contact</h1>
            </div>
        </div>
    </div>
</div>
<!-- /Page Header -->


<!-- section -->
<div class="section">
<!-- container -->
<div class="container">
    <!-- row -->
    <div class="row">
        <div class="col-md-6">
            <div class="section-row">
                <h3>Contact Information</h3>
                <p>Jika ingin bertanya mengenai smartphone atau memberi saran smartphone apa saja yang memiliki harga di rentang 1-3 juta, bisa kirim email atau nomor yang tercantum dibawah ini. Terima Kasih</p>
                <ul class="list-style">
                    <li><p><strong>Email:</strong> nurfirmansyah67@gmail.com</p></li>
                    <li><p><strong>Phone:</strong> 0812 8583 2130</p></li>
                    <li><p><strong>Address:</strong> Depok</p></li>
                </ul>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <div class="section-row">
                <a href="/" class="logo"><img src="<?php echo e(asset('front/img/your-logo.png')); ?>" alt="" style="width: 450px; padding-top: 100px;"></a>
            </div>
        </div>
    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /section -->
<?php $__env->startPush('categoris'); ?>
<ul class="footer-links">
    <?php $__currentLoopData = $categori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><a href="<?php echo e(route('artikel.kategori',$item->slug)); ?>"><?php echo e($item->nama_kategori); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ranphone\resources\views/front/contact.blade.php ENDPATH**/ ?>