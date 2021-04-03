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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <ul class="list-style">
                    <li><p><strong>Email:</strong> <a href="#"><span class="__cf_email__" data-cfemail="93c4f6f1fef2f4d3f6fef2faffbdf0fcfe">Andihoerudin24@gmail.com</span></a></p></li>
                    <li><p><strong>Phone:</strong> 0896 3888 98 62</p></li>
                    <li><p><strong>Address:</strong>Bogor</p></li>
                </ul>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <div class="section-row">
                <h3>Send A Message</h3>
                <form>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <span>Email</span>
                                <input class="input" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <span>Subject</span>
                                <input class="input" type="text" name="subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="input" name="message" placeholder="Message"></textarea>
                            </div>
                            <button class="primary-button">Submit</button>
                        </div>
                    </div>
                </form>
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

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_blog\resources\views/front/contact.blade.php ENDPATH**/ ?>