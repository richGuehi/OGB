<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OGB — OUAT Group Business | Excellence Multisectorielle</title>

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

<body class="bg-background text-foreground antialiased overflow-x-hidden" x-data="{ selectedService: null }">

    <header x-data="{ isOpen: false, isScrolled: false }" @scroll.window="isScrolled = (window.pageYOffset > 20)"
        :class="{ 'bg-primary/95 backdrop-blur-md shadow-lg': isScrolled, 'bg-transparent': !isScrolled }"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="#accueil" class="flex items-center gap-3 group">

                    <div class="flex flex-col items-center"> <img src="logo/img_03-remove.png"
                            alt="OGB OUAT GROUP BUSINESS Logo" class="h-14 w-auto object-contain">
                    </div>
                </a>

                <nav class="hidden lg:flex items-center gap-8">
                    <a href="#accueil"
                        class="text-sm font-medium text-primary-foreground/80 hover:text-secondary transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-secondary hover:after:w-full after:transition-all">Accueil</a>
                    <a href="#services"
                        class="text-sm font-medium text-primary-foreground/80 hover:text-secondary transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-secondary hover:after:w-full after:transition-all">Nos
                        Pôles</a>
                    <a href="#realisations"
                        class="text-sm font-medium text-primary-foreground/80 hover:text-secondary transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-secondary hover:after:w-full after:transition-all">Réalisations</a>
                    <a href="#apropos"
                        class="text-sm font-medium text-primary-foreground/80 hover:text-secondary transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-secondary hover:after:w-full after:transition-all">À
                        Propos</a>
                    <a href="#contact"
                        class="text-sm font-medium text-primary-foreground/80 hover:text-secondary transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-secondary hover:after:w-full after:transition-all">Contact</a>
                </nav>

                <div class="hidden lg:flex items-center gap-4">
                    <a href="tel:+2250757833960"
                        class="flex items-center gap-2 text-sm text-primary-foreground/80 hover:text-secondary transition-colors">
                        <i data-lucide="phone" class="w-4 h-4"></i>
                        <span>+225 07 57 83 39 60</span>
                    </a>
                    <a href="#contact"
                        class="bg-secondary text-secondary-foreground px-5 py-2.5 rounded text-sm font-semibold hover:bg-secondary/90 transition-colors duration-200 shadow-sm">
                        Nous Contacter
                    </a>
                </div>

                <button class="lg:hidden text-primary-foreground p-2" @click="isOpen = !isOpen">
                    <i data-lucide="menu" x-show="!isOpen"></i>
                    <i data-lucide="x" x-show="isOpen" x-cloak></i>
                </button>
            </div>
        </div>

        <div x-show="isOpen" x-transition x-cloak class="lg:hidden bg-primary border-t border-white/10">
            <nav class="flex flex-col px-6 py-4 gap-4">
                <a href="#accueil" @click="isOpen = false"
                    class="text-base font-medium text-primary-foreground/80 hover:text-secondary transition-colors py-2 border-b border-white/5">Accueil</a>
                <a href="#services" @click="isOpen = false"
                    class="text-base font-medium text-primary-foreground/80 hover:text-secondary transition-colors py-2 border-b border-white/5">Nos
                    Pôles</a>
                <a href="#realisations" @click="isOpen = false"
                    class="text-base font-medium text-primary-foreground/80 hover:text-secondary transition-colors py-2 border-b border-white/5">Réalisations</a>
                <a href="#apropos" @click="isOpen = false"
                    class="text-base font-medium text-primary-foreground/80 hover:text-secondary transition-colors py-2 border-b border-white/5">À
                    Propos</a>
                <a href="#contact" @click="isOpen = false"
                    class="mt-2 bg-secondary text-secondary-foreground text-center px-5 py-3 rounded font-semibold text-sm">Nous
                    Contacter</a>
            </nav>
        </div>
    </header>

    @php
        $services = [
            [
                'icon' => 'hard-hat',
                'pole' => 'Pôle 1',
                'title' => 'Construction Neuve',
                'description' => 'Réalisation de bâtiments résidentiels, commerciaux et industriels en respectant les normes de qualité et de sécurité.',
                'tags' => ['Gros Œuvre', 'Génie Civil', 'Bâtiment'],
                'fullDescription' => "OGB prend en charge la construction intégrale de vos infrastructures, de la pose des fondations aux finitions. Nos équipes d'ingénieurs et d'ouvriers qualifiés garantissent des structures solides, pérennes et livrées clé en main.",
                'features' => ['Fondations et terrassement', 'Élévation des murs et charpentes', 'Aménagements extérieurs', 'Bâtiments industriels et commerciaux', 'Logements résidentiels'],
                'projects' => '5+ chantiers livrés'
            ],
            [
                'icon' => 'hammer',
                'pole' => 'Pôle 2',
                'title' => 'Rénovation & Réhabilitation',
                'description' => 'Transformation, modernisation et remise aux normes de vos espaces existants pour leur redonner valeur et fonctionnalité.',
                'tags' => ['Rénovation', 'Aménagement', 'Réhabilitation'],
                'fullDescription' => "Nous redonnons vie à vos bâtiments anciens ou obsolètes. Qu'il s'agisse d'une réhabilitation lourde, d'une mise aux normes ou d'un rafraîchissement d'espaces commerciaux, nous optimisons chaque mètre carré de votre patrimoine.",
                'features' => ['Rénovation d\'espaces de travail', 'Réhabilitation de bâtiments historiques', 'Mise aux normes (sécurité, accessibilité)', 'Isolation thermique et phonique', 'Aménagement intérieur sur mesure'],
                'projects' => '4+ espaces transformés'
            ],
            [
                'icon' => 'ruler',
                'pole' => 'Pôle 3',
                'title' => 'Expertise & Études Techniques',
                'description' => 'Analyse approfondie, calculs de structures et diagnostics avant, pendant ou après la réalisation de vos projets.',
                'tags' => ['Diagnostic', 'Calculs', 'Audits'],
                'fullDescription' => "Avant de bâtir, il faut comprendre et anticiper. Notre bureau d'études réalise des diagnostics précis, des plans détaillés et des expertises techniques poussées pour sécuriser vos investissements immobiliers dès la genèse du projet.",
                'features' => ['Études de faisabilité technique', 'Calculs de structures (béton, acier)', 'Diagnostic des pathologies du bâtiment', 'Évaluation des coûts et métrés', 'Audits de conformité technique'],
                'projects' => '4+ études réalisées'
            ],
            [
                'icon' => 'clipboard-list',
                'pole' => 'Pôle 4',
                'title' => 'Suivi & Maîtrise d\'Œuvre',
                'description' => 'Pilotage intégral de votre chantier, coordination des corps d\'état et garantie du respect des délais et des budgets.',
                'tags' => ['Pilotage', 'Maîtrise d\'Œuvre', 'Coordination'],
                'fullDescription' => "Nous sommes votre représentant exclusif sur le terrain. OGB orchestre l'ensemble des intervenants pour s'assurer que le cahier des charges, les exigences architecturales, les délais et les coûts financiers sont rigoureusement respectés.",
                'features' => ['Direction de l\'exécution des travaux (DET)', 'Ordonnancement et pilotage (OPC)', 'Contrôle qualité permanent', 'Assistance à la réception des travaux', 'Reporting régulier au maître d\'ouvrage'],
                'projects' => '2+ chantiers pilotés'
            ]
        ];
    @endphp


    <section id="accueil" class="relative min-h-screen flex flex-col justify-center overflow-hidden bg-primary">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-primary"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/90 to-primary/40"></div>
            <div class="absolute inset-0 opacity-5"
                style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')">
            </div>
        </div>

        <div class="absolute top-0 left-0 right-0 h-1 bg-secondary z-20"></div>

        <div class="relative z-10 max-w-[1440px] mx-auto px-6 lg:px-8 pt-32 pb-24 w-full">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div
                        class="inline-flex items-center gap-2 bg-secondary/20 border border-secondary/40 text-secondary px-4 py-2 rounded-full text-sm font-medium mb-8">
                        <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                        Groupe Multisectoriel — Abidjan, Côte d'Ivoire
                    </div>

                    <h1
                        class="font-serif text-5xl lg:text-6xl xl:text-7xl leading-tight text-primary-foreground text-balance mb-6">
                        L'Excellence <span class="text-secondary">Multisectorielle</span> à votre Service
                    </h1>

                    <div class="max-w-xl mb-10 pl-5 border-l-2 border-secondary/60">
                        <p class="text-lg lg:text-xl text-primary-foreground/70 leading-relaxed font-light">
                            Spécialiste du <strong class="font-semibold text-white">Bâtiment et des Travaux
                                Publics</strong>, OGB vous accompagne à chaque étape de vos projets : de l'étude
                            technique à la <span class="text-secondary font-medium">construction neuve</span>, en
                            passant par la rénovation et la maîtrise d'œuvre.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <a href="#contact"
                            class="inline-flex items-center gap-2 bg-secondary text-secondary-foreground px-7 py-3.5 rounded font-semibold text-sm hover:bg-secondary/90 transition-all duration-200 shadow-lg hover:shadow-secondary/30 hover:shadow-xl group cursor-pointer">
                            Démarrer un projet
                            <i data-lucide="arrow-right"
                                class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="#contact"
                            class="inline-flex items-center gap-2 border border-white/30 text-primary-foreground px-7 py-3.5 rounded font-semibold text-sm hover:border-secondary hover:text-secondary transition-all duration-200">
                            Nous contacter
                        </a>
                    </div>
                </div>



                <div class="grid grid-cols-2 gap-4">

                    <div x-data="{ count: 0, target: 4, 
                                start() { let s = null; const d = 2000; const step = (t) => { if (!s) s = t; const p = Math.min((t - s) / d, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); }; window.requestAnimationFrame(step); } 
                                }"
                        x-init="let obs = new IntersectionObserver(e => { if (e[0].isIntersecting) { start(); obs.disconnect(); }}); obs.observe($el);"
                        class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 transition-all duration-300 hover:bg-white/10 hover:-translate-y-2 hover:shadow-xl hover:shadow-secondary/20 hover:border-secondary/30 cursor-default">
                        <div class="text-4xl font-bold text-secondary mb-1 transition-transform duration-300 group-hover:scale-110 group-hover:translate-x-1 origin-left"
                            x-text="count">0</div>
                        <div class="text-sm text-primary-foreground/60 leading-snug">Pôles d'Activité</div>
                    </div>

                    <div x-data="{ count: 0, target: 4, 
                                start() { let s = null; const d = 2000; const step = (t) => { if (!s) s = t; const p = Math.min((t - s) / d, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); }; window.requestAnimationFrame(step); } 
                                }"
                        x-init="let obs = new IntersectionObserver(e => { if (e[0].isIntersecting) { start(); obs.disconnect(); }}); obs.observe($el);"
                        class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 transition-all duration-300 hover:bg-white/10 hover:-translate-y-2 hover:shadow-xl hover:shadow-secondary/20 hover:border-secondary/30 cursor-default">
                        <div class="text-4xl font-bold text-secondary mb-1 transition-transform duration-300 group-hover:scale-110 group-hover:translate-x-1 origin-left"
                            x-text="count + '+'">0+</div>
                        <div class="text-sm text-primary-foreground/60 leading-snug">Années d'Expérience</div>
                    </div>

                    <div x-data="{ count: 0, target: 20, 
                                start() { let s = null; const d = 2000; const step = (t) => { if (!s) s = t; const p = Math.min((t - s) / d, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); }; window.requestAnimationFrame(step); } 
                                }"
                        x-init="let obs = new IntersectionObserver(e => { if (e[0].isIntersecting) { start(); obs.disconnect(); }}); obs.observe($el);"
                        class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 transition-all duration-300 hover:bg-white/10 hover:-translate-y-2 hover:shadow-xl hover:shadow-secondary/20 hover:border-secondary/30 cursor-default">
                        <div class="text-4xl font-bold text-secondary mb-1 transition-transform duration-300 group-hover:scale-110 group-hover:translate-x-1 origin-left"
                            x-text="count + '+'">0+</div>
                        <div class="text-sm text-primary-foreground/60 leading-snug">Projets Réalisés</div>
                    </div>

                    <div x-data="{ count: 0, target: 18, 
                                start() { let s = null; const d = 2000; const step = (t) => { if (!s) s = t; const p = Math.min((t - s) / d, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); }; window.requestAnimationFrame(step); } 
                                }"
                        x-init="let obs = new IntersectionObserver(e => { if (e[0].isIntersecting) { start(); obs.disconnect(); }}); obs.observe($el);"
                        class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 transition-all duration-300 hover:bg-white/10 hover:-translate-y-2 hover:shadow-xl hover:shadow-secondary/20 hover:border-secondary/30 cursor-default">
                        <div class="text-4xl font-bold text-secondary mb-1 transition-transform duration-300 group-hover:scale-110 group-hover:translate-x-1 origin-left"
                            x-text="count + '+'">0+</div>
                        <div class="text-sm text-primary-foreground/60 leading-snug">Clients Satisfaits</div>
                    </div>

                </div>
            </div>
        </div>

        <div
            class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 text-primary-foreground/40">
            <span class="text-xs tracking-widest uppercase">Défiler</span>
            <i data-lucide="chevron-down" class="w-5 h-5 animate-bounce"></i>
        </div>
    </section>

    <section id="services" class="py-28 bg-background">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-16">
                <div>
                    <span class="text-secondary text-sm font-semibold uppercase tracking-widest mb-3 block">Nos Pôles
                        d'Activité</span>
                    <h2 class="font-serif text-4xl lg:text-5xl text-foreground text-balance leading-tight">
                        Quatre domaines,<br /><span class="text-primary">une seule expertise</span>
                    </h2>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($services as $service)
                    <article
                        class="group bg-card border border-border rounded-2xl p-7 flex flex-col gap-5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div
                            class="w-12 h-12 rounded-xl bg-secondary/15 flex items-center justify-center group-hover:bg-secondary/25 transition-colors duration-200">
                            <i data-lucide="{{ $service['icon'] }}" class="text-secondary w-6 h-6"></i>
                        </div>
                        <div>
                            <span
                                class="text-xs font-semibold text-secondary uppercase tracking-widest mb-2 block">{{ $service['pole'] }}</span>
                            <h3 class="font-semibold text-lg text-foreground leading-snug text-balance">
                                {{ $service['title'] }}
                            </h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed flex-1">{{ $service['description'] }}</p>

                        <div class="flex flex-wrap gap-2 mb-3">
                            @foreach($service['tags'] as $tag)
                                <span class="text-xs bg-muted text-muted-foreground px-2.5 py-1 rounded-full">{{ $tag }}</span>
                            @endforeach
                        </div>

                        <button @click="selectedService = {{ json_encode($service) }}"
                            class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary group-hover:text-secondary transition-colors duration-200 mt-auto cursor-pointer">
                            En savoir plus
                            <i data-lucide="arrow-right"
                                class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200"></i>
                        </button>
                    </article>
                @endforeach
            </div>
        </div>
    </section>



    <div x-show="selectedService" class="fixed inset-0 z-[60] overflow-y-auto"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-cloak>

        <div class="fixed inset-0 bg-black/60 backdrop-blur-sm" @click="selectedService = null"></div>

        <div class="flex min-h-full items-center justify-center p-4">
            <div @click.away="selectedService = null"
                class="relative w-full max-w-2xl rounded-3xl bg-card border border-border p-8 lg:p-12 shadow-2xl z-10">

                <button @click="selectedService = null"
                    class="absolute top-6 right-6 p-2 text-muted-foreground hover:text-primary rounded-full hover:bg-muted transition-colors">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>

                <template x-if="selectedService">
                    <div>
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-16 h-16 rounded-2xl bg-secondary/15 flex items-center justify-center">
                                <i :data-lucide="selectedService.icon" class="text-secondary w-8 h-8"></i>
                            </div>
                            <div>
                                <span class="text-xs font-semibold text-secondary uppercase tracking-widest block mb-1"
                                    x-text="selectedService.pole"></span>
                                <h3 class="text-3xl font-serif text-foreground" x-text="selectedService.title"></h3>
                            </div>
                        </div>

                        <p class="text-lg text-muted-foreground leading-relaxed mb-8"
                            x-text="selectedService.fullDescription"></p>

                        <h4 class="font-semibold text-foreground mb-4">Nos points forts :</h4>
                        <ul class="space-y-3 mb-10">
                            <template x-for="feature in selectedService.features">
                                <li class="flex items-start gap-3 text-sm text-muted-foreground">
                                    <i data-lucide="check" class="text-secondary w-5 h-5 shrink-0 mt-0.5"></i>
                                    <span x-text="feature"></span>
                                </li>
                            </template>
                        </ul>

                        <div
                            class="mt-10 pt-8 border-t border-border flex flex-col sm:flex-row gap-4 items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="text-4xl font-bold text-secondary"
                                    x-text="selectedService.projects.split(' ')[0]"></span>
                                <span class="text-sm text-muted-foreground leading-snug"
                                    x-text="selectedService.projects.split(' ').slice(1).join(' ')"></span>
                            </div>
                            <a href="#contact" @click="selectedService = null"
                                class="inline-flex items-center gap-2 bg-secondary text-secondary-foreground px-6 py-3 rounded font-semibold hover:bg-secondary/90 shadow-lg transition-all">
                                Demander un devis
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>


    <section id="apropos" class="py-28 bg-primary relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full opacity-5 pointer-events-none"
            style="background-image: radial-gradient(circle at 80% 50%, oklch(0.72 0.14 80) 0%, transparent 70%)"></div>

        <div class="relative z-10 max-w-[1440px] mx-auto px-6 lg:px-8">
            <div class="text-center mb-20">
                <span class="text-secondary text-sm font-semibold uppercase tracking-widest mb-3 block">Pourquoi OGB
                    ?</span>
                <h2 class="font-serif text-4xl lg:text-5xl text-primary-foreground text-balance leading-tight mb-4">Des
                    raisons solides de nous faire confiance</h2>
                <p class="text-primary-foreground/60 leading-relaxed max-w-2xl mx-auto">Depuis plus de 4 ans, OGB s'est
                    imposé comme un partenaire de référence pour les entreprises et institutions qui recherchent
                    qualité, sérieux et résultats.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-20">
                <div class="flex flex-col gap-4">
                    <div class="w-12 h-12 rounded-xl bg-secondary/20 flex items-center justify-center">
                        <i data-lucide="shield-check" class="text-secondary"></i>
                    </div>
                    <h3 class="font-semibold text-primary-foreground text-base">Fiabilité & Transparence</h3>
                    <p class="text-sm text-primary-foreground/60 leading-relaxed">Nous respectons nos engagements
                        contractuels et maintenons une communication ouverte.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="w-12 h-12 rounded-xl bg-secondary/20 flex items-center justify-center">
                        <i data-lucide="award" class="text-secondary"></i>
                    </div>
                    <h3 class="font-semibold text-primary-foreground text-base">Expertise Technique Reconnue</h3>
                    <p class="text-sm text-primary-foreground/60 leading-relaxed">Nos ingénieurs et techniciens
                        apportent un savoir-faire pointu dans nos quatre domaines.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="w-12 h-12 rounded-xl bg-secondary/20 flex items-center justify-center">
                        <i data-lucide="users" class="text-secondary"></i>
                    </div>
                    <h3 class="font-semibold text-primary-foreground text-base">Équipes Pluridisciplinaires</h3>
                    <p class="text-sm text-primary-foreground/60 leading-relaxed">Une synergie unique entre des
                        professionnels de divers secteurs au sein d'un seul groupe.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="w-12 h-12 rounded-xl bg-secondary/20 flex items-center justify-center">
                        <i data-lucide="trending-up" class="text-secondary"></i>
                    </div>
                    <h3 class="font-semibold text-primary-foreground text-base">Croissance & Innovation</h3>
                    <p class="text-sm text-primary-foreground/60 leading-relaxed">Nous investissons continuellement dans
                        les nouvelles technologies et meilleures pratiques.</p>
                </div>
            </div>

            <div class="border-t border-white/10 mb-20"></div>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h3 class="font-serif text-3xl lg:text-4xl text-primary-foreground text-balance mb-4">Un partenaire
                        à la hauteur de vos ambitions</h3>
                    <p class="text-primary-foreground/60 leading-relaxed mb-8">Que vous soyez une PME, une
                        multinationale ou une institution publique, OGB adapte ses solutions à votre contexte.</p>
                    <a href="#contact"
                        class="inline-flex items-center gap-2 bg-secondary text-secondary-foreground px-7 py-3.5 rounded font-semibold text-sm hover:bg-secondary/90 transition-all duration-200 shadow-lg">
                        Démarrer un projet
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3"><i data-lucide="check-circle-2"
                            class="text-secondary mt-0.5 w-5 h-5 shrink-0"></i><span
                            class="text-sm text-primary-foreground/80 leading-snug">Respect des délais et des
                            budgets</span></div>
                    <div class="flex items-start gap-3"><i data-lucide="check-circle-2"
                            class="text-secondary mt-0.5 w-5 h-5 shrink-0"></i><span
                            class="text-sm text-primary-foreground/80 leading-snug">Conformité aux normes
                            internationales</span></div>
                    <div class="flex items-start gap-3"><i data-lucide="check-circle-2"
                            class="text-secondary mt-0.5 w-5 h-5 shrink-0"></i><span
                            class="text-sm text-primary-foreground/80 leading-snug">Service après-vente réactif</span>
                    </div>
                    <div class="flex items-start gap-3"><i data-lucide="check-circle-2"
                            class="text-secondary mt-0.5 w-5 h-5 shrink-0"></i><span
                            class="text-sm text-primary-foreground/80 leading-snug">Approche sur-mesure pour chaque
                            client</span></div>
                </div>
            </div>
        </div>
    </section>

    <section id="realisations" class="py-28 bg-muted/30" x-data="{ activeCategory: 'all' }">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-secondary text-sm font-semibold uppercase tracking-widest mb-3 block">Nos
                    Réalisations</span>
                <h2 class="font-serif text-4xl lg:text-5xl text-foreground text-balance leading-tight mb-6">Des projets
                    qui <span class="text-primary">font la différence</span></h2>
                <p class="text-muted-foreground leading-relaxed max-w-2xl mx-auto">Découvrez une sélection de nos
                    projets réalisés à travers nos différents pôles d'activité en Côte d'Ivoire.</p>
            </div>

            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <button @click="activeCategory = 'all'"
                    :class="activeCategory === 'all' ? 'bg-primary text-primary-foreground shadow-lg' : 'bg-card border border-border text-muted-foreground hover:border-primary hover:text-primary'"
                    class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-200">Tous
                    les projets</button>
                <button @click="activeCategory = 'btp'"
                    :class="activeCategory === 'btp' ? 'bg-primary text-primary-foreground shadow-lg' : 'bg-card border border-border text-muted-foreground hover:border-primary hover:text-primary'"
                    class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-200"><i
                        data-lucide="hard-hat" class="w-4 h-4"></i> BTP</button>
                <button @click="activeCategory = 'telecom'"
                    :class="activeCategory === 'telecom' ? 'bg-primary text-primary-foreground shadow-lg' : 'bg-card border border-border text-muted-foreground hover:border-primary hover:text-primary'"
                    class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-200"><i
                        data-lucide="wifi" class="w-4 h-4"></i> IT & Télécoms</button>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="/projet/laverie-moderne" x-show="activeCategory === 'all' || activeCategory === 'btp'"
                    class="group block bg-card rounded-2xl overflow-hidden border border-border shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

                    <div class="relative h-56 overflow-hidden bg-primary/10">
                        <img src="laverie/img_01.webp" alt="Complexe de Laverie Moderne"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />

                        <div
                            class="absolute inset-0 bg-primary/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span
                                class="bg-secondary text-secondary-foreground px-4 py-2 rounded font-semibold flex items-center gap-2">
                                Voir les détails <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </span>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-secondary text-secondary-foreground text-xs font-semibold px-3 py-1.5 rounded-full shadow-sm">2025</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <span
                            class="uppercase tracking-wider font-medium text-xs text-secondary mb-2 block">Construction
                            & BTP</span>
                        <h3
                            class="font-semibold text-lg text-foreground mb-2 group-hover:text-primary transition-colors">
                            Complexe laverie All Blue</h3>
                        <p class="text-sm text-muted-foreground mb-4">Construction et aménagement clé en main d'une
                            laverie moderne incluant les systèmes de plomberie avancés et l'électricité.</p>
                    </div>
                </a>

                <a href="/projet/maison-individuelle" x-show="activeCategory === 'all' || activeCategory === 'btp'"
                    class="group block bg-card rounded-2xl overflow-hidden border border-border shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="relative h-56 overflow-hidden bg-primary/10">
                        <img src="maison_indiv01/img_5.png" alt="Complexe de Laverie Moderne"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />

                        <div
                            class="absolute inset-0 bg-primary/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span
                                class="bg-secondary text-secondary-foreground px-4 py-2 rounded font-semibold flex items-center gap-2">
                                Voir les détails <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </span>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-secondary text-secondary-foreground text-xs font-semibold px-3 py-1.5 rounded-full shadow-sm">2025</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <span
                            class="uppercase tracking-wider font-medium text-xs text-secondary mb-2 block">Construction
                            & BTP</span>
                        <h3
                            class="font-semibold text-lg text-foreground mb-2 group-hover:text-primary transition-colors">
                            maison-individuelle</h3>
                        <p class="text-sm text-muted-foreground mb-4">Construction clé en main d'une maison d'habitation
                            de 4 pièces, pensée pour le confort familial avec des finitions soignées et durables.</p>
                    </div>
                </a>


            </div>
        </div>
    </section>

    <section id="contact" class="py-28 bg-background">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-secondary text-sm font-semibold uppercase tracking-widest mb-3 block">Nous
                    Contacter</span>
                <h2 class="font-serif text-4xl lg:text-5xl text-foreground text-balance leading-tight mb-6">Parlons de
                    votre <span class="text-primary">prochain projet</span></h2>
            </div>

            <div class="grid lg:grid-cols-5 gap-12">
                <div class="lg:col-span-2 space-y-6">
                    <div
                        class="flex items-start gap-4 p-5 bg-card border border-border rounded-xl hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 rounded-xl bg-secondary/15 flex items-center justify-center shrink-0">
                            <i data-lucide="map-pin" class="text-secondary w-5 h-5"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-foreground mb-1">Adresse</h3>
                            <p class="text-sm text-muted-foreground">Cocody Angré, 7ème Tranche</p>
                            <p class="text-sm text-muted-foreground">Abidjan, Côte d'Ivoire</p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 p-5 bg-card border border-border rounded-xl hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 rounded-xl bg-secondary/15 flex items-center justify-center shrink-0">
                            <i data-lucide="phone" class="text-secondary w-5 h-5"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-foreground mb-1">Téléphone</h3>
                            <p class="text-sm text-muted-foreground">+225 07 57 83 39 60</p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 p-5 bg-card border border-border rounded-xl hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 rounded-xl bg-secondary/15 flex items-center justify-center shrink-0">
                            <i data-lucide="mail" class="text-secondary w-5 h-5"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-foreground mb-1">Email</h3>
                            <p class="text-sm text-muted-foreground">info@ouatge.com</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <div class="bg-card border border-border rounded-2xl p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-foreground mb-6">Envoyez-nous un message</h3>
                        @if(session('success'))
                            <div
                                class="mb-6 p-4 bg-green-500/10 border border-green-500/20 text-green-500 rounded-lg flex items-center gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5"></i>
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="/envoyer-message" method="POST" class="space-y-4">
                            @csrf

                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="flex flex-col gap-1.5">
                                    <label for="name" class="text-sm font-medium">Nom complet *</label>
                                    <input type="text" id="name" name="name"
                                        class="flex h-10 w-full rounded-md border border-input bg-transparent px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring"
                                        required>
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label for="email" class="text-sm font-medium">Email *</label>
                                    <input type="email" id="email" name="email"
                                        class="flex h-10 w-full rounded-md border border-input bg-transparent px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring"
                                        required>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label for="subject" class="text-sm font-medium">Sujet *</label>
                                <input type="text" id="subject" name="subject"
                                    class="flex h-10 w-full rounded-md border border-input bg-transparent px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring"
                                    required>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label for="message" class="text-sm font-medium">Message *</label>
                                <textarea id="message" name="message" rows="5"
                                    class="flex min-h-[80px] w-full rounded-md border border-input bg-transparent px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring resize-none"
                                    required></textarea>
                            </div>
                            <button type="submit"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-secondary text-secondary-foreground px-8 py-3.5 rounded font-semibold hover:bg-secondary/90 transition-all duration-200 mt-4">
                                <i data-lucide="send" class="w-4 h-4"></i>
                                Envoyer le message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div x-data="{ showTeam: false }">

        <button @click="showTeam = true"
            class="fixed bottom-8 right-8 z-[90] flex items-center justify-center gap-2 bg-secondary text-secondary-foreground px-5 py-3 rounded-full shadow-2xl hover:bg-secondary/90 hover:scale-105 hover:shadow-secondary/40 transition-all duration-300 group">
            <i data-lucide="users" class="w-5 h-5"></i>
            <span class="font-semibold text-sm hidden md:block">Notre Équipe</span>
        </button>

        <div x-show="showTeam" class="fixed inset-0 z-[100] overflow-y-auto" x-cloak>

            <div class="fixed inset-0 bg-black/60 backdrop-blur-sm"
                x-transition:enter="transition opacity ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition opacity ease-in duration-200"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="showTeam = false">
            </div>

            <div class="flex min-h-full items-center justify-center p-4 py-12">
                <div x-show="showTeam" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-8 scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                    x-transition:leave-end="opacity-0 translate-y-8 scale-95"
                    class="relative w-full max-w-6xl rounded-3xl bg-card border border-border p-8 lg:p-12 shadow-2xl z-10">

                    <button @click="showTeam = false"
                        class="absolute top-6 right-6 p-2 text-muted-foreground hover:text-primary rounded-full hover:bg-muted transition-colors">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>

                    <div class="text-center mb-12">
                        <span
                            class="text-secondary text-sm font-semibold uppercase tracking-widest mb-2 block">L'Expertise
                            OGB</span>
                        <h3 class="text-3xl lg:text-4xl font-serif text-foreground">Notre Équipe Dirigeante</h3>
                        <p class="text-muted-foreground mt-4 max-w-2xl mx-auto">Des professionnels passionnés et
                            expérimentés, dédiés à la réussite de vos projets d'infrastructure et de technologie.</p>
                    </div>

                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-y-12 gap-x-8">

                        <div class="flex flex-col items-center text-center group">
                            <div
                                class="w-32 h-32 rounded-full overflow-hidden bg-primary/10 border-4 border-secondary/20 mb-4 group-hover:border-secondary group-hover:scale-105 transition-all duration-300">
                                <img src="equipe/Ouattara_Soualiho.jpeg" alt="M. Ouattara Soualiho"
                                    class="w-full h-full object-cover">
                            </div>
                            <h4 class="font-bold text-foreground text-xl mb-1">M. Ouattara Soualiho</h4>
                            <p class="text-secondary text-sm font-semibold mb-3 uppercase tracking-wider">PDG &
                                Technicien Bâtiment</p>
                            <p class="text-sm text-muted-foreground leading-relaxed px-2">Président Directeur Général de
                                OGB. Il apporte son expertise technique et assure la vision stratégique globale du
                                groupe.</p>
                        </div>

                        <div class="flex flex-col items-center text-center group">
                            <div
                                class="w-32 h-32 rounded-full overflow-hidden bg-primary/10 border-4 border-secondary/20 mb-4 group-hover:border-secondary group-hover:scale-105 transition-all duration-300">
                                <img src="equipe/Ouattara_Yacouba.png" alt="M. Ouattara Yacouba"
                                    class="w-full h-full object-cover">
                            </div>
                            <h4 class="font-bold text-foreground text-xl mb-1">M. Ouattara Yacouba</h4>

                            <p class="text-secondary text-sm font-semibold mb-3 uppercase tracking-wider">Responsable
                                Partenariats</p>
                            <p class="text-sm text-muted-foreground leading-relaxed px-2">Acteur clé du développement de
                                l'entreprise, il coordonne les partenariats stratégiques pour OGB.</p>
                        </div>

                        <div class="flex flex-col items-center text-center group">


                            <div
                                class="w-32 h-32 rounded-full overflow-hidden bg-primary/10 border-4 border-secondary/20 mb-4 group-hover:border-secondary group-hover:scale-105 transition-all duration-300">
                                <img src="equipe/Kouassi_Dominique.png" alt="M. Kouassi Dominique"
                                    class="w-full h-full object-cover">
                            </div>
                            <h4 class="font-bold text-foreground text-xl mb-1">M. Kouassi Dominique</h4>
                            <p class="text-secondary text-sm font-semibold mb-3 uppercase tracking-wider">Secrétaire &
                                Relations</p>
                            <p class="text-sm text-muted-foreground leading-relaxed px-2">Secrétaire de l'entreprise, il
                                est également chargé de la gestion du carnet d'adresses et des relations publiques.</p>
                        </div>

                        <div class="flex flex-col items-center text-center group lg:col-start-2 lg:-ml-1/2">
                            <div
                                class="w-32 h-32 rounded-full overflow-hidden bg-primary/10 border-4 border-secondary/20 mb-4 group-hover:border-secondary group-hover:scale-105 transition-all duration-300">
                                <img src="equipe/Diby_Kouadio.jpeg" alt="M. Diby Kouadio Jean-Baptiste"
                                    class="w-full h-full object-cover">
                            </div>
                            <h4 class="font-bold text-foreground text-xl mb-1">M. Diby Kouadio J-B.</h4>
                            <p class="text-secondary text-sm font-semibold mb-3 uppercase tracking-wider">Ingénieur des
                                Travaux</p>
                            <p class="text-sm text-muted-foreground leading-relaxed px-2">Pilote les chantiers sur le
                                terrain, garantissant l'excellence technique et le respect des normes du BTP.</p>
                        </div>

                        <div class="flex flex-col items-center text-center group">
                            <div
                                class="w-32 h-32 rounded-full overflow-hidden bg-primary/10 border-4 border-secondary/20 mb-4 group-hover:border-secondary group-hover:scale-105 transition-all duration-300">
                                <img src="equipe/Ouattara_Mory.PNG" alt="M. Ouattara Mory"
                                    class="w-full h-full object-cover">
                            </div>
                            <h4 class="font-bold text-foreground text-xl mb-1">M. Ouattara Mory</h4>
                            <p class="text-secondary text-sm font-semibold mb-3 uppercase tracking-wider">Admin. Réseau
                                & Système</p>
                            <p class="text-sm text-muted-foreground leading-relaxed px-2">Garant de la performance de
                                notre infrastructure IT et responsable du pôle Télécoms & Informatique.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-foreground text-primary-foreground">
        <div class="bg-secondary">
            <div
                class="max-w-[1440px] mx-auto px-6 lg:px-8 py-12 flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="font-serif text-2xl text-secondary-foreground font-medium mb-1">
                        Prêt à démarrer votre projet ?
                    </h3>
                    <p class="text-secondary-foreground/70 text-sm">
                        Contactez-nous dès aujourd'hui pour un devis gratuit et personnalisé.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="mailto:info@ouatge.com"
                        class="inline-flex items-center gap-2 bg-primary text-primary-foreground px-6 py-3 rounded font-semibold text-sm hover:bg-primary/90 transition-colors">
                        <i data-lucide="mail" class="w-4 h-4"></i>
                        [EMAIL_ADDRESS]
                    </a>
                    <a href="tel:+2250757833960"
                        class="inline-flex items-center gap-2 border-2 border-primary/20 text-primary px-6 py-3 rounded font-semibold text-sm hover:bg-primary/10 transition-colors">
                        <i data-lucide="phone" class="w-4 h-4"></i>
                        +225 07 57 83 39 60
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-[1440px] mx-auto px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-9 h-9 relative shrink-0">
                            <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="w-full h-full">
                                <rect width="40" height="40" rx="6" fill="oklch(0.72 0.14 80)" />
                                <polyline points="6,30 14,20 20,24 28,12 34,10" stroke="white" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <circle cx="34" cy="10" r="2.5" fill="white" />
                            </svg>
                        </div>
                        <div>
                            <span
                                class="text-xl font-bold text-primary-foreground tracking-tight leading-none">OGB</span>
                            <p
                                class="text-[9px] text-primary-foreground/40 uppercase tracking-widest leading-none mt-0.5">
                                OUAT GROUP BUSINESS
                            </p>
                        </div>
                    </div>

                    <p class="text-sm text-primary-foreground/50 leading-relaxed mb-6">
                        Groupe multisectoriel digne de confiance, engagé pour l'excellence et le développement durable
                        en Côte d'Ivoire.
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-start gap-2.5 text-sm text-primary-foreground/60">
                            <i data-lucide="map-pin" class="text-secondary mt-0.5 shrink-0 w-4 h-4"></i>
                            <span>Cocody Angré, Abidjan, Côte d'Ivoire</span>
                        </li>
                        <li class="flex items-center gap-2.5 text-sm text-primary-foreground/60">

                            <i data-lucide="phone" class="text-secondary shrink-0 w-4 h-4"></i>
                            <a href="tel:+2250757833960" class="hover:text-secondary transition-colors">
                                +225 07 57 83 39 60
                            </a>
                        </li>
                        <li class="flex items-center gap-2.5 text-sm text-primary-foreground/60">
                            <i data-lucide="mail" class="text-secondary shrink-0 w-4 h-4"></i>
                            <a href="mailto:info@ouatge.com" class="hover:text-secondary transition-colors">
                                info@ouatge.com
                            </a>
                        </li>
                    </ul>


                    <div class="flex items-center gap-3 mt-6">
                        <a href="#" aria-label="LinkedIn"
                            class="w-9 h-9 rounded-lg bg-white/5 hover:bg-secondary/20 flex items-center justify-center text-primary-foreground/50 hover:text-secondary transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                <rect width="4" height="12" x="2" y="9" />
                                <circle cx="4" cy="4" r="2" />
                            </svg>
                        </a>

                        <a href="#" aria-label="Facebook"
                            class="w-9 h-9 rounded-lg bg-white/5 hover:bg-secondary/20 flex items-center justify-center text-primary-foreground/50 hover:text-secondary transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg>
                        </a>

                        <a href="#" aria-label="Twitter / X"
                            class="w-9 h-9 rounded-lg bg-white/5 hover:bg-secondary/20 flex items-center justify-center text-primary-foreground/50 hover:text-secondary transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-xs font-semibold uppercase tracking-widest text-primary-foreground/40 mb-5">
                        Navigation
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="#accueil"
                                class="text-sm text-primary-foreground/60 hover:text-secondary transition-colors">Accueil</a>
                        </li>
                        <li><a href="#services"
                                class="text-sm text-primary-foreground/60 hover:text-secondary transition-colors">Nos
                                Pôles</a></li>
                        <li><a href="#realisations"
                                class="text-sm text-primary-foreground/60 hover:text-secondary transition-colors">Réalisations</a>
                        </li>
                        <li><a href="#apropos"
                                class="text-sm text-primary-foreground/60 hover:text-secondary transition-colors">À
                                Propos</a></li>
                        <li><a href="#contact"
                                class="text-sm text-primary-foreground/60 hover:text-secondary transition-colors">Contact</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-semibold uppercase tracking-widest text-primary-foreground/40 mb-5">
                        Nos Services
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="#services"
                                class="text-sm text-primary-foreground/60 hover:text-secondary transition-colors">Construction
                                Neuve</a></li>
                        <li><a href="#services"
                                class="text-sm text-primary-foreground/60 hover:text-secondary transition-colors">Rénovation
                                & Réhabilitation</a></li>
                        <li><a href="#services"
                                class="text-sm text-primary-foreground/60 hover:text-secondary transition-colors">Expertise
                                & Études Techniques</a></li>
                        <li><a href="#services"
                                class="text-sm text-primary-foreground/60 hover:text-secondary transition-colors">Suivi
                                & Maîtrise d'Œuvre</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-semibold uppercase tracking-widest text-primary-foreground/40 mb-5">
                        Contact Rapide
                    </h4>
                    <form action="#" method="POST" class="space-y-3">
                        <input type="text" placeholder="Votre nom"
                            class="w-full bg-white/5 border border-white/10 rounded px-4 py-2.5 text-sm text-primary-foreground placeholder:text-primary-foreground/30 focus:outline-none focus:border-secondary transition-colors"
                            required />
                        <input type="email" placeholder="Votre e-mail"
                            class="w-full bg-white/5 border border-white/10 rounded px-4 py-2.5 text-sm text-primary-foreground placeholder:text-primary-foreground/30 focus:outline-none focus:border-secondary transition-colors"
                            required />
                        <textarea rows="3" placeholder="Votre message..."
                            class="w-full bg-white/5 border border-white/10 rounded px-4 py-2.5 text-sm text-primary-foreground placeholder:text-primary-foreground/30 focus:outline-none focus:border-secondary transition-colors resize-none"
                            required></textarea>
                        <button type="submit"
                            class="w-full bg-secondary text-secondary-foreground py-2.5 rounded text-sm font-semibold hover:bg-secondary/90 transition-colors">
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="border-t border-white/5">
            <div
                class="max-w-[1440px] mx-auto px-6 lg:px-8 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-xs text-primary-foreground/30">
                    &copy; {{ date('Y') }} OUAT Group Business (OGB). Tous droits réservés.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#"
                        class="text-xs text-primary-foreground/30 hover:text-secondary transition-colors">Mentions
                        légales</a>
                    <a href="#"
                        class="text-xs text-primary-foreground/30 hover:text-secondary transition-colors">Politique de
                        confidentialité</a>
                    <a href="#"
                        class="text-xs text-primary-foreground/30 hover:text-secondary transition-colors">Conditions
                        d'utilisation</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>


    <script>
        // 1. On génère les icônes au premier chargement de la page
        lucide.createIcons();

        // 2. On écoute tous les clics sur la page (pour capter tes clics sur "En savoir plus")
        document.addEventListener('click', function () {
            // On laisse 50 millisecondes à Alpine.js pour ouvrir la modale et injecter le HTML
            setTimeout(function () {
                // On force Lucide à scanner la nouvelle fenêtre pour y dessiner les icônes
                lucide.createIcons();
            }, 50);
        });
    </script>
</body>

</html>