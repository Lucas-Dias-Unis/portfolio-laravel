
<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Portfólio - Dupla Dinamica']); ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">
                        Olá, nós somos a<br>
                        <span class="text-warning">Dupla Dinâmica</span>
                    </h1>
                    <p class="lead mb-4">
                        Desenvolvedor Full Stack especializado em Laravel e PHP. 
                    </p>
                    <div class="mb-4">
                        <a href="<?php echo e(route('contact')); ?>" class="btn btn-warning btn-lg me-3">Entre em Contato</a>
                        <a href="<?php echo e(route('about')); ?>" class="btn btn-outline-light btn-lg">Saiba Mais</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="<?php echo e(asset('images/image.jpg')); ?>" 
                         alt="Dupla Dinamica" class="img-fluid shadow-lg foto-perfil">
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Nossas Habilidades</h2>
            <div class="row">
                <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="fw-semibold"><?php echo e($skill['name']); ?></span>
                            <span><?php echo e($skill['level']); ?>%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" 
                                 style="width: <?php echo e($skill['level']); ?>%" 
                                 role="progressbar"></div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5 text-white">Nossos Projetos</h2>
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    
                    <?php if (isset($component)) { $__componentOriginalb009b6bea983337cad65fcfb8a10d717 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb009b6bea983337cad65fcfb8a10d717 = $attributes; } ?>
<?php $component = App\View\Components\ProjectCard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('project-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ProjectCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['project' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb009b6bea983337cad65fcfb8a10d717)): ?>
<?php $attributes = $__attributesOriginalb009b6bea983337cad65fcfb8a10d717; ?>
<?php unset($__attributesOriginalb009b6bea983337cad65fcfb8a10d717); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb009b6bea983337cad65fcfb8a10d717)): ?>
<?php $component = $__componentOriginalb009b6bea983337cad65fcfb8a10d717; ?>
<?php unset($__componentOriginalb009b6bea983337cad65fcfb8a10d717); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12 text-center text-white">
                        <p>Nenhum projeto encontrado.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH D:\Documentos\Faculdade\Web\laravel-portfolio-trabalho\resources\views/index.blade.php ENDPATH**/ ?>