<div class="p-main-header">
    <div class="p-title ">
        <h1 class="p-title-value">
            <?= \Base\BaseApp::phrase('edit_type', ['type' => "taxe"]) ?>
        </h1>
    </div>
</div>
<div class="block-formRow block-form">
    <div class="block-form-inner">
        <form action="<?= $app->buildLink('admin:sales-tax/save', $params->country) ?>"  method="post" class="form-submit-ajax">
            <dl class="formRow">
                <dt>
                    <div class="block-form-label">
                        <label for="title"><?=  \Base\BaseApp::phrase('country:') ?></label>
                    </div>
                </dt>
                <dd>
                    <?= $params->country->name ?>
                </dd>
            </dl>
            <dl class="formRow">
                <dt>
                    <div class="block-form-label">
                        <label for="title"><?=  \Base\BaseApp::phrase('sales_tax_rate:') ?></label>
                    </div>
                </dt>
                <dd>
                    <?= $form->getInputNumber('sales_tax_rate', $params->country->sales_tax_rate , true, 0.001, -0.001) ?>
                </dd>
            </dl>
            <div class="p-submit">
                <button type="submit" name="submit" value="1" class="button"><i class="fas fa-save fa-space-1x"></i> <?=  \Base\BaseApp::phrase('save') ?></button>
            </div>
        </form>
    </div>
</div>