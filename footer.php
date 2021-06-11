<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woow
 */

?>
<footer id="colophon" class="site-footer">
    <div id="prefooter">
        <div class="container-fluid">
            <div class="row">
                <div class="right col-sm-2">
                    <a href="">NOSOTROS</a>
                </div>
                <div class="col-sm-3">
                    <a href="">REGISTRO MASCOTAS</a>
                </div>
                <div class="col-sm-2">
                    <a href="">CAMBIOS Y DEVOLUCIONES</a>
                </div>
                <div class="col-sm-3">
                    <a href="">POLÍTICA DE PRIVACIDAD</a>
                </div>
                <div class="left col-sm-2">
                    <a href="">CONTACTAR UN ASESOR</a>
                </div>
                <div>
                    <p>Copyright 2021 © WOOW UNIVERSO ANIMAL SAS NIT 000000000-0 Todos los derechos
                        reservados.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <p>SITIO WEB BYGREGORIRAMIREZ / CONSTRUCCIÓN 4VEW</p>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<!-- <script src="../wp-content/themes/woow/js/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script> -->
<!-- <script src="../wp-content/themes/woow/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
</script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>
<?php wp_footer(); ?>
</body>
<!-- <footer id="colophon" class="site-footer">
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'woow' ) ); ?>">
		<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'woow' ), 'WordPress' );
				?>
        </a>
        <span class="sep"> | </span>
        <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'woow' ), 'woow', '<a href="http://woow.me/">woow.me</a>' );
				?>
    </div><!-- .site-info -->
<!--</footer><!-- #colophon -->
<!--</div> <!-- #page -->

</html>