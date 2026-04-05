<?php
global $APPLICATION;
$APPLICATION->SetTitle('Установка модуля API Router Sample');


$context = $GLOBALS['oz_router_sample_install_context'] ?? [
    'status' => 'error',
    'message' => 'Не удалось подготовить данные для установки модуля.',
];
?>

<?php if (($context['status'] ?? 'error') !== 'ok'): ?>
    <?php
    CAdminMessage::ShowMessage([
        'TYPE'    => 'ERROR',
        'MESSAGE' => 'Подготовка к установке',
        'DETAILS' => $context['message'] ?? 'Не удалось подготовить данные для установки модуля.'
    ]);
    ?>
    <form action="<?= $APPLICATION->GetCurPage() ?>">
        <input type="hidden" name="lang" value="<?= LANGUAGE_ID ?>">
        <input type="submit" name="" value="Вернуться">
    </form>
<?php else: ?>

    <?php
    $catalogs = $context['catalogs'];
    $routesConfigPath = '/local/modules/oz.router.sample/config/routes/api.php';
    $diConfigPath = '/local/modules/oz.router.sample/config/di.php';
    ?>

    <form action="<?= $APPLICATION->GetCurPage() ?>" method="post">
        <?= bitrix_sessid_post() ?>
        <input type="hidden" name="lang" value="<?= LANGUAGE_ID ?>">
        <input type="hidden" name="id" value="oz.router.sample">
        <input type="hidden" name="install" value="Y">
        <input type="hidden" name="step" value="2">

        <table class="adm-detail-content-table edit-table" width="100%">
            <tr>
                <td>
                    <b>Выберите торговый каталог.</b><br>
                    Для выбранного инфоблока будет установлен API_CODE "catalog":<br><br>

                    <select name="catalog_iblock_id">
                        <?php foreach ($catalogs as $key => $catalog): ?>
                            <option value="<?=$catalog['ID'];?>"<?=$key == 0 ? ' selected' : '' ?>>
                                [<?=$catalog['ID'];?>] <?=$catalog['NAME'];?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </table>

        <hr>
        <div style="margin-top: 8px;">
            <b>Во время установки будет выполнено:</b>
            <div>
                <div>1. Для выбранного <b>торгового каталога</b> будет установлен API_CODE "catalog".</div>
                <div>2. Для <b>oz.router</b> будет сохранен файл маршрутов: "<?=$routesConfigPath;?>".</div>
                <div>3. Для <b>oz.router</b> будет сохранен файл DI-конфигурации: "<?=$diConfigPath;?>".</div>
            </div>
        </div> 
        <br>
        <input type="submit" name="inst" value="Установить">
    </form>
<?php endif; ?>
