<?php $__env->startSection('content'); ?>

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Post content -->
            <div class="col-md-8">
                <div class="section-row sticky-container">
                    <div class="main-post">
                        <h3><?php echo e($artikel_detail->judul); ?></h3>
                        <figure class="figure-img">
                            <img class="img-responsive" src="<?php echo e(asset('uploads/'.$artikel_detail->gambar)); ?>"
                                width="600px" height="600px" alt="">
                        </figure>
                        <?php echo $artikel_detail->body; ?>

                    </div>
                    <div class="post-shares sticky-shares">
                        <a target ="_blank" href="https://www.facebook.com/firman.nur.372"><i class="fa fa-facebook"></i></a>
                        <a target ="_blank" href="https://twitter.com/Randy11365378"><i class="fa fa-twitter"></i></a>
                        <a target ="_blank" href="https://www.instagram.com/randy_nur13/"><i class="fa fa-instagram"></i></a>
                        <a target ="_blank" href="https://www.youtube.com/channel/UCGIOwUKbq3AcPUHFeQRTUlg"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>



            </div>
            <!-- /Post content -->

            <!-- aside -->
            <div class="col-md-4">
                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Featured Posts</h2>
                    </div>

                    <?php $__currentLoopData = $artikelterkait; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="post post-thumb">
                            <a class="post-img" href="<?php echo e(route('artikel.detail', $item->judul)); ?>"><img src="<?php echo e(asset('uploads/'.$item->gambar)); ?>" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-3" href="<?php echo e(route('artikel.kategori', $item->kategori->nama_kategori)); ?>"><?php echo e($item->kategori->nama_kategori); ?></a>
                                    <span class="post-date"><?php echo e($item->created_at->diffForHumans()); ?></span>
                                </div>
                                <h3 class="post-title"><a href="<?php echo e(route('artikel.detail', $item->judul)); ?>"><?php echo e($item->judul); ?></a>
                                </h3>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </div>
                <!-- /post widget -->

                <!-- catagories -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Catagories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <?php $__currentLoopData = $categori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('artikel.kategori',$c->slug)); ?>"
                                    class="cat-1"><?php echo e($c->nama_kategori); ?><span><?php echo e($c->artikel_count); ?></span></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <!-- /catagories -->
            </div>
            <!-- /aside -->
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

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ranphone\resources\views/front/artikel_detail.blade.php ENDPATH**/ ?>