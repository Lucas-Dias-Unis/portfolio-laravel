
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['project']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['project']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="col-md-4 mb-4">
    <div class="card h-100">
        
        <img src="<?php echo e($project['image']); ?>" class="card-img-top" alt="<?php echo e($project['title']); ?>">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo e($project['title']); ?></h5>
            <p class="card-text"><?php echo e($project['description']); ?></p>
            
            <div class="mb-3">
                
                <?php $__currentLoopData = $project['technologies']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="badge bg-primary me-1"><?php echo e($tech); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            <div class="mt-auto">
                <a href="<?php echo e($project['demo_url']); ?>" class="btn btn-outline-primary me-2">Demo</a>
                <a href="<?php echo e($project['github_url']); ?>" class="btn btn-outline-secondary">GitHub</a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\Documentos\Faculdade\Web\laravel-portfolio-trabalho\resources\views/components/project-card.blade.php ENDPATH**/ ?>