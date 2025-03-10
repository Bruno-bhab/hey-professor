<x-app-layout>
    <x-slot name="header">
        <x-header name="Dashboard"/>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-form.form post :action="route('question.store')">
                <x-form.textarea label="Question" name="question" placeholder="Ask me anything"/>
                <x-btn.primary btn_type="submit">Save</x-btn.primary>
                <x-btn.alternative btn_type="reset">Cancel</x-btn.primary>
            </x-form.form>
        </div>
    </div>
</x-app-layout>
