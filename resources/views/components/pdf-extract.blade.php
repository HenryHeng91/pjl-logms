<div class="container mx-auto my-6">
    <label class="border-2 border-gray-200 p-3 w-full block rounded cursor-pointer my-2" for="customFile" x-data="{ files: null }">
        <input type="file" class="sr-only" id="customFile" x-on:change="new PdfParser(Object.values($event.target.files)).then(result => {
        alert(result.text);
    });
">
        <span x-text="files ? files.map(file => file.name).join(', ') : 'Choose single file...'"></span>
    </label>
    <button x-on:click="alert('Hello World!')">Say Hi</button>
</div>
