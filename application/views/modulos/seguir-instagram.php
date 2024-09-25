<?php
$controller->load->model('modulos/modulos_model_config', 'model_config');
$config = $controller->model_config->buscar_config();

$userAdminInsta = explode('/',str_replace(array('https://'), "", $config['redes_instagram']));
$user = $userAdminInsta[1];
?>

<div class="insta-bloco">
	<div class="container">
        <h2 class="tituloPadrao2 titulo">nos siga: @<?=$user?></h2>
        <div class="bloco-redes">
            <?php if($config['redes_facebook']): ?>
                <div class="bloco">
                    <a target="_blank" class="facebook" title="Facebook" href="<?php echo $config['redes_facebook']; ?>">
                        <em class="icon-facebook icn"></em>
                    </a>
                </div>												
            <?php endif; ?>

            <?php if($config['redes_instagram']): ?>
                <div class="bloco">
                    <a target="_blank" class="instagram" title="Instagram" href="<?php echo $config['redes_instagram']; ?>">
                        <em class="icon-instagram icn"></em>
                    </a>
                </div>
            <?php endif; ?>  

            <?php if($config['redes_twitter']): ?>
                <div class="bloco">
                    <a target="_blank" class="twitter" title="twitter" href="<?php echo $config['redes_twitter']; ?>">
                        <em class="icon-twitter icn"></em>
                    </a>
                </div>
            <?php endif; ?>

            <?php if($config['redes_youtube']): ?>
                <div class="bloco">
                    <a target="_blank" class="youtube" title="youtube" href="<?php echo $config['redes_youtube']; ?>">
                        <em class="icon-youtube icn"></em>
                    </a>
                </div>
            <?php endif; ?>

            <?php if($config['redes_linkedin']): ?>
                <div class="bloco">
                    <a target="_blank" class="linkedin" title="linkedin" href="<?php echo $config['redes_linkedin']; ?>">
                        <em class="icon-linkedin icn"></em>
                    </a>
                </div>
            <?php endif; ?>

            <?php if($config['redes_pinterest']): ?>
                <div class="bloco">
                    <a target="_blank" class="pinterest" title="pinterest" href="<?php echo $config['redes_pinterest']; ?>">
                        <em class="icon-pinterest icn"></em>
                    </a>
                </div>
            <?php endif; ?> 

            <?php if($config['redes_tiktok']): ?>
                <div class="bloco">
                    <a target="_blank" class="tiktok" title="tiktok" href="<?php echo $config['redes_tiktok']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#fff" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02c.08 1.53.63 3.09 1.75 4.17c1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97c-.57-.26-1.1-.59-1.62-.93c-.01 2.92.01 5.84-.02 8.75c-.08 1.4-.54 2.79-1.35 3.94c-1.31 1.92-3.58 3.17-5.91 3.21c-1.43.08-2.86-.31-4.08-1.03c-2.02-1.19-3.44-3.37-3.65-5.71c-.02-.5-.03-1-.01-1.49c.18-1.9 1.12-3.72 2.58-4.96c1.66-1.44 3.98-2.13 6.15-1.72c.02 1.48-.04 2.96-.04 4.44c-.99-.32-2.15-.23-3.02.37c-.63.41-1.11 1.04-1.36 1.75c-.21.51-.15 1.07-.14 1.61c.24 1.64 1.82 3.02 3.5 2.87c1.12-.01 2.19-.66 2.77-1.61c.19-.33.4-.67.41-1.06c.1-1.79.06-3.57.07-5.36c.01-4.03-.01-8.05.02-12.07z"></path></svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>

		<div class="team-body" id="itens-instagram"></div>
	</div>
</div>

<script type="text/javascript">
    var userName ="<?=$user?>"
    var limit_instagram = 4;

    //jQuery(document).ready(function(){
        jQuery.ajax({
            type: 'POST',
            url:"/posts-instagram?limit="+limit_instagram,
            data: {
                'posts_instagram' : userName,
                'limite' : limit_instagram
            },
            success: function (response) {
                if(response){
                    response.forEach(function(item, index){
                        var img = '/arquivos/imagens/instagram/'+item.img;
                        //var img = item.img;
                        var link= item.link;
                        var title = item.title;
                        
                        jQuery('#itens-instagram').append('<a class="item-insta carregar-img" href="'+link+'" target="_blank" title="'+title+'"><img src="'+img+'" title="'+title+'" alt="'+title+'"></a>');

                    });
                }
                
            }
        });
    //});
			
</script> 