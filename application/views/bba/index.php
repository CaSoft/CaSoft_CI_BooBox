<?php echo doctype(); ?>

<html>
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
       <title>Opções Boo-Box</title>

       <style type="text/css">
        body {
            background-color: #EEE;
        }

        #corpo {
            width: 800px;
            margin: 10px auto;
        }

        h1 {
            border-bottom: 2px solid #CCC;
            color: #222;
            text-shadow: #999 1px 1px;
        }

        fieldset {
            border: 1px solid #CCC;
            margin: 0px 0px 15px 0px;
            padding: 10px;
            border-radius: 8px;
        }

        fieldset legend {
            font-weight: bold;
            color: #222;
            text-shadow: #999 1px 1px;
            margin: 0px 0px 0px 30px;
        }

        form label {
            display: inline-block;
            width: 200px;
            margin: 10px 0px 0px 0px;
        }

        form input[type=text],
        form select {
            display: inline-block;
            width: 400px;
            border: 1px solid #CCC;
            border-radius: 2px;
            margin: 5px 0px;
            padding: 4px;
            font-size: 16px;
            background-color: #FFF;
        }

        form input[type=submit] {
            display: block;
            font-size: 16px;
            padding: 4px 8px;
        }
       </style>
    </head>
    <body>
        <div id="corpo">
        <h1>Opções do Boo-Box</h1>
        <?php

            echo form_open();

                echo form_fieldset('Identificação');

                    echo form_label('* Seu UID:', 'form_bba_uid');
                    echo form_error('form_bba_uid');
                    echo form_input(array(
                        'id'        => 'form_bba_uid',
                        'name'      => 'form_bba_uid',
                        'value'     => set_value('form_bba_uid')
                    ));

                echo form_fieldset_close();

                echo form_fieldset('Publicidade');

                    echo form_label('* Suas Tags:', 'form_bba_tags');
                    echo form_error('form_bba_tags');
                    echo form_input(array(
                        'id'        => 'form_bba_tags',
                        'name'      => 'form_bba_tags',
                        'value'     => set_value('form_bba_tags')
                    ));
                    echo br();

                    echo form_label('* Afiliados:', 'form_bba_aff');
                    echo form_error('form_bba_aff');
                    echo form_multiselect('form_bba_aff[]', array(
                        'americanasid'      => 'Americanas',
                        'amazonid'          => 'Amazon',
                        'amazonukid'        => 'Amazon UK',
                        'amazonjpid'        => 'Amazon JP',
                        'amazonfrid'        => 'Amazon FR',
                        'amazondeid'        => 'Amazon DE',
                        'buscapeid'         => 'BuscaPé',
                        'ebayid'            => 'eBay',
                        'jacoteiid'         => 'Já Cotei',
                        'mercadolivreid'    => 'Mercado Livre',
                        'submarinoid'       => 'Submarino',
                    ), '', 'id="form_bba_aff" size="11"');
                        echo br();

                    echo form_label('* Quantidade:', 'form_bba_limit');
                    echo form_error('form_bba_limit');
                    echo form_dropdown('form_bba_limit', array(
                        '1'     => '1',
                        '3'     => '3',
                        '5'     => '5',
                        '6'     => '6',
                        '8'     => '8',
                        '10'    => '10',

                    ), '6', 'id="form_bba_limit"');
                echo form_fieldset_close();

                echo form_submit('', 'Enviar');

            echo form_close();

        ?>
        </div>
    </body>
</html>
