<div id="toastContainer" class="fixed bottom-8 right-8 z-50 flex flex-col gap-3 pointer-events-none">
    <template x-for="(toast, index) in $store.toasts.items" :key="index">
        <div class="pointer-events-auto glass rounded-xl px-6 py-4 flex items-center gap-3 shadow-lg animate-fade-up"
            :class="{
                'border-l-4 border-l-success': toast.type === 'success',
                'border-l-4 border-l-danger': toast.type === 'error',
                'border-l-4 border-l-warning': toast.type === 'warning',
                'border-l-4 border-l-accent': toast.type === 'info'
            }"
            x-init="setTimeout(() => $store.toasts.remove(index), toast.duration || 4000)"
            x-show="true"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-0 translate-x-full">
            <template x-if="toast.type === 'success'">
                <svg class="w-5 h-5 text-success shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </template>
            <template x-if="toast.type === 'error'">
                <svg class="w-5 h-5 text-danger shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </template>
            <template x-if="toast.type === 'warning'">
                <svg class="w-5 h-5 text-warning shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
            </template>
            <template x-if="toast.type === 'info'">
                <svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </template>
            <span class="text-sm text-primary" x-text="toast.message"></span>
        </div>
    </template>
</div>
