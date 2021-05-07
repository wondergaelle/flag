<?php
/**
 * Created by PhpStorm.
 * User: floch
 * Date: 3/11/21
 * Time: 9:17 PM
 */

?>

<footer class="w-100 mt-5">
    <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    <div class="footer  py-3 text-center">
        <span>Conçu et développé par <a href="https://mirada.fr">< Flag /></a>, <?= date("Y"); ?> ©flag-webdev</span>
    </div>

</footer>

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
