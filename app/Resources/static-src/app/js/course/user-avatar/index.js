import 'store';
$(".js-course-avatar a").on('click', function () {
    store.set('course-guest-page-url', window.location.href);
    this.href = $(this).data('url')
});