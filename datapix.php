<?php
$json_response = array(
    'qrcode' => '00020126630014br.gov.bcb.pix0111819974848040226Pagamento do pedido 1234565204000053039865406100.005802BR5927jonas airam da silva bonifa6006RECIFE62120508WDEV12346304B556',
    'qrcode64' => 'em andamento',
    'txid' => '123txidMocado456'
);

echo stripslashes(json_encode($json_response)); 
