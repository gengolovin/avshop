<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Список брендов товара
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Список брендов</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Наименование</th>
                                <th>Алиас</th>
                                <th>Фото</th>
                                <th>Описание</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($brands  as $brand): ?>

                                <tr>
                                    <td><?=$brand['id'];?></td>
                                    <td><?=$brand['title'];?></td>
                                    <td><?=$brand['alias'];?></td>
                                    <td><img id="foto-product" src="<?=PATH;?>/images/<?=$brand['img'];?>"></td>
                                    <td><?=$brand['description'];?></td>
                                    <td><a href="<?=ADMIN;?>/brand/brand-edit?id=<?=$brand['id'];?>"><i class="fa fa-fw fa-pencil"></i></a><a
                                            class="delete" href="<?=ADMIN;?>/brand/delete?id=<?=$brand['id'];?>"><i class="fa fa-fw fa-close text-danger"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <p>(<?=count($orders);?> заказа(ов) из <?=$count;?>)</p>
                        <?php if($pagination->countPages > 1): ?>
                            <?=$pagination;?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->

