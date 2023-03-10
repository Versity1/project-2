<?php if(isset($templates['how-it-work'][0]) && $howItWork = $templates['how-it-work'][0]): ?>
    <?php
        $totalContents = $contentDetails['how-it-work'];
    ?>
<style>
<?php for($i=1; $i<= count($totalContents);$i++): ?>
<?php if($i%2 != 0): ?>
.how-it-works .box-<?php echo e($i); ?>  {
    margin-left: 50px;
    margin-right: 0;
}

.how-it-works.rtl .box-<?php echo e($i); ?>  {
    margin-right: 50px;
    margin-left: 0;
}

.how-it-works .box-<?php echo e($i); ?>::before {
    left: -94px;
    right: -94px;
}

.how-it-works.rtl .box-<?php echo e($i); ?>::before {
    left: -94px;
}

.how-it-works .box-<?php echo e($i); ?>::after {
    left: -65px;
}

.how-it-works.rtl .box-<?php echo e($i); ?>::after {
    left: -65px;
}

<?php else: ?>

.how-it-works.rtl .box-<?php echo e($i); ?>::after {
    left: -65px;
    right: auto;
}

.how-it-works.rtl .box-<?php echo e($i); ?>::before {
    left: -94px;
    right: auto;
}

.how-it-works .box-<?php echo e($i); ?>  {
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: end;
    text-align: right;
}


.how-it-works.rtl .box-<?php echo e($i); ?>  {
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: start;
    text-align: left;
    margin-left: 50px;
}

<?php endif; ?>
.how-it-works .box-<?php echo e($i); ?>::before {
            content: "<?php echo e($i); ?>";
}
<?php endfor; ?>
.how-it-works .box.box-last::after {
    width: 0;
}
</style>


    <!-- how it works -->
    <section class="how-it-works <?php if(session()->get('rtl') == 1): ?> rtl <?php endif; ?>">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-text text-center">
                        <h5><?php echo app('translator')->get(@$howItWork->description->sub_title); ?></h5>
                        <h2><?php echo app('translator')->get(@$howItWork->description->title); ?></h2>
                        <p><?php echo app('translator')->get(@$howItWork->description->short_details); ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $__currentLoopData = $totalContents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k =>  $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($k == 0): ?>
                        <div class="col-lg-6"></div>
                    <?php endif; ?>
                    <div class="col-lg-6">
                        <div
                            class="box box-<?php echo e($k+1); ?>  <?php if(count($totalContents) == ($k+1)): ?> box-last <?php endif; ?>"
                            data-aos="fade-up"
                            data-aos-duration="800"
                            data-aos-anchor-placement="center-bottom"
                        >
                            <div class="img">
                                <img
                                    src="<?php echo e(getFile(config('location.content.path').@$item->content->contentMedia->description->image)); ?>"
                                    class="img-center" alt="<?php echo app('translator')->get('how it work image'); ?>"/>
                            </div>
                            <div class="text">
                                <h4 class="golden-text"><?php echo app('translator')->get(@$item->description->title); ?></h4>
                                <p><?php echo app('translator')->get(@$item->description->short_description); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6"></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

<?php endif; ?>
<?php /**PATH D:\server\htdocs\GOLD_HYIP\project\resources\views/themes/deepblack/sections/how-it-work.blade.php ENDPATH**/ ?>