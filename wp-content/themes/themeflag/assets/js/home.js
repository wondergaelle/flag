
jQuery(document).ready(function($) {
    if ($('body.home').length) {
        let pagetitle = 'freelance';

        let typewritter = new Typewriter('body.home p-2', {
            strings: ['web.developpeuse'],
            autoStart: true,
            loop: true,
            properties:['Javascript',
                'HTML',
                'CSS']
        });

    }
});
