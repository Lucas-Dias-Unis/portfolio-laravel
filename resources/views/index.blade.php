{{-- resources/views/index.blade.php --}}
<x-layout title="Portfólio - Dupla Dinamica">
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
                        <a href="{{ route('contact') }}" class="btn btn-warning btn-lg me-3">Entre em Contato</a>
                        <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg">Saiba Mais</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/image.jpg') }}" 
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
                @foreach($skills as $skill)
                    <div class="col-md-6 mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="fw-semibold">{{ $skill['name'] }}</span>
                            <span>{{ $skill['level'] }}%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" 
                                 style="width: {{ $skill['level'] }}%" 
                                 role="progressbar"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5 text-white">Nossos Projetos</h2>
            <div class="row">
                @forelse($projects as $project)
                    {{-- Cada $project é passado para o componente ProjectCard --}}
                    <x-project-card :project="$project" />
                @empty
                    <div class="col-12 text-center text-white">
                        <p>Nenhum projeto encontrado.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layout>
