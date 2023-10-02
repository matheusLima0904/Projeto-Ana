<?php
if (function_exists('curl_init')) {
    echo 'cURL está habilitado no PHP.';
} else {
    echo 'cURL não está habilitado no PHP.';
}
?>
<?php
$webhookUrl = 'https://discord.com/api/webhooks/1158129840671694938/WuunETGNaVUW4LtBqkUy5_wwhoGuRL45pDd5FCOyOhvuPgRQf2qO-69W8IvKvwVyb24s';

$data = array(
    'content' => 'Novo Cliente:',
    'embeds' => array(
        array(
            'title' => 'Detalhes do Cliente',
            'fields' => array(
                array(
                    'name' => 'Nome',
                    'value' => $_POST['nome'],
                ),
                array(
                    'name' => 'Sobrenome',
                    'value' => $_POST['sobrenome'],
                ),
                array(
                    'name' => 'Telefone',
                    'value' => $_POST['telefone'],
                ),
                array(
                    'name' => 'Bairro',
                    'value' => $_POST['bairro'],
                ),
                array(
                    'name' => 'Endereço',
                    'value' => $_POST['endereco'],
                ),
                array(
                    'name' => 'Numero da Residencia',
                    'value' => $_POST['numero'],
                ),
                array(
                    'name' => 'Data',
                    'value' => $_POST['data'],
                ),
                array(
                    'name' => 'Horario',
                    'value' => $_POST['horario'],
                ),
                array(
                    'name' => 'Observaçao do Cliente',
                    'value' => $_POST['observacoes'],
                ),
                array(
                    'name' => 'Forma de Pagamento',
                    'value' => $_POST['pagamento'],
                ),
            ),
        ),
    ),
);

$dataString = json_encode($data);

$ch = curl_init($webhookUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($dataString),
));

$result = curl_exec($ch);
curl_close($ch);

// Verifique a resposta do Discord, se necessário
if ($result === false) {
    echo 'Erro ao enviar o registro.';
} else {
    echo 'Registro enviado com sucesso!';
}
?>
