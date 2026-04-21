<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $project['title'] }} - OGB Projets</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .font-serif {
            font-family: 'DM Serif Display', serif;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-background text-foreground antialiased">

    <header x-data="{ isOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-primary shadow-lg">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                

                <a href="/" class="flex items-center gap-3 group">

                    <div class="flex flex-col items-center"> <img src="/logo/img_03-remove.png"
                            alt="OGB OUAT GROUP BUSINESS Logo" class="h-14 w-auto object-contain">
                    </div>
                </a>
                

                <div class="hidden lg:flex items-center gap-4">
                    <a href="/#contact"
                        class="bg-secondary text-secondary-foreground px-5 py-2.5 rounded text-sm font-semibold hover:bg-secondary/90 transition-colors duration-200 shadow-sm">
                        Nous Contacter
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-primary">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-primary/80 mix-blend-multiply z-10"></div>
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('{{ asset($project['hero_image']) }}')"></div>
        </div>

        <div class="relative z-20 max-w-[1440px] mx-auto px-6 lg:px-8">
            <a href="/#realisations"
                class="inline-flex items-center gap-2 text-secondary hover:text-white transition-colors mb-8 text-sm font-medium">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> Retour aux réalisations
            </a>

            <div class="flex flex-wrap items-center gap-3 mb-6">
                <span
                    class="bg-secondary text-secondary-foreground px-3 py-1 rounded-full text-xs font-bold tracking-widest uppercase">{{ $project['category'] }}</span>
                <span class="bg-white/20 text-white backdrop-blur-sm px-3 py-1 rounded-full text-xs font-medium">Année
                    {{ $project['year'] }}</span>
            </div>

            <h1 class="font-serif text-5xl lg:text-7xl text-white leading-tight mb-6 max-w-4xl">
                {{ $project['title'] }}
            </h1>
            <p class="text-xl text-white/80 max-w-2xl leading-relaxed">
                {{ $project['description_short'] }}
            </p>
        </div>
    </section>

    <section class="py-20 bg-background">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-16">

                <div class="lg:col-span-1 space-y-8">
                    <div class="bg-card border border-border rounded-2xl p-8 shadow-sm">
                        <h3 class="font-serif text-2xl text-foreground mb-6">Aperçu du projet</h3>

                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div
                                    class="w-10 h-10 rounded-lg bg-secondary/15 flex items-center justify-center shrink-0">
                                    <i data-lucide="map-pin" class="text-secondary w-5 h-5"></i>
                                </div>
                                <div>
                                    <p
                                        class="text-xs text-muted-foreground uppercase tracking-widest font-semibold mb-1">
                                        Localisation</p>
                                    <p class="text-foreground font-medium">{{ $project['location'] }}</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="w-10 h-10 rounded-lg bg-secondary/15 flex items-center justify-center shrink-0">
                                    <i data-lucide="user" class="text-secondary w-5 h-5"></i>
                                </div>
                                <div>
                                    <p
                                        class="text-xs text-muted-foreground uppercase tracking-widest font-semibold mb-1">
                                        Client</p>
                                    <p class="text-foreground font-medium">{{ $project['client'] }}</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="w-10 h-10 rounded-lg bg-secondary/15 flex items-center justify-center shrink-0">
                                    <i data-lucide="clock" class="text-secondary w-5 h-5"></i>
                                </div>
                                <div>
                                    <p
                                        class="text-xs text-muted-foreground uppercase tracking-widest font-semibold mb-1">
                                        Durée des travaux</p>
                                    <p class="text-foreground font-medium">{{ $project['duration'] }}</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="w-10 h-10 rounded-lg bg-secondary/15 flex items-center justify-center shrink-0">
                                    <i data-lucide="check-circle" class="text-secondary w-5 h-5"></i>
                                </div>
                                <div>
                                    <p
                                        class="text-xs text-muted-foreground uppercase tracking-widest font-semibold mb-1">
                                        Statut</p>
                                    <p class="{{ $project['status_color'] }} font-medium">{{ $project['status'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <h2 class="font-serif text-3xl lg:text-4xl text-foreground mb-6">Le Défi</h2>
                    <p class="text-muted-foreground leading-relaxed mb-8">
                        {{ $project['challenge'] }}
                    </p>

                    <h2 class="font-serif text-3xl lg:text-4xl text-foreground mb-6">La Solution OGB</h2>
                    <p class="text-muted-foreground leading-relaxed mb-6">
                        {{ $project['solution'] }}
                    </p>

                    <ul class="space-y-4 mb-8">
                        @foreach($project['features'] as $feature)
                            <li class="flex items-start gap-3 text-muted-foreground">
                                <i data-lucide="check" class="text-secondary w-5 h-5 shrink-0 mt-1"></i>
                                <span>{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-muted/30" x-data="{ lightboxOpen: false, lightboxType: '', lightboxSrc: '' }">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-8">
            <h2 class="font-serif text-3xl lg:text-4xl text-foreground mb-10 text-center">Galerie du projet</h2>

            @if(isset($project['gallery']) && count($project['gallery']) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    @foreach($project['gallery'] as $media)
                        @if($media['type'] === 'image')
                            <div @click="lightboxOpen = true; lightboxType = 'image'; lightboxSrc = '{{ asset($media['url']) }}'"
                                class="group relative rounded-2xl overflow-hidden aspect-[4/3] bg-primary/10 cursor-pointer shadow-sm hover:shadow-xl transition-all duration-300">
                                <img src="{{ asset($media['url']) }}" alt="Galerie"
                                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-primary/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                    <i data-lucide="maximize-2" class="text-white w-10 h-10"></i>
                                </div>
                            </div>

                        @elseif($media['type'] === 'video')
                            <div @click="lightboxOpen = true; lightboxType = 'video'; lightboxSrc = '{{ asset($media['url']) }}'"
                                class="group relative rounded-2xl overflow-hidden aspect-[4/3] bg-primary/20 cursor-pointer shadow-sm hover:shadow-xl transition-all duration-300">
                                <video src="{{ asset($media['url']) }}" class="absolute inset-0 w-full h-full object-cover" muted
                                    loop playsinline onmouseover="this.play()" onmouseout="this.pause()"></video>
                                <div
                                    class="absolute inset-0 bg-black/40 flex items-center justify-center transition-colors group-hover:bg-black/50">
                                    <div
                                        class="w-16 h-16 rounded-full bg-secondary text-secondary-foreground flex items-center justify-center pl-1 group-hover:scale-110 transition-transform shadow-lg">
                                        <i data-lucide="play" class="w-8 h-8 fill-current"></i>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            @else
                <p class="text-center text-muted-foreground bg-white/50 py-10 rounded-2xl border border-border">
                    Les images de ce projet seront bientôt disponibles.
                </p>
            @endif
        </div>

        <div x-show="lightboxOpen" class="fixed inset-0 z-[100] flex items-center justify-center bg-black/95 p-4 md:p-8"
            x-transition.opacity x-cloak>

            <button @click="lightboxOpen = false; lightboxSrc = ''"
                class="absolute top-6 right-6 p-3 text-white/70 hover:text-white bg-white/10 hover:bg-white/20 rounded-full transition-all z-20">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>

            <div class="absolute inset-0 z-10" @click="lightboxOpen = false; lightboxSrc = ''"></div>

            <div class="relative z-20 max-w-6xl w-full flex items-center justify-center pointer-events-none">

                <template x-if="lightboxType === 'image'">
                    <img :src="lightboxSrc"
                        class="max-w-full max-h-[85vh] object-contain rounded-lg shadow-2xl pointer-events-auto"
                        @click.stop>
                </template>

                <template x-if="lightboxType === 'video'">
                    <video :src="lightboxSrc"
                        class="max-w-full max-h-[85vh] rounded-lg shadow-2xl bg-black pointer-events-auto" autoplay loop
                        controls muted playsinline @volumechange="$el.muted = true; $el.volume = 0" @click.stop>
                    </video>
                </template>

            </div>
        </div>
    </section>

    <section class="py-24 bg-primary text-center px-6">
        <div class="max-w-3xl mx-auto">
            <h2 class="font-serif text-4xl lg:text-5xl text-white mb-6">Un projet similaire en tête ?</h2>
            <p class="text-white/70 mb-10 text-lg">Nos experts sont à votre disposition pour étudier la faisabilité de
                votre projet architectural ou d'infrastructure.</p>
            <a href="/#contact"
                class="inline-flex items-center gap-2 bg-secondary text-secondary-foreground px-8 py-4 rounded font-semibold text-lg hover:bg-secondary/90 transition-all shadow-xl hover:-translate-y-1">
                Demander un devis
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>
    </section>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>