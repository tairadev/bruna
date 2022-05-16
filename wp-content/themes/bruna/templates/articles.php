<!DOCTYPE html>
<?php 
    // Template Name: Artigos
    wp_reset_postdata();
    wp_head();
    get_header();
?>

    <section id="introducao">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <h1>Seja bem-vindo à Update Consultoria</h1>
                    <p>Consultoria estratégica e treinamentos na área trabalhista e previdenciária, voltados para auxiliar as empresas a atingir os objetivos e a melhorar os seus resultados.</p>
                    <button class="btn-azul"  onclick="$('html, body').animate({ scrollTop: $('#contato').offset().top }, 'fast');">Entrar em contato</button>
                </div>
            </div>
        </div>
    </section>

    <section id="contato">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <h2>Contato</h2>
                    <p>
                        Preencha os dados abaixo e entre em contato conosco! Responderemos através do e-mail ou, se preferir, chame-nos pelo Whatsapp!<br />
                        <a href="https://api.whatsapp.com/send?phone=5515997058935&text=Ol%C3%A1%2C%20Update.%20Venho%20por%20meio%20do%20site%20updateconsultoria.com.br!" target="_blank" style="display: inline-flex; align-items: center; margin-top: 15px; color: #ffffff;"><i class="fab fa-whatsapp" style="font-size: 32px"></i>&nbsp; (15) 99705-8935 </a> <br>
                        <a href="mailto:contato@updateconsultoria.com.br" target="_blank" style="display: inline-flex; align-items: center; margin-top: 15px; color: #ffffff;"><i class="far fa-envelope" style="font-size: 32px"></i>&nbsp; contato@updateconsultoria.com.br </a>
                    </p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <img class="d-none d-md-block" src="http://brunatrovao.com.br/wp-content/themes/bruna/assets/images/logo-contato.png" alt="">
                </div>
                <div class="col-xs-12 col-md-8">
                   <?php echo do_shortcode('[contact-form-7 id="13" title="Contato"]'); ?>
                </div>
            </div>
        </div>
    </section>
<?php
    get_footer();
?>