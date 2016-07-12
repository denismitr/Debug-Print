<?php


if ( ! function_exists('dprint')) {

    function dprint( $values ) {

        $param_list = func_get_args();

        ini_set('xdebug.var_display_max_depth', 30);
        ini_set('xdebug.var_display_max_childen', 200);
        ini_set('xdebug.var_display_max_data', 9999999);

        if (PHP_SAPI == 'cli') {
                echo "\n\n=========================[ Debug Print ]=========================\n\n";
            foreach ($param_list as $param) {
                echo gettype($param) . " : " . print_r( $param, true);
                echo "\n\n=================================================================\n\n";
            }
        } else {
            ?>
            <style>
                .DPrint {
                    padding: 10px;
                    margin-bottom: 25px;
                    color: #fff;
                    background: #252222;
                    position: relative;
                    top: 18px;
                    border: 1px solid lightgray;
                    font-size: 14px;
                    width: 88%;
                }

                .DPrint__title {
                    padding-top: 5px;
                    color: #61D751;
                    background: #252222;
                    position: relative;
                    top: -18px;
                    width: 170px;
                    height: 26px;
                    text-align: center;
                    border: 1px solid lightgray;
                    font-size: 16px;
                }
            </style>
            <?php foreach($param_list as $param): ?>
                <div class="DPrint">
                    <div class="DPrint__title">Debug Print - <?= gettype($param) ?></div>
                    <pre style="color: #fff;"><?= htmlspecialchars( print_r($param, true)) ?></pre>
                </div>
            <?php endforeach;
        }
    }
}

if ( ! function_exists('ddump')) {
    function ddump( $values ) {
        call_user_func_array('dprint', func_get_args());
        die(1);
    }
}
