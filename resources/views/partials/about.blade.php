<section id="about" class="py-xxl">
    <div class="container-portfolio">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center md:justify-start reveal-left">
                <div class="relative">
                    <div class="orb w-48 h-48 bg-accent/10 absolute -top-6 -left-6 blur-[80px]"></div>
                    <div class="w-72 h-72 rounded-xl overflow-hidden glass p-2 group" x-data>
                        <div class="w-full h-full rounded-lg bg-gradient-to-br from-tertiary/20 to-accent/20 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-tertiary/30 to-accent/30 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <svg class="w-24 h-24 text-tertiary/50 group-hover:text-tertiary/70 group-hover:scale-110 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6" x-data>
                <div class="reveal" x-intersect="$el.classList.add('visible')">
                    <h2 class="section-title">
                        About <span class="gradient-text">Me</span>
                    </h2>
                </div>

                <p class="text-secondary text-lg leading-relaxed reveal" style="transition-delay: 0.1s">
                    I am an Informatics graduate from Institut Teknologi Nasional Bandung with a strong passion for Data Analysis, Machine Learning, and technology-driven problem solving.
                </p>

                <p class="text-secondary text-lg leading-relaxed reveal" style="transition-delay: 0.2s">
                    I have experience in data processing, system analysis, IT troubleshooting, and developing NLP-based machine learning models using IndoBERTweet-BiLSTM. I am a fast learner, analytical thinker, team-oriented individual, and highly interested in building impactful digital solutions through technology and data.
                </p>

                <div class="flex flex-wrap gap-6 pt-4 reveal" style="transition-delay: 0.3s">
                    <div class="text-center">
                        <div class="text-3xl font-display font-bold gradient-text">
                            <span class="animate-counter" data-target="4">0</span>
                            <span class="text-xl">+</span>
                        </div>
                        <div class="text-sm text-secondary mt-1">Years Experience</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-display font-bold gradient-text">
                            <span class="animate-counter" data-target="{{ $projects->count() }}">0</span>
                            <span class="text-xl">+</span>
                        </div>
                        <div class="text-sm text-secondary mt-1">Projects Done</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-display font-bold gradient-text">
                            <span class="animate-counter" data-target="{{ $services->count() }}">0</span>
                            <span class="text-xl">+</span>
                        </div>
                        <div class="text-sm text-secondary mt-1">Services</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
