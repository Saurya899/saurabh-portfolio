<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saurabh Kumar | PHP & Laravel Full Stack Developer Portfolio</title>
    <meta name="description"
        content="Portfolio of Saurabh Kumar, a PHP & Laravel Full Stack Developer specializing in building scalable web applications, REST APIs, and database solutions.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50/50 text-slate-800 font-sans antialiased selection:bg-blue-500 selection:text-white">

    <!-- 1. HEADER / NAVIGATION BAR -->
    <header
        class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-100 shadow-2xs transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo -->
                <a href="#home" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo.png') }}" alt="Saurabh Kumar Logo"
                        class="w-11 h-11 object-contain rounded-full transition-transform duration-300 group-hover:scale-105">
                    <div class="flex flex-col">
                        <span class="font-extrabold text-slate-900 text-lg leading-tight tracking-tight">Saurabh
                            Kumar</span>
                        <span class="text-xs text-slate-500 font-medium">PHP & Laravel Developer</span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="#home"
                        class="nav-link px-4 py-2 rounded-xl text-xs font-bold text-blue-600 bg-blue-50 border border-blue-200/80 shadow-2xs transition-all duration-200">Home</a>
                    <a href="#about"
                        class="nav-link px-4 py-2 rounded-xl text-xs font-medium text-slate-600 bg-transparent border border-transparent hover:bg-slate-100 hover:text-slate-900 transition-all duration-200">About</a>
                    <a href="#experience"
                        class="nav-link px-4 py-2 rounded-xl text-xs font-medium text-slate-600 bg-transparent border border-transparent hover:bg-slate-100 hover:text-slate-900 transition-all duration-200">Experience</a>

                    <a href="#projects"
                        class="nav-link px-4 py-2 rounded-xl text-xs font-medium text-slate-600 bg-transparent border border-transparent hover:bg-slate-100 hover:text-slate-900 transition-all duration-200">Projects</a>
                    <a href="#contact"
                        class="nav-link px-4 py-2 rounded-xl text-xs font-medium text-slate-600 bg-transparent border border-transparent hover:bg-slate-100 hover:text-slate-900 transition-all duration-200">Contact</a>
                </nav>

                <!-- Action Button -->
                <div class="hidden sm:flex items-center">
                    <a href="{{ asset('resume.pdf') }}" download="Saurabh_Kumar_Resume.pdf" target="_blank"
                        class="inline-flex items-center gap-2 bg-[#2563eb] hover:bg-blue-700 text-white text-xs font-bold px-5 py-2.5 rounded-xl shadow-md shadow-blue-500/20 transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                        <i class="fa-solid fa-download text-xs"></i>
                        Download Resume
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <button id="mobile-menu-btn"
                    class="md:hidden p-2.5 rounded-xl text-slate-600 hover:bg-slate-100 focus:outline-none">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden border-b border-slate-200 bg-white px-4 pt-2 pb-6 space-y-2">
            <a href="#home" class="mobile-nav-link block px-4 py-2.5 rounded-xl text-sm font-bold text-blue-600 bg-blue-50">Home</a>
            <a href="#about"
                class="mobile-nav-link block px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:bg-slate-50">About</a>
            <a href="#experience"
                class="mobile-nav-link block px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:bg-slate-50">Experience</a>
            <a href="#projects"
                class="mobile-nav-link block px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:bg-slate-50">Projects</a>
            <a href="#contact"
                class="mobile-nav-link block px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:bg-slate-50">Contact</a>
            <div class="pt-2">
                <a href="{{ asset('resume.pdf') }}" download="Saurabh_Kumar_Resume.pdf" target="_blank"
                    class="w-full inline-flex justify-center items-center gap-2 bg-blue-600 text-white text-sm font-bold py-3 rounded-xl shadow-md">
                    <i class="fa-solid fa-download"></i> Download Resume
                </a>
            </div>
        </div>
    </header>

    <main>
        <!-- 2. HERO SECTION -->
        <section id="home"
            class="relative pt-8 pb-6 lg:pt-12 lg:pb-10 overflow-hidden bg-gradient-to-b from-blue-50/70 via-slate-50/50 to-white">
            <!-- Background Decorative Orbs -->
            <div class="absolute top-10 left-1/4 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl pointer-events-none">
            </div>
            <div class="absolute top-40 right-10 w-80 h-80 bg-red-400/10 rounded-full blur-3xl pointer-events-none">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">

                    <!-- Left Hero Content (40% Column - All Content Perfectly Fitted) -->
                    <div class="lg:col-span-5 space-y-4">

                        <div
                            class="inline-flex items-center gap-2 bg-emerald-50 border border-emerald-200/80 text-emerald-700 text-xs font-semibold px-3.5 py-1 rounded-full shadow-2xs">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Available for New Opportunities
                        </div>

                        <!-- Main Heading (Fitting 2 lines cleanly without cutoff) -->
                        <h1
                            class="text-3xl sm:text-4xl lg:text-4xl xl:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
                            PHP & <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 via-rose-500 to-red-500 relative">Laravel</span><br
                                class="hidden sm:block"> Full Stack Developer
                        </h1>

                        <!-- Bio Subtitle -->
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed font-normal max-w-md">
                            I build scalable web applications using PHP, Laravel, MySQL and modern web technologies.
                            Passionate about clean code, performance and real-world solutions.
                        </p>

                        <!-- Highlights Bar (3 Cards in 1 Row) -->
                        <div class="grid grid-cols-3 gap-2 pt-1">
                            <!-- Card 1 -->
                            <div
                                class="bg-white/90 backdrop-blur-md p-2.5 rounded-xl border border-slate-200/80 shadow-2xs flex items-center gap-2 hover:border-blue-300 transition-all">
                                <div
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 text-xs">
                                    <i class="fa-regular fa-calendar-check"></i>
                                </div>
                                <div class="min-w-0">
                                    <div class="font-extrabold text-slate-900 text-xs leading-none truncate">1.5+</div>
                                    <div class="text-slate-500 text-[10px] font-medium mt-0.5 truncate">Years Exp.</div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div
                                class="bg-white/90 backdrop-blur-md p-2.5 rounded-xl border border-slate-200/80 shadow-2xs flex items-center gap-2 hover:border-blue-300 transition-all">
                                <div
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 text-xs">
                                    <i class="fa-solid fa-folder-open"></i>
                                </div>
                                <div class="min-w-0">
                                    <div class="font-extrabold text-slate-900 text-xs leading-none truncate">10+</div>
                                    <div class="text-slate-500 text-[10px] font-medium mt-0.5 truncate">Live Projects
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div
                                class="bg-white/90 backdrop-blur-md p-2.5 rounded-xl border border-slate-200/80 shadow-2xs flex items-center gap-2 hover:border-blue-300 transition-all">
                                <div
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 text-xs">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="min-w-0">
                                    <div class="font-extrabold text-slate-900 text-[11px] leading-tight truncate">Uttar
                                        Pradesh</div>
                                    <div class="text-slate-500 text-[10px] font-medium truncate">India</div>
                                </div>
                            </div>
                        </div>

                        <!-- Hero CTA Buttons (1 Single Row) -->
                        <div class="flex items-center gap-2 pt-2 flex-wrap sm:flex-nowrap">
                            <a href="#projects"
                                class="inline-flex items-center justify-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-4 py-2.5 rounded-xl shadow-md shadow-blue-600/20 transition-all duration-300 hover:-translate-y-0.5 whitespace-nowrap">
                                View My Projects
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                            <a href="{{ asset('resume.pdf') }}" download="Saurabh_Kumar_Resume.pdf" target="_blank"
                                class="inline-flex items-center justify-center gap-1.5 bg-white hover:bg-slate-50 text-slate-700 font-bold text-xs px-3.5 py-2.5 rounded-xl border border-slate-200/90 shadow-2xs transition-all hover:border-slate-300 whitespace-nowrap">
                                <i class="fa-solid fa-download text-slate-400"></i>
                                Download Resume
                            </a>
                            <a href="#contact"
                                class="inline-flex items-center justify-center gap-1.5 bg-white hover:bg-slate-50 text-slate-700 font-bold text-xs px-3.5 py-2.5 rounded-xl border border-slate-200/90 shadow-2xs transition-all hover:border-slate-300 whitespace-nowrap">
                                <i class="fa-regular fa-envelope text-slate-400"></i>
                                Contact Me
                            </a>
                        </div>
                    </div>

                    <!-- Right Hero Visual (60% Column - Zoomed Artwork) -->
                    <div
                        class="lg:col-span-7 relative flex justify-center lg:justify-end items-end self-end pt-4 lg:pt-0">
                        <div class="relative w-full flex justify-center lg:justify-end items-end overflow-visible">
                            <img src="{{ asset('images/saurabh_hero.png') }}"
                                alt="Saurabh Kumar - PHP & Laravel Full Stack Developer"
                                class="w-full h-auto object-contain max-h-[500px] sm:max-h-[560px] lg:max-h-[640px] scale-105 lg:scale-115 transform origin-bottom-right transition-transform duration-500">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 3. ABOUT ME & EDUCATION SECTION -->
        <section id="about" class="pt-8 pb-16 lg:pt-12 lg:pb-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="grid lg:grid-cols-12 gap-8 lg:gap-10 items-start">

                    <!-- Left Bio -->
                    <div class="lg:col-span-4 space-y-4">
                        <!-- Section Header Tag -->
                        <div class="flex items-center gap-2 text-red-500 text-xs font-bold uppercase tracking-wider">
                            <span class="w-5 h-0.5 bg-red-500 inline-block"></span>
                            ABOUT ME
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                            Who I Am
                        </h2>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            I'm <strong class="text-slate-900 font-semibold">Saurabh Kumar</strong>, a PHP & Laravel
                            Full Stack Developer with 1.5+ years of hands-on experience building and maintaining
                            real-world web applications. I enjoy solving problems, writing clean code and creating
                            user-friendly web solutions.
                        </p>

                        <div class="pt-1 pb-1">
                            <span class="font-signature text-3xl sm:text-4xl text-slate-800 block">Saurabh Kumar</span>
                        </div>

                        <a href="#contact"
                            class="inline-flex items-center gap-2 px-5 py-2 rounded-full border border-blue-200 text-blue-600 font-semibold text-xs hover:bg-blue-600 hover:text-white transition bg-blue-50/50 shadow-2xs">
                            Learn More
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>

                    <!-- Center 2x2 Feature Grid -->
                    <div class="lg:col-span-4 grid grid-cols-2 gap-4">
                        <!-- Card 1 -->
                        <div
                            class="bg-slate-50/60 p-4.5 rounded-2xl border border-slate-200/70 hover:bg-blue-50/50 hover:border-blue-200 transition-all group">
                            <div
                                class="w-9 h-9 rounded-full bg-blue-100/70 text-blue-600 flex items-center justify-center mb-3 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-layer-group text-sm"></i>
                            </div>
                            <h3 class="font-bold text-slate-900 text-xs sm:text-sm">PHP & Laravel</h3>
                            <p class="text-slate-400 text-[11px] font-medium mt-0.5">Backend Development</p>
                        </div>
                        <!-- Card 2 -->
                        <div
                            class="bg-slate-50/60 p-4.5 rounded-2xl border border-slate-200/70 hover:bg-blue-50/50 hover:border-blue-200 transition-all group">
                            <div
                                class="w-9 h-9 rounded-full bg-blue-100/70 text-blue-600 flex items-center justify-center mb-3 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-database text-sm"></i>
                            </div>
                            <h3 class="font-bold text-slate-900 text-xs sm:text-sm">MySQL</h3>
                            <p class="text-slate-400 text-[11px] font-medium mt-0.5">Database Design</p>
                        </div>
                        <!-- Card 3 -->
                        <div
                            class="bg-slate-50/60 p-4.5 rounded-2xl border border-slate-200/70 hover:bg-blue-50/50 hover:border-blue-200 transition-all group">
                            <div
                                class="w-9 h-9 rounded-full bg-blue-100/70 text-blue-600 flex items-center justify-center mb-3 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-network-wired text-sm"></i>
                            </div>
                            <h3 class="font-bold text-slate-900 text-xs sm:text-sm">REST APIs</h3>
                            <p class="text-slate-400 text-[11px] font-medium mt-0.5">API Development</p>
                        </div>
                        <!-- Card 4 -->
                        <div
                            class="bg-slate-50/60 p-4.5 rounded-2xl border border-slate-200/70 hover:bg-blue-50/50 hover:border-blue-200 transition-all group">
                            <div
                                class="w-9 h-9 rounded-full bg-blue-100/70 text-blue-600 flex items-center justify-center mb-3 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-laptop-code text-sm"></i>
                            </div>
                            <h3 class="font-bold text-slate-900 text-xs sm:text-sm">Full Stack</h3>
                            <p class="text-slate-400 text-[11px] font-medium mt-0.5">Frontend + Backend</p>
                        </div>
                    </div>

                    <!-- Right Education Timeline -->
                    <div class="lg:col-span-4 lg:border-l lg:border-slate-200/60 lg:pl-8">
                        <div class="flex items-center gap-2.5 mb-5">
                            <i class="fa-solid fa-graduation-cap text-blue-600 text-base"></i>
                            <h3 class="font-bold text-slate-900 text-xs uppercase tracking-wider">EDUCATION</h3>
                        </div>

                        <div
                            class="relative pl-5 space-y-5 before:absolute before:left-1.5 before:top-2 before:bottom-2 before:w-0.5 before:bg-slate-200">
                            <!-- Item 1 -->
                            <div class="relative">
                                <span
                                    class="absolute -left-[1.35rem] top-1 w-2.5 h-2.5 rounded-full bg-blue-600 ring-4 ring-blue-100"></span>
                                <span class="text-[11px] font-extrabold text-blue-600 block">2025</span>
                                <h4 class="font-bold text-slate-900 text-xs sm:text-sm">Diploma in Computer Science &
                                    Engineering
                                </h4>
                                <p class="text-slate-500 text-[11px] mt-0.5">Government Polytechnic, Jaunpur</p>
                                <span
                                    class="inline-block bg-slate-100 text-slate-600 text-[10px] font-medium px-2 py-0.5 rounded-md mt-1">Percentage:
                                    74%</span>
                            </div>

                            <!-- Item 2 -->
                            <div class="relative">
                                <span
                                    class="absolute -left-[1.35rem] top-1 w-2.5 h-2.5 rounded-full bg-blue-600 ring-4 ring-blue-100"></span>
                                <span class="text-[11px] font-extrabold text-blue-600 block">2022</span>
                                <h4 class="font-bold text-slate-900 text-xs sm:text-sm">Intermediate (12th)</h4>
                                <p class="text-slate-500 text-[11px] mt-0.5">Patwa Adarsh I.C., K.P.M.B.R., Rampur,
                                    Sultanpur</p>
                                <span
                                    class="inline-block bg-slate-100 text-slate-600 text-[10px] font-medium px-2 py-0.5 rounded-md mt-1">Percentage:
                                    70.2%</span>
                            </div>

                            <!-- Item 3 -->
                            <div class="relative">
                                <span
                                    class="absolute -left-[1.35rem] top-1 w-2.5 h-2.5 rounded-full bg-blue-600 ring-4 ring-blue-100"></span>
                                <span class="text-[11px] font-extrabold text-blue-600 block">2020</span>
                                <h4 class="font-bold text-slate-900 text-xs sm:text-sm">High School (10th)</h4>
                                <p class="text-slate-500 text-[11px] mt-0.5">Moti Singh Inter College, Saray Bhikhari,
                                    Pratapgarh</p>
                                <span
                                    class="inline-block bg-slate-100 text-slate-600 text-[10px] font-medium px-2 py-0.5 rounded-md mt-1">Percentage:
                                    82%</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- 4. WORK EXPERIENCE & TECHNICAL SKILLS SECTION -->
        <section id="experience" class="py-16 sm:py-20 bg-slate-50/50 border-t border-slate-200/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="grid lg:grid-cols-12 gap-10 lg:gap-12 items-start">

                    <!-- Left Column: Work Experience -->
                    <div class="lg:col-span-6 space-y-6">
                        <div>
                            <div
                                class="flex items-center gap-2 text-red-500 text-xs font-bold uppercase tracking-wider mb-2">
                                <span class="w-5 h-0.5 bg-red-500 inline-block"></span>
                                WORK EXPERIENCE
                            </div>
                            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                                My Professional Journey
                            </h2>
                        </div>

                        <!-- Experience Timeline Container -->
                        <div
                            class="relative pl-6 space-y-6 before:absolute before:left-1.5 before:top-6 before:bottom-6 before:w-0.5 before:bg-slate-200">

                            <!-- Experience Card 1 -->
                            <div class="relative">
                                <span
                                    class="absolute -left-[1.85rem] top-6 w-3 h-3 rounded-full bg-red-500 ring-4 ring-red-100 z-10"></span>
                                <div
                                    class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-2xs relative hover:border-blue-300 transition-all">
                                    <div class="flex items-start justify-between gap-4 mb-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-11 h-11 rounded-full bg-gradient-to-br from-red-500 to-orange-500 text-white flex items-center justify-center shrink-0 shadow-md shadow-red-500/20">
                                                <i class="fa-brands fa-laravel text-xl"></i>
                                            </div>
                                            <div>
                                                <h3 class="font-bold text-slate-900 text-base">DigiCoders Pvt. Ltd.</h3>
                                                <p class="text-slate-800 text-xs font-bold mt-0.5">Full Stack PHP
                                                    Developer</p>
                                            </div>
                                        </div>
                                        <span
                                            class="bg-blue-50 text-blue-600 text-xs font-bold px-3 py-1 rounded-full border border-blue-100">1.5
                                            Years</span>
                                    </div>
                                    <ul
                                        class="space-y-2 text-slate-600 text-xs leading-relaxed list-disc list-inside pt-1">
                                        <li>Built and maintained CRUD modules in PHP Laravel.</li>
                                        <li>Managed MySQL databases using phpMyAdmin.</li>
                                        <li>Applied OOP principles and built reusable components.</li>
                                        <li>Collaborated with team in agile environment.</li>
                                        <li>Delivered 10+ live client websites (corporate, e-commerce, training).</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Experience Card 2 -->
                            <div class="relative">
                                <span
                                    class="absolute -left-[1.85rem] top-6 w-3 h-3 rounded-full bg-slate-700 ring-4 ring-slate-100 z-10"></span>
                                <div
                                    class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-2xs relative hover:border-blue-300 transition-all">
                                    <div class="flex items-start justify-between gap-4 mb-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-11 h-11 rounded-full bg-gradient-to-br from-red-500 to-orange-500 text-white flex items-center justify-center shrink-0 shadow-md shadow-red-500/20">
                                                <i class="fa-brands fa-laravel text-xl"></i>
                                            </div>
                                            <div>
                                                <h3 class="font-bold text-slate-900 text-base">DigiCoders Pvt. Ltd.</h3>
                                                <p class="text-slate-800 text-xs font-bold mt-0.5">Web Development
                                                    Intern</p>
                                            </div>
                                        </div>
                                        <span
                                            class="bg-blue-50 text-blue-600 text-xs font-bold px-3 py-1 rounded-full border border-blue-100">6
                                            Months</span>
                                    </div>
                                    <ul
                                        class="space-y-2 text-slate-600 text-xs leading-relaxed list-disc list-inside pt-1">
                                        <li>Assisted in Laravel module development.</li>
                                        <li>Learned database design, query optimization and debugging.</li>
                                        <li>Supported live client website builds.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Right Column: Technical Skills -->
                    <div id="skills" class="lg:col-span-6 space-y-6">
                        <div>
                            <div
                                class="flex items-center gap-2 text-red-500 text-xs font-bold uppercase tracking-wider mb-2">
                                <span class="w-5 h-0.5 bg-red-500 inline-block"></span>
                                TECHNICAL SKILLS
                            </div>
                            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                                Technical Skills
                            </h2>
                        </div>

                        <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/80 shadow-2xs space-y-5">

                            <!-- Backend Row -->
                            <div>
                                <div class="flex items-center gap-2.5 mb-2.5">
                                    <div
                                        class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs">
                                        <i class="fa-solid fa-code"></i>
                                    </div>
                                    <span class="font-bold text-slate-900 text-sm">Backend</span>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-red-50 text-red-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-red-100/80">PHP</span>
                                    <span
                                        class="bg-red-50 text-red-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-red-100/80">Laravel</span>
                                    <span
                                        class="bg-red-50 text-red-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-red-100/80">OOP</span>
                                    <span
                                        class="bg-red-50 text-red-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-red-100/80">REST
                                        API</span>
                                    <span
                                        class="bg-red-50 text-red-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-red-100/80">MVC</span>
                                    <span
                                        class="bg-red-50 text-red-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-red-100/80">CRUD</span>
                                </div>
                            </div>

                            <!-- Database Row -->
                            <div>
                                <div class="flex items-center gap-2.5 mb-2.5">
                                    <div
                                        class="w-8 h-8 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center text-xs">
                                        <i class="fa-solid fa-database"></i>
                                    </div>
                                    <span class="font-bold text-slate-900 text-sm">Database</span>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-sky-50 text-sky-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-sky-100/80">MySQL</span>
                                    <span
                                        class="bg-sky-50 text-sky-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-sky-100/80">phpMyAdmin</span>
                                    <span
                                        class="bg-sky-50 text-sky-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-sky-100/80">Raw
                                        SQL</span>
                                    <span
                                        class="bg-sky-50 text-sky-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-sky-100/80">Eloquent
                                        ORM</span>
                                    <span
                                        class="bg-sky-50 text-sky-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-sky-100/80">Database
                                        Design</span>
                                </div>
                            </div>

                            <!-- Frontend Row -->
                            <div>
                                <div class="flex items-center gap-2.5 mb-2.5">
                                    <div
                                        class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs">
                                        <i class="fa-solid fa-laptop-code"></i>
                                    </div>
                                    <span class="font-bold text-slate-900 text-sm">Frontend</span>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-emerald-50 text-emerald-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-emerald-100/80">HTML5</span>
                                    <span
                                        class="bg-emerald-50 text-emerald-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-emerald-100/80">CSS3</span>
                                    <span
                                        class="bg-emerald-50 text-emerald-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-emerald-100/80">Bootstrap</span>
                                    <span
                                        class="bg-emerald-50 text-emerald-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-emerald-100/80">JavaScript</span>
                                    <span
                                        class="bg-emerald-50 text-emerald-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-emerald-100/80">Responsive
                                        Design</span>
                                </div>
                            </div>

                            <!-- Tools & Platforms Row -->
                            <div>
                                <div class="flex items-center gap-2.5 mb-2.5">
                                    <div
                                        class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center text-xs">
                                        <i class="fa-solid fa-toolbox"></i>
                                    </div>
                                    <span class="font-bold text-slate-900 text-sm">Tools & Platforms</span>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-purple-50 text-purple-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-purple-100/80">Git</span>
                                    <span
                                        class="bg-purple-50 text-purple-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-purple-100/80">GitHub</span>
                                    <span
                                        class="bg-purple-50 text-purple-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-purple-100/80">VS
                                        Code</span>
                                    <span
                                        class="bg-purple-50 text-purple-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-purple-100/80">XAMPP</span>
                                    <span
                                        class="bg-purple-50 text-purple-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-purple-100/80">MS
                                        Office</span>
                                </div>
                            </div>

                            <!-- Concepts Row -->
                            <div>
                                <div class="flex items-center gap-2.5 mb-2.5">
                                    <div
                                        class="w-8 h-8 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center text-xs">
                                        <i class="fa-solid fa-lightbulb"></i>
                                    </div>
                                    <span class="font-bold text-slate-900 text-sm">Concepts</span>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-amber-50 text-amber-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-amber-100/80">RESTful
                                        CRUD</span>
                                    <span
                                        class="bg-amber-50 text-amber-600 text-xs font-medium px-3.5 py-1.5 rounded-full border border-amber-100/80">MVC
                                        Architecture</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- 5. FEATURED PROJECTS SECTION -->
        <section id="projects" class="py-20 bg-white border-t border-slate-200/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
                    <div>
                        <div
                            class="flex items-center gap-2 text-red-500 text-xs font-bold uppercase tracking-wider mb-2">
                            <span class="w-5 h-0.5 bg-red-500 inline-block"></span>
                            FEATURED PROJECTS
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                            My Real-World Projects
                        </h2>
                    </div>

                    <div
                        class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 text-xs font-bold px-4 py-2 rounded-xl border border-blue-100">
                        <i class="fa-solid fa-circle-check text-emerald-500"></i>
                        Click Any Project for Live Demo
                    </div>
                </div>

                <!-- Projects Grid (10 Cards) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Project 1: RaeBioMed Global -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-2xs hover:shadow-xl hover:border-blue-300 transition-all duration-300 group flex flex-col justify-between">
                        <div>
                            <div class="relative aspect-16/9 bg-slate-900 overflow-hidden">
                                <img src="{{ asset('images/raebicmed_global.jpg') }}" alt="RaeBioMed Global"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <a href="https://www.raebiomedglobal.com/" target="_blank" rel="noopener noreferrer"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-4 py-2 rounded-xl shadow-lg flex items-center gap-1.5 transition">
                                        Visit Live Site <i
                                            class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                    </a>
                                </div>
                                <span
                                    class="absolute top-3 left-3 bg-white/95 backdrop-blur-sm text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-lg border border-slate-200/80 shadow-2xs">
                                    Healthcare & Biomedical
                                </span>
                            </div>
                            <div class="p-5 space-y-3">
                                <h3
                                    class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition-colors">
                                    <a href="https://www.raebiomedglobal.com/" target="_blank" rel="noopener noreferrer"
                                        class="hover:underline flex items-center justify-between">
                                        RaeBioMed Global
                                        <i class="fa-solid fa-arrow-up-right-from-square text-slate-400 text-xs"></i>
                                    </a>
                                </h3>
                                <ul class="space-y-1.5 text-slate-600 text-xs leading-relaxed list-disc list-inside">
                                    <li>Developed a corporate website for a healthcare/biomedical client using PHP &
                                        MySQL.</li>
                                    <li>Built an admin-managed dynamic content system so the client can update pages
                                        without touching code.</li>
                                    <li>Structured pages for company profile, products/services, and contact/inquiry
                                        handling.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] font-mono text-slate-400">raebiomedglobal.com</span>
                            <a href="https://www.raebiomedglobal.com/" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white font-bold text-xs px-3.5 py-1.5 rounded-xl transition-all shadow-2xs">
                                Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 2: Mahila Pragati Prashikshan Sansthan -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-2xs hover:shadow-xl hover:border-blue-300 transition-all duration-300 group flex flex-col justify-between">
                        <div>
                            <div
                                class="relative aspect-16/9 bg-gradient-to-br from-rose-500 via-red-600 to-slate-900 p-6 flex flex-col justify-between overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-slate-900/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center z-10">
                                    <a href="https://pragatimps.org/" target="_blank" rel="noopener noreferrer"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-4 py-2 rounded-xl shadow-lg flex items-center gap-1.5 transition">
                                        Visit Live Site <i
                                            class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                    </a>
                                </div>
                                <span
                                    class="bg-white/95 backdrop-blur-sm text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-lg w-fit shadow-2xs z-0">
                                    NGO & Social Impact
                                </span>
                                <div class="text-white z-0">
                                    <i class="fa-solid fa-hands-holding-child text-3xl mb-1 opacity-90"></i>
                                    <h4 class="font-extrabold text-sm text-white">Mahila Pragati Sansthan</h4>
                                </div>
                            </div>
                            <div class="p-5 space-y-3">
                                <h3
                                    class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition-colors">
                                    <a href="https://pragatimps.org/" target="_blank" rel="noopener noreferrer"
                                        class="hover:underline flex items-center justify-between">
                                        Mahila Pragati Prashikshan Sansthan
                                        <i class="fa-solid fa-arrow-up-right-from-square text-slate-400 text-xs"></i>
                                    </a>
                                </h3>
                                <ul class="space-y-1.5 text-slate-600 text-xs leading-relaxed list-disc list-inside">
                                    <li>Built an informational website for an NGO to showcase its programs, activities,
                                        and impact.</li>
                                    <li>Implemented an editable content layer so program details and updates can be
                                        maintained easily.</li>
                                    <li>Focused on a simple, accessible layout suited to a non-technical audience.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] font-mono text-slate-400">pragatimps.org</span>
                            <a href="https://pragatimps.org/" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white font-bold text-xs px-3.5 py-1.5 rounded-xl transition-all shadow-2xs">
                                Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 3: Shopping Club Ecommerce -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-2xs hover:shadow-xl hover:border-blue-300 transition-all duration-300 group flex flex-col justify-between">
                        <div>
                            <div class="relative aspect-16/9 bg-slate-900 overflow-hidden">
                                <img src="{{ asset('images/shopping_club.jpg') }}" alt="Shopping Club Ecommerce"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <a href="https://scib2b.com/" target="_blank" rel="noopener noreferrer"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-4 py-2 rounded-xl shadow-lg flex items-center gap-1.5 transition">
                                        Visit Live Site <i
                                            class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                    </a>
                                </div>
                                <span
                                    class="absolute top-3 left-3 bg-white/95 backdrop-blur-sm text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-lg border border-slate-200/80 shadow-2xs">
                                    E-Commerce Platform
                                </span>
                            </div>
                            <div class="p-5 space-y-3">
                                <h3
                                    class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition-colors">
                                    <a href="https://scib2b.com/" target="_blank" rel="noopener noreferrer"
                                        class="hover:underline flex items-center justify-between">
                                        Shopping Club Ecommerce Website
                                        <i class="fa-solid fa-arrow-up-right-from-square text-slate-400 text-xs"></i>
                                    </a>
                                </h3>
                                <ul class="space-y-1.5 text-slate-600 text-xs leading-relaxed list-disc list-inside">
                                    <li>Built an e-commerce platform in PHP & MySQL with product listing, category, and
                                        cart functionality.</li>
                                    <li>Implemented order management — order placement, status tracking, and admin-side
                                        order handling.</li>
                                    <li>Designed product/order database schema connected via raw SQL & Eloquent ORM.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] font-mono text-slate-400">scib2b.com</span>
                            <a href="https://scib2b.com/" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white font-bold text-xs px-3.5 py-1.5 rounded-xl transition-all shadow-2xs">
                                Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 4: Courier Website -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-2xs hover:shadow-xl hover:border-blue-300 transition-all duration-300 group flex flex-col justify-between">
                        <div>
                            <div class="relative aspect-16/9 bg-slate-900 overflow-hidden">
                                <img src="{{ asset('images/courier_website.jpg') }}" alt="Courier Website"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <a href="https://shipperrj.scib2b.com/" target="_blank" rel="noopener noreferrer"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-4 py-2 rounded-xl shadow-lg flex items-center gap-1.5 transition">
                                        Visit Live Site <i
                                            class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                    </a>
                                </div>
                                <span
                                    class="absolute top-3 left-3 bg-white/95 backdrop-blur-sm text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-lg border border-slate-200/80 shadow-2xs">
                                    Logistics & Tracking
                                </span>
                            </div>
                            <div class="p-5 space-y-3">
                                <h3
                                    class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition-colors">
                                    <a href="https://shipperrj.scib2b.com/" target="_blank" rel="noopener noreferrer"
                                        class="hover:underline flex items-center justify-between">
                                        Courier & Tracking Website
                                        <i class="fa-solid fa-arrow-up-right-from-square text-slate-400 text-xs"></i>
                                    </a>
                                </h3>
                                <ul class="space-y-1.5 text-slate-600 text-xs leading-relaxed list-disc list-inside">
                                    <li>Built a courier/shipment tracking web application using PHP & MySQL.</li>
                                    <li>Implemented shipment status updates and a tracking lookup for customers by
                                        tracking ID.</li>
                                    <li>Designed backend to manage shipment records, sender/receiver details, and
                                        delivery status.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] font-mono text-slate-400">shipperrj.scib2b.com</span>
                            <a href="https://shipperrj.scib2b.com/" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white font-bold text-xs px-3.5 py-1.5 rounded-xl transition-all shadow-2xs">
                                Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 5: Prasthan Travel Website -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-2xs hover:shadow-xl hover:border-blue-300 transition-all duration-300 group flex flex-col justify-between">
                        <div>
                            <div class="relative aspect-16/9 bg-slate-900 overflow-hidden">
                                <img src="{{ asset('images/prasthan_travel.jpg') }}" alt="Prasthan Travel Website"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <a href="https://prasthantravels.in/" target="_blank" rel="noopener noreferrer"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-4 py-2 rounded-xl shadow-lg flex items-center gap-1.5 transition">
                                        Visit Live Site <i
                                            class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                    </a>
                                </div>
                                <span
                                    class="absolute top-3 left-3 bg-white/95 backdrop-blur-sm text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-lg border border-slate-200/80 shadow-2xs">
                                    Travel & Tourism
                                </span>
                            </div>
                            <div class="p-5 space-y-3">
                                <h3
                                    class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition-colors">
                                    <a href="https://prasthantravels.in/" target="_blank" rel="noopener noreferrer"
                                        class="hover:underline flex items-center justify-between">
                                        Prasthan Travel Website
                                        <i class="fa-solid fa-arrow-up-right-from-square text-slate-400 text-xs"></i>
                                    </a>
                                </h3>
                                <ul class="space-y-1.5 text-slate-600 text-xs leading-relaxed list-disc list-inside">
                                    <li>Developed a travel agency website with service listings (packages, destinations,
                                        offers).</li>
                                    <li>Built an inquiry-handling form so visitors can request quotes or book
                                        consultations.</li>
                                    <li>Implemented an admin panel to manage travel packages and customer inquiries.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] font-mono text-slate-400">prasthantravels.in</span>
                            <a href="https://prasthantravels.in/" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white font-bold text-xs px-3.5 py-1.5 rounded-xl transition-all shadow-2xs">
                                Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 6: Digicoders Academy -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-2xs hover:shadow-xl hover:border-blue-300 transition-all duration-300 group flex flex-col justify-between">
                        <div>
                            <div class="relative aspect-16/9 bg-slate-900 overflow-hidden">
                                <img src="{{ asset('images/digicoders_academy.jpg') }}" alt="Digicoders Academy"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <a href="https://digicodersacademy.com" target="_blank" rel="noopener noreferrer"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-4 py-2 rounded-xl shadow-lg flex items-center gap-1.5 transition">
                                        Visit Live Site <i
                                            class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                    </a>
                                </div>
                                <span
                                    class="absolute top-3 left-3 bg-white/95 backdrop-blur-sm text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-lg border border-slate-200/80 shadow-2xs">
                                    EdTech & Academy
                                </span>
                            </div>
                            <div class="p-5 space-y-3">
                                <h3
                                    class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition-colors">
                                    <a href="https://digicodersacademy.com" target="_blank" rel="noopener noreferrer"
                                        class="hover:underline flex items-center justify-between">
                                        Digicoders Academy
                                        <i class="fa-solid fa-arrow-up-right-from-square text-slate-400 text-xs"></i>
                                    </a>
                                </h3>
                                <ul class="space-y-1.5 text-slate-600 text-xs leading-relaxed list-disc list-inside">
                                    <li>Built a training-institute website covering course listings, batch details, and
                                        admissions info.</li>
                                    <li>Implemented a dynamic content-management layer so course/batch content stays up
                                        to date.</li>
                                    <li>Developed backend modules in PHP & MySQL following MVC architecture.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] font-mono text-slate-400">digicodersacademy.com</span>
                            <a href="https://digicodersacademy.com" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white font-bold text-xs px-3.5 py-1.5 rounded-xl transition-all shadow-2xs">
                                Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 7: Digicoders Gorakhpur -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-2xs hover:shadow-xl hover:border-blue-300 transition-all duration-300 group flex flex-col justify-between">
                        <div>
                            <div class="relative aspect-16/9 bg-slate-900 overflow-hidden">
                                <img src="{{ asset('images/digicoders_gorakhpur.jpg') }}" alt="Digicoders Gorakhpur"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <a href="https://digicodersgorakhpur.com" target="_blank" rel="noopener noreferrer"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-4 py-2 rounded-xl shadow-lg flex items-center gap-1.5 transition">
                                        Visit Live Site <i
                                            class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                    </a>
                                </div>
                                <span
                                    class="absolute top-3 left-3 bg-white/95 backdrop-blur-sm text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-lg border border-slate-200/80 shadow-2xs">
                                    Branch Portal
                                </span>
                            </div>
                            <div class="p-5 space-y-3">
                                <h3
                                    class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition-colors">
                                    <a href="https://digicodersgorakhpur.com" target="_blank" rel="noopener noreferrer"
                                        class="hover:underline flex items-center justify-between">
                                        Digicoders Gorakhpur
                                        <i class="fa-solid fa-arrow-up-right-from-square text-slate-400 text-xs"></i>
                                    </a>
                                </h3>
                                <ul class="space-y-1.5 text-slate-600 text-xs leading-relaxed list-disc list-inside">
                                    <li>Developed a regional branch website for the software training institute in
                                        Gorakhpur.</li>
                                    <li>Reused and adapted the core PHP/MySQL codebase for branch-specific courses &
                                        details.</li>
                                    <li>Implemented lead-capture forms for inquiries and course enrollments.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] font-mono text-slate-400">digicodersgorakhpur.com</span>
                            <a href="https://digicodersgorakhpur.com" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white font-bold text-xs px-3.5 py-1.5 rounded-xl transition-all shadow-2xs">
                                Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 8: Digicoders Kanpur -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-2xs hover:shadow-xl hover:border-blue-300 transition-all duration-300 group flex flex-col justify-between">
                        <div>
                            <div class="relative aspect-16/9 bg-slate-900 overflow-hidden">
                                <img src="{{ asset('images/digicoders_kanpur.jpg') }}" alt="Digicoders Kanpur"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <a href="https://digicoderskanpur.com" target="_blank" rel="noopener noreferrer"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-4 py-2 rounded-xl shadow-lg flex items-center gap-1.5 transition">
                                        Visit Live Site <i
                                            class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                    </a>
                                </div>
                                <span
                                    class="absolute top-3 left-3 bg-white/95 backdrop-blur-sm text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-lg border border-slate-200/80 shadow-2xs">
                                    Branch Portal
                                </span>
                            </div>
                            <div class="p-5 space-y-3">
                                <h3
                                    class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition-colors">
                                    <a href="https://digicoderskanpur.com" target="_blank" rel="noopener noreferrer"
                                        class="hover:underline flex items-center justify-between">
                                        Digicoders Kanpur
                                        <i class="fa-solid fa-arrow-up-right-from-square text-slate-400 text-xs"></i>
                                    </a>
                                </h3>
                                <ul class="space-y-1.5 text-slate-600 text-xs leading-relaxed list-disc list-inside">
                                    <li>Developed a regional branch website for the software training institute in
                                        Kanpur.</li>
                                    <li>Adapted the shared PHP/MySQL platform for branch-specific content and local
                                        contact details.</li>
                                    <li>Implemented lead-capture forms for inquiries and course enrollments.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] font-mono text-slate-400">digicoderskanpur.com</span>
                            <a href="https://digicoderskanpur.com" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white font-bold text-xs px-3.5 py-1.5 rounded-xl transition-all shadow-2xs">
                                Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 9: Software Company In Lucknow -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-2xs hover:shadow-xl hover:border-blue-300 transition-all duration-300 group flex flex-col justify-between">
                        <div>
                            <div
                                class="relative aspect-16/9 bg-gradient-to-br from-blue-600 via-indigo-600 to-slate-900 p-6 flex flex-col justify-between overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-slate-900/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center z-10">
                                    <a href="https://softwarecompanyinlucknow.com" target="_blank"
                                        rel="noopener noreferrer"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-4 py-2 rounded-xl shadow-lg flex items-center gap-1.5 transition">
                                        Visit Live Site <i
                                            class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                    </a>
                                </div>
                                <span
                                    class="bg-white/95 backdrop-blur-sm text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-lg w-fit shadow-2xs z-0">
                                    Corporate Development
                                </span>
                                <div class="text-white z-0">
                                    <i class="fa-solid fa-building-user text-3xl mb-1 opacity-90"></i>
                                    <h4 class="font-extrabold text-sm text-white">Software Company Lucknow</h4>
                                </div>
                            </div>
                            <div class="p-5 space-y-3">
                                <h3
                                    class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition-colors">
                                    <a href="https://softwarecompanyinlucknow.com" target="_blank"
                                        rel="noopener noreferrer"
                                        class="hover:underline flex items-center justify-between">
                                        Software Company In Lucknow
                                        <i class="fa-solid fa-arrow-up-right-from-square text-slate-400 text-xs"></i>
                                    </a>
                                </h3>
                                <ul class="space-y-1.5 text-slate-600 text-xs leading-relaxed list-disc list-inside">
                                    <li>Built a corporate website for a Lucknow-based software development company.</li>
                                    <li>Developed pages for services, portfolio/case studies, and client contact/inquiry
                                        handling.</li>
                                    <li>Implemented backend in PHP & MySQL with an admin-editable content structure.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] font-mono text-slate-400">softwarecompanyinlucknow.com</span>
                            <a href="https://softwarecompanyinlucknow.com" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white font-bold text-xs px-3.5 py-1.5 rounded-xl transition-all shadow-2xs">
                                Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 10: Best Summer Training In Lucknow -->
                    <div
                        class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-2xs hover:shadow-xl hover:border-blue-300 transition-all duration-300 group flex flex-col justify-between">
                        <div>
                            <div
                                class="relative aspect-16/9 bg-gradient-to-br from-emerald-600 via-teal-600 to-slate-900 p-6 flex flex-col justify-between overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-slate-900/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center z-10">
                                    <a href="https://bestsummertraining.com" target="_blank" rel="noopener noreferrer"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-4 py-2 rounded-xl shadow-lg flex items-center gap-1.5 transition">
                                        Visit Live Site <i
                                            class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                    </a>
                                </div>
                                <span
                                    class="bg-white/95 backdrop-blur-sm text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-lg w-fit shadow-2xs z-0">
                                    Training & Education
                                </span>
                                <div class="text-white z-0">
                                    <i class="fa-solid fa-user-graduate text-3xl mb-1 opacity-90"></i>
                                    <h4 class="font-extrabold text-sm text-white">Summer Training Portal</h4>
                                </div>
                            </div>
                            <div class="p-5 space-y-3">
                                <h3
                                    class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition-colors">
                                    <a href="https://bestsummertraining.com" target="_blank" rel="noopener noreferrer"
                                        class="hover:underline flex items-center justify-between">
                                        Best Summer Training In Lucknow
                                        <i class="fa-solid fa-arrow-up-right-from-square text-slate-400 text-xs"></i>
                                    </a>
                                </h3>
                                <ul class="space-y-1.5 text-slate-600 text-xs leading-relaxed list-disc list-inside">
                                    <li>Built an informational website promoting summer training programs for students.
                                    </li>
                                    <li>Implemented course/program listings along with inquiry & registration forms.
                                    </li>
                                    <li>Developed responsive frontend with PHP/MySQL backend data handling.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] font-mono text-slate-400">bestsummertraining.com</span>
                            <a href="https://bestsummertraining.com" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white font-bold text-xs px-3.5 py-1.5 rounded-xl transition-all shadow-2xs">
                                Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- 6. CONTACT & CTA SECTION -->
        <section id="contact" class="relative bg-[#091124] text-white py-16 lg:py-24 overflow-hidden border-t border-slate-800">
            <!-- Background Image on Left with Gradient Fade -->
            <div class="absolute inset-y-0 left-0 w-full lg:w-3/5 overflow-hidden pointer-events-none">
                <img src="{{ asset('images/contact_bg.jpg') }}" alt="Background"
                    class="w-full h-full object-cover object-left opacity-45">
                <div class="absolute inset-0 bg-gradient-to-r from-[#091124]/30 via-[#091124]/80 to-[#091124]"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#091124] via-transparent to-[#091124]/60"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid lg:grid-cols-12 gap-8 lg:gap-10 items-center">

                    <!-- Left CTA Block (4 Cols) -->
                    <div class="lg:col-span-4 space-y-4">
                        <h2 class="text-3xl sm:text-4xl lg:text-4xl font-extrabold text-white tracking-tight leading-tight">
                            Let's Build Something<br>Together
                        </h2>
                        <p class="text-slate-400 text-xs sm:text-sm leading-relaxed max-w-sm">
                            Have a project, job opportunity or collaboration in mind? Let's talk.
                        </p>
                        <div class="pt-2">
                            <a href="mailto:saurabhkumarssp@gmail.com"
                                class="inline-flex items-center gap-2.5 bg-[#ff3b30] hover:bg-red-600 text-white font-bold text-xs px-6 py-3.5 rounded-xl shadow-lg shadow-red-500/25 transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5">
                                Get In Touch <i class="fa-solid fa-arrow-right text-[11px]"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Middle Contact Details List (4 Cols) -->
                    <div class="lg:col-span-4 space-y-6 lg:border-l lg:border-slate-800/80 lg:pl-10">
                        <!-- Item 1: Email -->
                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-slate-800/90 border border-slate-700/60 flex items-center justify-center text-white shrink-0 text-sm group-hover:border-red-500/50 group-hover:text-red-400 transition-colors">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="min-w-0">
                                <a href="mailto:saurabhkumarssp@gmail.com" class="font-bold text-white text-xs sm:text-sm hover:text-red-400 transition block truncate">
                                    saurabhkumarssp@gmail.com
                                </a>
                                <span class="text-[11px] text-slate-400 font-medium">Drop me an email</span>
                            </div>
                        </div>

                        <!-- Item 2: Phone -->
                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-slate-800/90 border border-slate-700/60 flex items-center justify-center text-white shrink-0 text-sm group-hover:border-red-500/50 group-hover:text-red-400 transition-colors">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <a href="tel:+917705839870" class="font-bold text-white text-xs sm:text-sm hover:text-red-400 transition block">
                                    +91-7705839870
                                </a>
                                <span class="text-[11px] text-slate-400 font-medium">Call me anytime</span>
                            </div>
                        </div>

                        <!-- Item 3: LinkedIn -->
                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-slate-800/90 border border-slate-700/60 flex items-center justify-center text-white shrink-0 text-sm group-hover:border-red-500/50 group-hover:text-red-400 transition-colors">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </div>
                            <div class="min-w-0">
                                <a href="https://linkedin.com/in/saurabh-kumar-378810272" target="_blank" class="font-bold text-white text-xs sm:text-sm hover:text-red-400 transition block truncate">
                                    linkedin.com/in/saurabh-kumar-378810272
                                </a>
                                <span class="text-[11px] text-slate-400 font-medium">Connect on LinkedIn</span>
                            </div>
                        </div>

                        <!-- Item 4: GitHub -->
                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-slate-800/90 border border-slate-700/60 flex items-center justify-center text-white shrink-0 text-sm group-hover:border-red-500/50 group-hover:text-red-400 transition-colors">
                                <i class="fa-brands fa-github"></i>
                            </div>
                            <div class="min-w-0">
                                <a href="https://github.com/Saurya899" target="_blank" class="font-bold text-white text-xs sm:text-sm hover:text-red-400 transition block truncate">
                                    github.com/Saurya899
                                </a>
                                <span class="text-[11px] text-slate-400 font-medium">View my GitHub</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Contact Form Card (4 Cols) -->
                    <div class="lg:col-span-4">
                        <div class="bg-[#11192e]/90 backdrop-blur-md p-6 sm:p-7 rounded-2xl border border-slate-800/90 shadow-2xl space-y-4">
                            <form action="#" method="POST"
                                onsubmit="event.preventDefault(); alert('Thank you! Your message has been sent successfully.');"
                                class="space-y-3.5">
                                
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label class="block text-[11px] font-semibold text-slate-300 mb-1">Name</label>
                                        <input type="text" placeholder="Your name" required
                                            class="w-full text-xs px-3.5 py-2.5 bg-[#18233c] border border-slate-700/60 rounded-xl text-white placeholder:text-slate-500 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                                    </div>
                                    <div>
                                        <label class="block text-[11px] font-semibold text-slate-300 mb-1">Email</label>
                                        <input type="email" placeholder="Your email" required
                                            class="w-full text-xs px-3.5 py-2.5 bg-[#18233c] border border-slate-700/60 rounded-xl text-white placeholder:text-slate-500 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-[11px] font-semibold text-slate-300 mb-1">Subject</label>
                                    <select
                                        class="w-full text-xs px-3.5 py-2.5 bg-[#18233c] border border-slate-700/60 rounded-xl text-white focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition text-slate-300">
                                        <option value="">Select subject</option>
                                        <option value="project">Project Inquiry</option>
                                        <option value="hiring">Job Opportunity</option>
                                        <option value="other">General Query</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-[11px] font-semibold text-slate-300 mb-1">Message</label>
                                    <textarea rows="3" placeholder="Your message" required
                                        class="w-full text-xs px-3.5 py-2.5 bg-[#18233c] border border-slate-700/60 rounded-xl text-white placeholder:text-slate-500 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition resize-none"></textarea>
                                </div>

                                <button type="submit"
                                    class="w-full bg-[#ff3b30] hover:bg-red-600 text-white font-bold text-xs py-3 rounded-xl shadow-lg shadow-red-500/20 transition-all duration-300 flex items-center justify-center gap-2">
                                    Send Message <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- 7. FOOTER BAR -->
    <footer class="bg-[#050b17] border-t border-slate-800/80 text-slate-400 text-xs py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                
                <!-- Left: Brand Logo & Title -->
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo.png') }}" alt="Saurabh Kumar Logo"
                        class="w-9 h-9 object-contain rounded-full bg-white/10 p-0.5">
                    <div>
                        <span class="font-extrabold text-white text-sm uppercase tracking-wider block">SAURABH KUMAR</span>
                        <span class="text-[10px] text-slate-400 font-medium">PHP & Laravel Full Stack Developer</span>
                    </div>
                </div>

                <!-- Right: Social Icons & Copyright -->
                <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 text-slate-400 text-xs">
                    <div class="flex items-center gap-2.5 text-sm">
                        <a href="https://www.facebook.com/saurya.s.kumar" target="_blank" rel="noopener noreferrer"
                            class="w-8 h-8 rounded-lg bg-slate-800/80 hover:bg-blue-600 hover:text-white flex items-center justify-center transition-all duration-200" title="Facebook">
                            <i class="fa-brands fa-facebook-f text-xs"></i>
                        </a>
                        <a href="https://www.instagram.com/rocking_star_saurabh" target="_blank" rel="noopener noreferrer"
                            class="w-8 h-8 rounded-lg bg-slate-800/80 hover:bg-gradient-to-tr hover:from-amber-500 hover:via-rose-500 hover:to-purple-600 hover:text-white flex items-center justify-center transition-all duration-200" title="Instagram">
                            <i class="fa-brands fa-instagram text-xs"></i>
                        </a>
                        <a href="https://linkedin.com/in/saurabh-kumar-378810272" target="_blank" rel="noopener noreferrer"
                            class="w-8 h-8 rounded-lg bg-slate-800/80 hover:bg-blue-600 hover:text-white flex items-center justify-center transition-all duration-200" title="LinkedIn">
                            <i class="fa-brands fa-linkedin-in text-xs"></i>
                        </a>
                        <a href="https://github.com/Saurya899" target="_blank" rel="noopener noreferrer"
                            class="w-8 h-8 rounded-lg bg-slate-800/80 hover:bg-slate-700 hover:text-white flex items-center justify-center transition-all duration-200" title="GitHub">
                            <i class="fa-brands fa-github text-xs"></i>
                        </a>
                        <a href="mailto:saurabhkumarssp@gmail.com"
                            class="w-8 h-8 rounded-lg bg-slate-800/80 hover:bg-red-500 hover:text-white flex items-center justify-center transition-all duration-200" title="Email">
                            <i class="fa-regular fa-envelope text-xs"></i>
                        </a>
                    </div>
                    <span>© 2026 Saurabh Kumar. All Rights Reserved.</span>
                </div>

            </div>
        </div>
    </footer>

    <!-- Interactive Scripts -->
    <script>
        // Mobile Navigation Toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn?.addEventListener('click', () => {
            menu?.classList.toggle('hidden');
        });

        // Highlight active nav item on scroll
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

        function updateActiveNav() {
            let current = 'home';
            const scrollPosition = window.scrollY + 140;

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });

            // If scrolled to bottom of page, default to contact
            if ((window.innerHeight + window.scrollY) >= (document.documentElement.scrollHeight - 50)) {
                current = 'contact';
            }

            navLinks.forEach(link => {
                if (link.getAttribute('href') === `#${current}`) {
                    link.className = 'nav-link px-4 py-2 rounded-xl text-xs font-bold text-blue-600 bg-blue-50 border border-blue-200/80 shadow-2xs transition-all duration-200';
                } else {
                    link.className = 'nav-link px-4 py-2 rounded-xl text-xs font-medium text-slate-600 bg-transparent border border-transparent hover:bg-slate-100 hover:text-slate-900 transition-all duration-200';
                }
            });

            mobileNavLinks.forEach(link => {
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.remove('text-slate-700', 'font-semibold');
                    link.classList.add('text-blue-600', 'bg-blue-50', 'font-bold');
                } else {
                    link.classList.remove('text-blue-600', 'bg-blue-50', 'font-bold');
                    link.classList.add('text-slate-700', 'font-semibold');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNav);
        window.addEventListener('load', updateActiveNav);
    </script>
</body>

</html>