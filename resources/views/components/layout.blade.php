{{-- resources/views/components/layout.blade.php --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Meu Portfólio' }}</title>
    <meta name="description" content="Portfólio de desenvolvedor web especializado em Laravel e PHP">
    
    {{-- Carrega via Vite: o SCSS e o JS (incluindo Bootstrap) --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- Inclui a Navbar --}}
    <x-navbar />
    
    <main>
        {{-- Conteúdo principal (passado via slot) --}}
        {{ $slot }}
    </main>
    
    {{-- Inclui o Footer --}}
    <x-footer />
</body>
</html>
