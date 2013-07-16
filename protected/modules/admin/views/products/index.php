<?php
$this->pageTitle = Yii::app()->name . ' - ' . Yii::t('views.products.index', 'Products');
$this->breadcrumbs = array(
    Yii::t('views.products.index', 'Products'),
);
?>

<div class="row-fluid">
    <div class="span9"><h1><i class="icon-cog"></i>&nbsp;<?php echo Yii::t('views.products.index', 'Products'); ?></h1></div>
    <div class="span2">
        <div class="btn-group">
            <button class="btn btn-success">Insert</button>
            <button class="btn btn-success">Copy</button>            
            <button class="btn btn-danger">Delete</button>
        </div>
    </div>
</div>

<br />

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style="width: 1px;">&nbsp;</th>
            <th style="width: 50px;"><?php echo Yii::t('views.products.index', 'Image'); ?></th>
            <th><?php echo Yii::t('views.products.index', 'Product Name'); ?></th>
            <th style="width: 80px;"><?php echo Yii::t('views.products.index', 'Model'); ?></th>
            <th style="width: 80px;"><?php echo Yii::t('views.products.index', 'Price'); ?></th>
            <th style="width: 80px;"><?php echo Yii::t('views.products.index', 'Quantity'); ?></th>
            <th style="width: 80px;"><?php echo Yii::t('views.products.index', 'Status'); ?></th>
            <th style="width: 80px;"><?php echo Yii::t('views.products.index', 'Action'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo CHtml::checkBox('selected[]'); ?></td>
                <td><img src="<?php echo $product->getImageWithSize(40, 40); ?>" /></td>
                <td><?php echo $product->description->name; ?></td>
                <td><?php echo $product->model; ?></td>
                <td><?php echo $product->price; ?></td>
                <td><?php echo $product->quantity; ?></td>
                <td><?php echo $product->status; ?></td>
                <td><button class="btn btn-mini" type="button">Edit</button></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>