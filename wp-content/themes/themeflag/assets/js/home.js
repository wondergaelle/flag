
jQuery(document).ready(function($) {
    if ($('body.home').length) {
        let pagetitle = 'freelance';

        let typewritter = new Typewriter('body.home p-1', {
            strings: ['freelance'],
            autoStart: true,
            loop: true
        });

    }
});
