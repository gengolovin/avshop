<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Редактирование бренда: <?= $brand->title ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= ADMIN ?>/"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?= ADMIN ?>/brand">Список брендов</a></li>
        <li class="active">Редактирование</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form method="post" action="<?= ADMIN ?>/brand/brand-edit" role="form" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование бренда</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование валюты" required value="<?= h($brand->title) ?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="code">Алиас</label>
                            <input type="text" name="alias" class="form-control" id="alias" placeholder="Алиас" required value="<?= h($brand->alias) ?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="symbol_left">Описание</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Описание" value="<?= h($brand->description) ?>">
                        </div>

                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?= $brand->id ?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

