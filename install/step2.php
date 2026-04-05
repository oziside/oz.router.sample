<?php
global $APPLICATION;
$APPLICATION->SetTitle('Установка модуля API Router Sample');
$exeption = $APPLICATION->GetException();

$message = [
    'TYPE'    => 'OK',
    'MESSAGE' => 'Модуль успешно установлен',
];

if($exeption)
{
    $message = [
        'TYPE'    => 'ERROR',
        'MESSAGE' => 'Ошибка установки',
        'DETAILS' => $exeption->GetString(),
    ];
}

CAdminMessage::ShowMessage($message);
?>

<form action="<?=$APPLICATION->GetCurPage();?>">
    <input type="hidden" name="lang" value="<?=LANGUAGE_ID?>">
    <input type="submit" name="" value="Вернуться">
</form>
