<x-layouts::main.template>
    <div class="">
        <h1>This is the contact page</h1>
        <section>
    <h2 class="text-sm uppercase tracking-[0.3em] mb-8 font-bold">Color System (OKLCH)</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
        
        <div class="color-card rounded-xl p-4 bg-base-100 border border-white/10">
            <div class="h-24 rounded-lg mb-4 bg-base-100 border border-white/20"></div>
            <span class="block font-bold text-base-content">Base 100</span>
            <span class="text-xs text-base-content/50 uppercase tracking-widest">Background</span>
        </div>

        <div class="color-card rounded-xl p-4 bg-base-200">
            <div class="h-24 rounded-lg mb-4 bg-base-200"></div>
            <span class="block font-bold text-base-content">Base 200</span>
            <span class="text-xs text-base-content/50 uppercase tracking-widest">Surface</span>
        </div>

        <div class="color-card rounded-xl p-4 bg-base-300">
            <div class="h-24 rounded-lg mb-4 bg-base-300"></div>
            <span class="block font-bold text-base-content">Base 300</span>
            <span class="text-xs text-base-content/50 uppercase tracking-widest">Surface</span>
        </div>

        <div class="color-card rounded-xl p-4 bg-primary text-primary-content">
            <div class="h-24 rounded-lg mb-4 bg-primary shadow-[0_0_20px_oklch(85%_0.138_181.071)]"></div>
            <span class="block font-black uppercase italic">Primary</span>
            <span class="text-xs opacity-80 uppercase tracking-widest">Action</span>
        </div>

        <div class="color-card rounded-xl p-4 bg-accent text-base-content">
            <div class="h-24 rounded-lg mb-4 bg-accent"></div>
            <span class="block font-black uppercase">Accent</span>
            <span class="text-xs opacity-80 uppercase tracking-widest">Technical</span>
        </div>

        <div class="color-card rounded-xl p-4 bg-success text-success-content">
            <div class="h-24 rounded-lg mb-4 bg-success"></div>
            <span class="block font-bold">Success</span>
            <span class="text-xs opacity-80 uppercase tracking-widest">Positive</span>
        </div>

        <div class="color-card rounded-xl p-4 bg-info text-info-content">
            <div class="h-24 rounded-lg mb-4 bg-info"></div>
            <span class="block font-bold">Info</span>
            <span class="text-xs opacity-80 uppercase tracking-widest">Information</span>
        </div>

        <div class="color-card rounded-xl p-4 bg-warning text-warning-content">
            <div class="h-24 rounded-lg mb-4 bg-warning"></div>
            <span class="block font-bold">Warning</span>
            <span class="text-xs opacity-80 uppercase tracking-widest">Alert</span>
        </div>

        <div class="color-card rounded-xl p-4 bg-error text-error-content">
            <div class="h-24 rounded-lg mb-4 bg-error"></div>
            <span class="block font-bold text-error-content">Error</span>
            <span class="text-xs opacity-80 uppercase tracking-widest">Danger</span>
        </div>

    </div>
</section>
    </div>
</x-layouts::main.template>