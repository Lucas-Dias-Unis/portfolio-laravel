{{-- resources/views/about.blade.php --}}
<x-layout title="Sobre - Dupla Dinâmica">
    <div style="padding-top: 80px;">
        <div class="container section-padding">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-5">
                            <h1 class="mb-4">Sobre Mim</h1>
                            
                            <div class="row mb-4">
                                <div class="col-md-4 text-center mb-4">
                                    <img src="{{ asset('images/image.jpg') }}" 
                                         alt="Dupla Dinâmica" class="img-fluid shadow-lg foto-perfil">
                                </div>
                                <div class="col-md-8">
                                    <h3>Dupla Dinâmica</h3>
                                    <p class="text-muted">Desenvolvedores Full Stack</p>
                                    <p>
                                        Somos desenvolvedores apaixonados por tecnologia com mais de 5 anos de experiência 
                                        em desenvolvimento web. Especializado em PHP, Laravel e JavaScript, sempre buscamos 
                                        criar soluções inovadoras e eficientes.
                                    </p>
                                </div>
                            </div>

                            <h4>Nossa Jornada</h4>
                            <p>
                                Lucas comçou sua carreira em 2020 como estagiário e desde então venho me especializando 
                                em desenvolvimento frontend com PHP e Laravel. Tenho experiência em sistemas corporativos complexos.
                                <br><br>Kauan comçou sua carreira em 2018 como estagiário e desde então vem se especializando 
                                em desenvolvimento backend com PHP e Laravel. Tem experiência tanto em projetos 
                                pequenos quanto em sistemas corporativos complexos.
                            </p>

                            <h4>O que nós fazemos</h4>
                            <ul>
                                <li>Desenvolvimento de aplicações web com Laravel</li>
                                <li>Criação de APIs RESTful</li>
                                <li>Integração com bancos de dados</li>
                                <li>Frontend com Bootstrap e JavaScript</li>
                                <li>Otimização de performance</li>
                            </ul>

                            <div class="text-center mt-4">
                                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                                    Vamos Conversar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
