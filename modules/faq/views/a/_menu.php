<?php
$action = $this->context->action->id;
?>
<?php if(IS_ROOT) : ?>
<ul class="nav nav-pills">
    <li <?= ($action === 'index') ? 'class="active"' : '' ?>>
        <a href="<?= $this->context->getReturnUrl('/admin/faq') ?>">
            <?php if($action === 'edit') : ?>
                <i class="glyphicon glyphicon-chevron-left font-12"></i>
            <?php endif; ?>
            <?= Yii::t('easyii', 'List') ?>
        </a>
    </li>
    <li <?= ($action === 'create') ? 'class="active"' : '' ?>><a href="/admin/faq/a/create"><?= Yii::t('easyii/faq', 'Create entry') ?></a></li>
</ul>
<br/>
<?php elseif($action === 'edit') : ?>
    <ul class="nav nav-pills">
        <li>
            <a href="<?= $this->context->getReturnUrl('/admin/faq')?>">
                <i class="glyphicon glyphicon-chevron-left font-12"></i>
                <?= Yii::t('easyii/faq', 'FAQ') ?>
            </a>
        </li>
    </ul>
    <br/>
<?php endif; ?>
