<?php

use Util\ConstantesGenericasUtil;
use Util\JsonUtil;
use Util\RotasUtil;
use Validator\RequestValidator;

include "bootstrap.php";

 try {
    $RequestValidator = new RequestValidator(RotasUtil::getRotas());
    $retorno = $RequestValidator->processarRequest();

    $JsonUtil =  new JsonUtil();
    $JsonUtil->processarArrayParaRetornar($retorno);

} catch (Exception $exception) {
    echo json_encode([
        ConstantesGenericasUtil::TIPO => ConstantesGenericasUtil::TIPO_ERRO,
        ConstantesGenericasUtil::RESPOSTA => mb_convert_encoding($exception->getMessage(), "utf-8", mb_list_encodings())
    ]);
    exit;
}