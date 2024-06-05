<x-layout>
    <x-page-heading>Post a Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="£25000"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="Remote"></x-forms.input>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="http://www.google.com"></x-forms.input>
        <x-forms.checkbox label="Feature (Costs extra)" name="featured"></x-forms.checkbox>

        <x-forms.divider />
        <x-forms.input label="Tags (comma seperated)" name="tags"
            placeholder="backend, frontend, database, full stack" />
        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
