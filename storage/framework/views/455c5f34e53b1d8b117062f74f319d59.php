
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
            Dupla Dinâmica
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" 
                       href="<?php echo e(route('home')); ?>">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('about') ? 'active' : ''); ?>" 
                       href="<?php echo e(route('about')); ?>">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>" 
                       href="<?php echo e(route('contact')); ?>">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\Documentos\Faculdade\Web\laravel-portfolio-trabalho\resources\views/components/navbar.blade.php ENDPATH**/ ?>