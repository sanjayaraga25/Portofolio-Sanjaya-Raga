<section id="contact" class="py-xxl bg-surface/30" x-data="contactForm()">
    <div class="container-portfolio">
        <div class="text-center mb-16">
            <h2 class="section-title mb-4 reveal">
                Get In <span class="gradient-text">Touch</span>
            </h2>
            <p class="section-subtitle mx-auto reveal" style="transition-delay: 0.1s">
                Have a project in mind? Let's work together
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
            <div class="space-y-8 reveal-left">
                <div class="glass rounded-2xl p-8 space-y-6">
                    <div class="flex items-center gap-4 group">
                        <div class="w-12 h-12 rounded-full bg-tertiary/10 flex items-center justify-center text-tertiary group-hover:bg-tertiary/20 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="font-medium">Email</p>
                            <p class="text-secondary text-sm">galih.sanjaya250@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 group">
                        <div class="w-12 h-12 rounded-full bg-tertiary/10 flex items-center justify-center text-tertiary group-hover:bg-tertiary/20 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <p class="font-medium">Location</p>
                            <p class="text-secondary text-sm">Indonesia</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 group">
                        <div class="w-12 h-12 rounded-full bg-tertiary/10 flex items-center justify-center text-tertiary group-hover:bg-tertiary/20 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <p class="font-medium">WhatsApp</p>
                            <p class="text-secondary text-sm">085871194950</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="https://wa.me/6285871194950" target="_blank" rel="noopener" class="btn-primary text-sm magnetic-btn">
                        WhatsApp Me
                    </a>
                    <a href="mailto:galih.sanjaya250@gmail.com" class="btn-secondary text-sm magnetic-btn">
                        Send Email
                    </a>
                    <button id="copyEmailBtn" class="btn-secondary text-sm magnetic-btn" data-email="galih.sanjaya250@gmail.com">
                        Copy Email
                    </button>
                </div>
            </div>

            <div class="reveal-right">
                <template x-if="!submitted">
                    <form id="contactForm" class="space-y-5" action="{{ route('contact.store') }}" method="POST" @submit.prevent="submitForm" x-init="$el.setAttribute('data-alpine-handled', 'true')">
                        @csrf

                        <div>
                            <input type="text" name="name" placeholder="Your Name" required x-model="form.name"
                                class="input-field w-full"
                                :class="{ 'border-danger': errors.name, 'border-success': form.name && !errors.name }"
                                @input="errors.name = ''">
                            <p class="text-danger text-sm mt-1" x-show="errors.name" x-text="errors.name"></p>
                            <p class="text-danger text-sm mt-1" x-show="serverErrors.name" x-text="serverErrors.name"></p>
                        </div>

                        <div>
                            <input type="email" name="email" placeholder="Your Email" required x-model="form.email"
                                class="input-field w-full"
                                :class="{ 'border-danger': errors.email, 'border-success': form.email && !errors.email }"
                                @input="errors.email = ''">
                            <p class="text-danger text-sm mt-1" x-show="errors.email" x-text="errors.email"></p>
                            <p class="text-danger text-sm mt-1" x-show="serverErrors.email" x-text="serverErrors.email"></p>
                        </div>

                        <div>
                            <input type="text" name="subject" placeholder="Subject" required x-model="form.subject"
                                class="input-field w-full"
                                :class="{ 'border-danger': errors.subject, 'border-success': form.subject && !errors.subject }"
                                @input="errors.subject = ''">
                            <p class="text-danger text-sm mt-1" x-show="errors.subject" x-text="errors.subject"></p>
                            <p class="text-danger text-sm mt-1" x-show="serverErrors.subject" x-text="serverErrors.subject"></p>
                        </div>

                        <div>
                            <textarea name="message" placeholder="Your Message" required rows="5" x-model="form.message" maxlength="1000"
                                class="input-field w-full resize-none"
                                :class="{ 'border-danger': errors.message, 'border-success': form.message && !errors.message }"
                                @input="errors.message = ''"></textarea>
                            <div class="flex justify-between mt-1">
                                <p class="text-danger text-sm" x-show="errors.message" x-text="errors.message"></p>
                                <p class="text-danger text-sm" x-show="serverErrors.message" x-text="serverErrors.message"></p>
                                <p class="text-xs text-secondary ml-auto" x-text="`${form.message.length}/1000`"></p>
                            </div>
                        </div>

                        <button type="submit" class="btn-primary w-full justify-center magnetic-btn" :disabled="sending">
                            <template x-if="!sending">
                                <span class="flex items-center gap-2">
                                    Send Message
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                                </span>
                            </template>
                            <template x-if="sending">
                                <span class="flex items-center gap-2">
                                    <svg class="w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/></svg>
                                    Sending...
                                </span>
                            </template>
                        </button>
                    </form>
                </template>

                <template x-if="submitted">
                    <div class="glass rounded-2xl p-12 text-center reveal" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
                        <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-success/10 flex items-center justify-center">
                            <svg class="w-10 h-10 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-2">Message Sent!</h3>
                        <p class="text-secondary mb-6">Thank you for reaching out. I'll get back to you as soon as possible.</p>
                        <button @click="resetForm" class="btn-secondary text-sm">
                            Send Another Message
                        </button>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <script>
        function contactForm() {
            return {
                form: { name: '', email: '', subject: '', message: '' },
                errors: { name: '', email: '', subject: '', message: '' },
                serverErrors: { name: '', email: '', subject: '', message: '' },
                sending: false,
                submitted: false,

                validate() {
                    let valid = true;
                    this.errors = { name: '', email: '', subject: '', message: '' };

                    if (!this.form.name.trim()) {
                        this.errors.name = 'Name is required';
                        valid = false;
                    }
                    if (!this.form.email.trim()) {
                        this.errors.email = 'Email is required';
                        valid = false;
                    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.form.email)) {
                        this.errors.email = 'Invalid email format';
                        valid = false;
                    }
                    if (!this.form.subject.trim()) {
                        this.errors.subject = 'Subject is required';
                        valid = false;
                    }
                    if (!this.form.message.trim()) {
                        this.errors.message = 'Message is required';
                        valid = false;
                    } else if (this.form.message.trim().length < 10) {
                        this.errors.message = 'Message must be at least 10 characters';
                        valid = false;
                    }

                    return valid;
                },

                async submitForm() {
                    if (!this.validate()) return;

                    this.sending = true;
                    this.serverErrors = { name: '', email: '', subject: '', message: '' };

                    try {
                        const resp = await fetch('{{ route("contact.store") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                'Accept': 'application/json',
                            },
                            body: JSON.stringify(this.form),
                        });

                        const data = await resp.json();

                        if (resp.ok) {
                            this.submitted = true;
                            if (window.showToast) {
                                window.showToast('Message sent successfully!', 'success');
                            }
                        } else {
                            if (data.errors) {
                                Object.keys(data.errors).forEach((key) => {
                                    if (this.serverErrors.hasOwnProperty(key)) {
                                        this.serverErrors[key] = data.errors[key][0];
                                    }
                                });
                            } else {
                                if (window.showToast) {
                                    window.showToast(data.message || 'Something went wrong', 'error');
                                }
                            }
                        }
                    } catch (err) {
                        if (window.showToast) {
                            window.showToast('Network error. Please try again.', 'error');
                        }
                    } finally {
                        this.sending = false;
                    }
                },

                resetForm() {
                    this.form = { name: '', email: '', subject: '', message: '' };
                    this.errors = { name: '', email: '', subject: '', message: '' };
                    this.serverErrors = { name: '', email: '', subject: '', message: '' };
                    this.submitted = false;
                },
            };
        }
    </script>
</section>
