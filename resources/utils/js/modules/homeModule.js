import $ from 'jquery';

export function initHome() {
    $(".note-wrapper").on('click', (event) => {
       let element = event.currentTarget;
       let noteUrl = $(element).attr('data-url');

       location.href = "http://" + document.domain + ":8000" + noteUrl;
    });
}
