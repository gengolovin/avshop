<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="<?= PATH ?>">Главная</a></li>
                <li><?=$info_title;?></li>

            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--prdt-starts-->
<div class="prdt">
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-12">
                <div class="product-one login">
                    <?php if($alias == 'orders'):?>
                    <div class="register-top heading">
                        <h2><img id="img-order" src="<?=PATH;?>/images/order.jpg"> <?=$info_title;?></h2>
                    </div>
                    <div class="information-block">
                        <div class="col-md-6 account-left">
                            <h4>Как разместить заказ:</h4>
                            <ol>
                                <li type="disc">Выберите необходимые товары, нажмите кнопку «В корзину»</li>
                                <li type="disc">Перейдите в раздел «Корзина»</li>
                                <li type="disc">Нажмите кнопку «Оформить заказ»</li>

                            </ol>
                            <h4>Если вы не авторизованы на сайте, то:</h4>
                            <ol>
                                <li type="disc">Выберите способ оформления заказа – через существующий аккаунт, через регистрацию нового аккаунта, без регистрации</li>
                            </ol>
                        </div>
                        <div class="col-md-6 account-left">
                            <h4>Если Вы зарегистрируете новый аккаунт или продолжите без регистрации, то:</h4>
                            <ol>
                                <li type="disc" >Заполните необходимые поля в форме</li>
                                <li type="disc">Выберите подходящий для Вас способ доставки:</li>
                                   <ol>
                                        <li type="circle">Через Представителя</li>
                                        <li type="circle">Самовывоз из пункта Выдачи</li>
                                        <li type="circle">Почта России</li>
                                   </ol>
                                <li type="disc">Выберите подходящий способ оплаты</li>
                                <li type="disc">Подтвердите заказ</li>
                            </ol>
                        </div>
                    </div>
                    <?php endif;?>
                    <?php if($alias == 'pay'):?>
                        <div class="register-top heading">
                            <h2><img id="img-order" src="<?=PATH;?>/images/money.jpg"> <?=$info_title;?></h2>
                        </div>
                        <div class="information-block">
                            <div class="col-md-12 account-left">
                                <p>Оплатите покупку любым удобным для вас способом: на сайте или при получении (если выбранный Пункт Выдачи поддерживает эту опцию).
                                   Если Вы выбрали доставку заказа через Представителя, детали оплаты уточните у Вашего Представителя.</p>
                                <p>Типы оплаты:</p>
                                <h4>Наличный расчет</h4>
                                <ol>
                                    <li type="disc">Заказ оплачивается наличными при получении в пункте выдачи</li>
                                    <li type="disc">Заказ оплачивается наличными при получении у Представителя</li>
                                </ol>
                                <h4>Банковской картой при получении</h4>
                                <ol>
                                    <li type="disc">Принимаются банковские карты МИР, Visa или MasterCard</li>
                                    <li type="disc">Заказ оплачивается банковской картой путем перевода средств на счет Представителя</li>
                                </ol>
                                <h4>Банковской картой на сайте</h4>
                                <ol>
                                    <li type="disc">Принимаются банковские карты МИР, Visa или MasterCard</li>
                                    <li type="disc">Заказ оплачивается банковской картой на последнем шаге оформления заказа на сайте</li>
                                </ol>
                            </div>

                        </div>
                    <?php endif;?>
                    <?php if($alias == 'delivery'):?>
                        <div class="register-top heading">
                            <h2><img id="img-order" src="<?=PATH;?>/images/box-hands.jpg"> <?=$info_title;?></h2>
                        </div>
                        <div class="information-block">
                            <div class="col-md-12 account-left">
                                <p>Для Вашего удобства мы предлагаем Вам разные способы получения заказов сделанных на сайте <strong>cosmstore.ru</strong>:</p>
                                <ol>
                                    <li type="disc">Доставка через Представителя AVON</li>
                                        <ol>
                                            <li type="circle">Доставка через Представителя бесплатна</li>
                                            <li type="circle">Время доставки обычно составляет 2-3 рабочих дней</li>
                                            <li type="circle">Ваш Представитель свяжется с вами, чтобы уточнить все детали и договориться об удобном для Вас времени и месте доставки</li>
                                            <li type="circle">Вы можете в любое время связаться с вашим Представителем с вопросами о вашем заказе</li>
                                            <li type="circle">Представитель окажет Вам помощь с подбором продуктов, ответит на вопросы по специальным предложениям и акциям, действующим в текущем каталоге</li>
                                        </ol>
                                    <li type="disc">Доставка Почтой России</li>
                                        <ol>
                                            <li type="circle">Заказ отправляется ценной посылкой ( с наложенным платежом либо с предоплатой стоимости товара и доставки) через почтовую службу «Почта России» или "ЕМС Почта". Для этого вам необходимо полностью оформить свой заказ, указав следующие данные: фамилию, имя, отчество получателя посылки, полный почтовый адрес (индекс, регион, населенный пункт, улицу, номер дома и квартиры, контактный телефон.</li>
                                            <li type="circle">Стоимость доставки Почтой России рассчитывается автоматически на сайте при оформлении заказа строго по тарифам Почты России на основании веса, габаритов и объявленной ценности посылки. </li>
                                            <li type="circle">После отправки посылки Вам сообщается трек-номер отправления для отслеживания посылки через сайт почты России <a href="https://www.pochta.ru/tracking">https://www.pochta.ru/tracking</a></li>
                                        </ol>
                                </ol>
                            </div>

                        </div>
                    <?php endif;?>

                </div>
            </div>
        </div>
    </div>
</div>
<!--product-end-->