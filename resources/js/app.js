import './bootstrap';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

console.log("lets gooooo")

document.addEventListener('DOMContentLoaded', function() {
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
});