<section id="about" class="py-xxl">
    <div class="container-portfolio">
        <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="flex justify-center md:justify-start reveal-left">
                <div class="relative group">
                    <div class="orb w-48 h-48 bg-accent/10 absolute -top-6 -left-6 blur-[80px]"></div>
                    <div class="w-72 h-72 rounded-xl overflow-hidden glass p-2">
                        <div class="w-full h-full rounded-lg overflow-hidden">
                            <img src="{{ asset('assets/images/g2.jpg') }}" alt="Sanjaya Raga Weninggalih" class="w-full h-full object-cover">
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
                    I am an Informatics graduate from Institut Teknologi Nasional Bandung with a strong passion for Data Analysis, Machine Learning, and technology-driven innovation. I enjoy transforming complex data into meaningful insights and building digital solutions that create real impact.
                </p>

                <p class="text-secondary text-lg leading-relaxed reveal" style="transition-delay: 0.2s">
                    My experience spans across data processing, system analysis, IT support, multimedia production, and AI development. I have worked on various projects ranging from NLP-based emotion detection using IndoBERTweet-BiLSTM, IoT systems, Augmented Reality applications, to live streaming production management.
                </p>

                <p class="text-secondary text-lg leading-relaxed reveal" style="transition-delay: 0.3s">
                    Beyond technical skills, I am recognized as a fast learner, analytical thinker, and collaborative team player who thrives in dynamic environments. I am highly motivated to continuously grow, explore new technologies, and contribute to impactful projects through creativity, problem solving, and data-driven approaches.
                </p>

                <div class="flex flex-wrap gap-6 pt-4 reveal" style="transition-delay: 0.4s">
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
