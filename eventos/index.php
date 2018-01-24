<?php

require('config.php');

init();

if (isset($_REQUEST['email']) && $_REQUEST['email']) {

    $email = trim($_REQUEST['email']);

    if (!$infos = get_info_from_email($email))
        $infos = array();

    $first_name = '';
    $images = array();

    foreach ($infos as $info) {

        if (empty($first_name)) {
            $first_name = explode(' ', $info['nome']);
            $first_name = utf8_encode($first_name[0]);
        }

        if (!DEBUG && is_file(CACHE_PATH . '/' . $info['file'])) {
            $images[] = CACHE_DIR . '/' . $info['file'];
            continue;
        }

        $info['name'] = strtoupper(remove_accents($info['nome']));
        $info['bg_file'] = 'img/bg-' . $info['evento'] . '.png';
        $images[] = generate_image($info);

    }

}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo TITLE; ?></title>
<link rel="stylesheet" href="styles.css" />
<meta name="robots" content="noindex,nofollow" />
<style type="text/css">
    .wrap { background-image:url('<?php echo TOP_LOGO; ?>'); }
</style>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
</head>
<body>

    <div class="wrap">
        <?php ini_set( 'default_charset', 'utf-8'); ?>
        <?php if (!empty($first_name)) : ?>
            <h2>Oi, <?php echo $first_name; ?>!</h2>
        <?php endif; ?>

        <?php if (!empty($images) && is_array($images)) : ?>

            <p>
                Obrigado por participar do(s) seguinte(s) <?php echo TITLE;?>!
                <?php if (count($images) > 1) : ?>
                    Aqui está(ão) seu(s) certificado(s).
                <?php else : ?>
                    Aqui está seu certificado.
                <?php endif; ?>
            </p>

            <p>
                Qualquer problema, basta entrar em contato com "cpa@liberato.com.br".
            </p>

            <div class="items">
                <?php foreach ($images as $img) : ?>
                    <div class="item">
                        <a href="<?php echo $img; ?>"><img src="<?php echo $img; ?>" width="250" /></a>
                    </div>
                <?php endforeach; ?>
            </div>

            <p>
                <small>Para salvar, clique com o botão direito e escolha
                "salvar imagem como". Impressão em A4.</small>
            </p>

        <?php else : ?>            

            <?php if (isset($_REQUEST['email'])) : ?>
                <p>                    
                    Não foi possível encontrar o seu e-mail. Caso você
                    continue tendo este problema, por favor entre em
                    contato com "cpa@liberato.com.br"
                    informando o seu nome completo, e-mail, e as
                    atividades das quais você participou.
                </p>
            <?php endif; ?>

            <form name="emailinfo" action="" method="GET">
                <p>
                    Digite o e-mail que você cadastrou no formulário
                    de inscrição do evento:
                </p>
                <p><input type="text" name="email" value="" /></p>
                <p><input type="submit" value="Enviar" /></p>
            </form>

        <?php endif; ?>

    </div>

</body>
</html>
