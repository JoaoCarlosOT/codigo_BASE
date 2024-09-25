<?php
$controller->load->model('modulos/modulos_model_faq', 'model_faq');
$faqs = $controller->model_faq->buscar_faqs();
if(!$faqs) return;

?>

<div class="faqs">
    <div class="container">
        <h3 class="tituloPadrao">FAQ</h3>
        <div class="blocos">
            <?php foreach($faqs as $faq):?>
                <div class="bloco">
                    <div class="pergunta tituloPadrao4"><?=$faq->pergunta?><em class="icon-down-open"></em></div>
                    <div class="resposta textoPadrao"><?=$faq->resposta?></div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>


<script>
    $(".faqs .blocos .bloco").on('click', function(){
        // $('.faqs .blocos .bloco .resposta').slideUp();
        // $(this).find('.resposta').slideDown();
        $(this).toggleClass('ativado');
        $(this).find('.resposta').slideToggle();
    })
</script>