<x-layouts::main.template>
    <div class="">
        
        <div class="border-b border-gray-200 pb-5 mb-10">
            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">Typography Style Guide</h1>
            <p class="mt-2 text-lg text-gray-600">A preview of headings, paragraphs, and list styles for this project.
            </p>
        </div>

        <section class="space-y-6 mb-12">
            <h2 class="text-xs font-semibold uppercase tracking-widest text-blue-600">Headings</h2>
            <div class="space-y-4">
                <h1 class="text-5xl font-bold text-gray-900">Heading 1 (5xl)</h1>
                <h2 class="text-4xl font-semibold text-gray-800">Heading 2 (4xl)</h2>
                <h3 class="text-3xl font-medium text-gray-800">Heading 3 (3xl)</h3>
                <h4 class="text-2xl font-medium text-gray-700">Heading 4 (2xl)</h4>
                <h5 class="text-xl font-medium text-gray-700">Heading 5 (xl)</h5>
            </div>
        </section>

        <hr class="my-10" />

        <section class="mb-12">
            <h2 class="text-xs font-semibold uppercase tracking-widest text-blue-600 mb-6">Body Text & Paragraphs</h2>
            <div class="space-y-6 text-gray-700 leading-relaxed">
                <p class="text-base">
                    This is a **standard paragraph**. It uses `text-base` for readability. In Laravel projects, we often
                    use the Inter font, which is designed for screens.
                </p>
                <p class="text-sm text-gray-500">
                    This is **secondary text** using `text-sm`. Useful for captions, hints, or footer links.
                </p>
                <blockquote class="border-l-4 border-blue-500 pl-4 italic text-gray-600 bg-gray-50 py-2">
                    "This is a blockquote style. It’s perfect for highlighting testimonials or important notes within
                    your application."
                </blockquote>
            </div>
        </section>

        <hr class="my-10" />

        <section class="mb-12">
            <h2 class="text-xs font-semibold uppercase tracking-widest text-blue-600 mb-6">Lists</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="font-bold mb-3">Unordered List</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>User Authentication</li>
                        <li>Livewire Components</li>
                        <li>Database Migrations</li>
                        <li>Vite Bundling</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-3">Ordered List</h3>
                    <ol class="list-decimal list-inside space-y-2 text-gray-700">
                        <li>Install Laragon</li>
                        <li>Create Laravel App</li>
                        <li>Push to GitHub</li>
                    </ol>
                </div>
            </div>
        </section>

    </div>
</x-layouts::main.template>