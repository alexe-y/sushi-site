<!DOCTYPE html>
<html>
<head>
	<title>Deep</title>
	<link href="Views/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="Views/img/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	
<header>
    <div class="container">
        <div class="header-wrap">
            <div class="logo header-item"><img src="Views/img/logo-light.png" alt=""></div>
            <div class="place header-item"><i class="fas fa-map-marker-alt"></i>&nbsp;Житомир</div>
            <div class="tel header-item"><i class="fas fa-phone"></i>&nbsp;(098) 765 43 21</div>
            <div class="basket header-item" id="basc"><i class="fas fa-shopping-basket"></i><span class="jqcart-total-cnt"> x пусто</span></div>
        </div>
    </div>
</header>
<div class="pic-wrapper">
    <div class="pic-page">
        <a href="/" id="pic-logo"></a>

        <div class="pic-headers">
            <h1 class="header_big">Пожалуй, лучшие суши в городе</h1>
            <h2 class="header_small">С доставкой домой</h2>
        </div>
        
        <a href="#category" class="go-menu">Menu</a>
    </div>
</div>
           


<section id="features">
    <div class="container">
       
        <div class="features-wrap">
            
                <div class="feature-item">
                    <div class="feature-icon"><i class="fab fa-bitcoin"></i></div>
                    <div class="feature-content">
                        <h4 class="feature-title">Легко оплатить</h4>
                        <p class="feature-text">Оплатите при получении курьеру наличными или картой</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon"><i class="far fa-clock"></i></div>
                    <div class="feature-content">
                        <h4 class="feature-title">Свежайший закрут</h4>
                        <p class="feature-text">Крутим роллы только из свежих ингридиентов</p>
                    </div>
                </div>
    
            
                <div class="feature-item">
                    <div class="feature-icon"><i class="fab fa-apple"></i></i></div>
                    <div class="feature-content">
                        <h4 class="feature-title">Быстро доставим!</h4>
                        <p class="feature-text">Вжух, и через 40 минут уже наслаждаетесь вкуснейшим роллом</p>
                    </div>
                </div>
            
        </div>
        
    </div>
</section>
    
    
<section id="category">
    <div class="container">
    
    <div id="cat_firm" class="menu-category">
        <div class="menu-category-title">
            <a href="#cat_firm">
                <div class="bg-image"></div>
                <h2 class="title">Фирменные роллы</h2>
            </a>
        </div>
        <div  class=" burgers ">
        <?if(is_array($productList)):?>
            <?php foreach($productList as $product):?>
                <?if($product['cat_id']==29):?>

                    <div class="burgers-item">
                        <img width="288" height="192" src="Views/img/<?echo $product['image_url']?>" alt="<?echo $product['title']?>" >
                        <h6 class="item-title">
                            <a href="#"><?echo $product['title']?></a>
                        </h6>
                        <p class="item-ingr"><?echo $product['description']?> <?echo $product['weight']?>г.</p>
                        <div class="item-price">
                            <div class="price"><?echo $product['price']?> грн.</div>
                            <div class="btn-cont">
                                <button class="btn add_item" data-id="<?echo $product['id']?>" data-title="<?echo $product['title']?>" data-price="<?echo $product['price']?>"><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>
                <? endif;?>
            <? endforeach;?>
        <?endif;?>
    </div>
    </div>
    
    <div id="cat_dragons" class="menu-category">
        <div class="menu-category-title">
            <a href="#cat_dragons">
            <div class="bg-image">
                <!-- <img src="http://themebeer.com/soup/wp-content/uploads/2017/05/menu-title-burgers-1.jpg" alt=""> -->
            </div>
            <h2 class="title">Драконы</h2>
        </a>
        </div>
        <div  class=" burgers ">
        <?if(is_array($productList)):?>
            <?php foreach($productList as $product):?>
                <?if($product['cat_id']==30):?>

                    <div class="burgers-item">
                        <img width="288" height="192" src="Views/img/<?echo $product['image_url']?>" alt="<?echo $product['title']?>" >
                        <h6 class="item-title">
                            <a href="#"><?echo $product['title']?></a>
                        </h6>
                        <p class="item-ingr"><?echo $product['description']?> <?echo $product['weight']?>г.</p>
                        <div class="item-price">
                            <div class="price"><?echo $product['price']?> грн.</div>
                            <div class="btn-cont">
                                <button class="btn add_item" data-id="<?echo $product['id']?>" data-title="<?echo $product['title']?>" data-price="<?echo $product['price']?>"><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>
                <? endif;?>
            <? endforeach;?>
        <?endif;?>
    </div>
    </div>
    
    
    <div id="cat_sets" class="menu-category">
        <div class="menu-category-title">
            <a href="#cat_sets">
                <div class="bg-image"></div>
                <h2 class="title">Сеты</h2>
            </a>
        </div>
        <div  class=" burgers ">
        <?if(is_array($productList)):?>
            <?php foreach($productList as $product):?>
                <?if($product['cat_id']==27):?>

                    <div class="burgers-item">
                        <img width="288" height="192" src="Views/img/<?echo $product['image_url']?>" alt="<?echo $product['title']?>" >
                        <h6 class="item-title">
                            <a href="#"><?echo $product['title']?></a>
                        </h6>
                        <p class="item-ingr"><?echo $product['description']?> <?echo $product['weight']?>г.</p>
                        <div class="item-price">
                            <div class="price"><?echo $product['price']?> грн.</div>
                            <div class="btn-cont">
                                <button class="btn add_item" data-id="<?echo $product['id']?>" data-title="<?echo $product['title']?>" data-price="<?echo $product['price']?>"><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>
                <? endif;?>
            <? endforeach;?>
        <?endif;?>
    </div>
    </div>
    
    <div id="sushi_1" class="menu-category">
        <div class="menu-category-title">
            <a href="#sushi_1">
                <div class="bg-image"></div>
                <h2 class="title">Роллы</h2>
            </a>
        </div>
        <div  class=" burgers ">
        <?if(is_array($productList)):?>
            <?php foreach($productList as $product):?>
                <?if($product['cat_id']==26):?>

                    <div class="burgers-item">
                        <img width="288" height="192" src="Views/img/<?echo $product['image_url']?>" alt="<?echo $product['title']?>" >
                        <h6 class="item-title">
                            <a href="#"><?echo $product['title']?></a>
                        </h6>
                        <p class="item-ingr"><?echo $product['description']?> <?echo $product['weight']?>г.</p>
                        <div class="item-price">
                            <div class="price"><?echo $product['price']?> грн.</div>
                            <div class="btn-cont">
                                <button class="btn add_item" data-id="<?echo $product['id']?>" data-title="<?echo $product['title']?>" data-price="<?echo $product['price']?>"><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>
                <? endif;?>
            <? endforeach;?>
        <?endif;?>
    </div>
    </div>

    <div id="cat_sushi" class="menu-category">
        <div class="menu-category-title">
            <a href="#cat_sushi">
                <div class="bg-image"></div>
                <h2 class="title">Суши</h2>
            </a>
        </div>
        <div  class=" burgers ">
        <?if(is_array($productList)):?>
            <?php foreach($productList as $product):?>
                <?if($product['cat_id']==25):?>

                    <div class="burgers-item">
                        <img width="288" height="192" src="Views/img/<?echo $product['image_url']?>" alt="<?echo $product['title']?>" >
                        <h6 class="item-title">
                            <a href="#"><?echo $product['title']?></a>
                        </h6>
                        <p class="item-ingr"><?echo $product['description']?> <?echo $product['weight']?>г.</p>
                        <div class="item-price">
                            <div class="price"><?echo $product['price']?> грн.</div>
                            <div class="btn-cont">
                                <button class="btn add_item" data-id="<?echo $product['id']?>" data-title="<?echo $product['title']?>" data-price="<?echo $product['price']?>"><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>
                <? endif;?>
            <? endforeach;?>
        <?endif;?>
    </div>
    </div>

        <div id="cat_adds" class="menu-category">
            <div class="menu-category-title">
                <a href="#cat_adds">
                    <div class="bg-image"></div>
                    <h2 class="title">Добавки</h2>
                </a>
            </div>
            <div  class=" burgers ">
                <?if(is_array($productList)):?>
                    <?php foreach($productList as $product):?>
                        <?if($product['cat_id']==0):?>

                            <div class="burgers-item">
                                <img width="288" height="192" src="Views/img/<?echo $product['image_url']?>" alt="<?echo $product['title']?>" >
                                <h6 class="item-title">
                                    <a href="#"><?echo $product['title']?></a>
                                </h6>
                                <p class="item-ingr"><?echo $product['description']?> <?echo $product['weight']?>г.</p>
                                <div class="item-price">
                                    <div class="price"><?echo $product['price']?> грн.</div>
                                    <div class="btn-cont">
                                        <button class="btn add_item" data-id="<?echo $product['id']?>" data-title="<?echo $product['title']?>" data-price="<?echo $product['price']?>"><span>В корзину</span></button>
                                    </div>
                                </div>
                            </div>
                        <? endif;?>
                    <? endforeach;?>
                <?endif;?>
            </div>
        </div>
<!--    <div id="drinks_1" class="menu-category">-->
<!--        <div class="menu-category-title">-->
<!--            <a href="#drinks_1">-->
<!--                <div class="bg-image"></div>-->
<!--                <h2 class="title">Drinks</h2>-->
<!--            </a>-->
<!--        </div>-->
<!--    -->
<!--    <div  class=" burgers ">-->
<!--        <div class="burgers-item">-->
<!--            <img width="288" height="192" src="http://themebeer.com/soup/wp-content/uploads/2017/06/product-sushi-1-288x192.jpg" alt="" >-->
<!--            <h6 class="item-title">-->
<!--                <a href="#">Nigiri-sushi</a>-->
<!--            </h6>-->
<!--            <p class="item-ingr">Beef, cheese, fries, onion, potato</p>-->
<!--            <div class="item-price">-->
<!--                <div class="price">from $5.00</div>-->
<!--                <div class="btn-cont">-->
<!--                    <button class="btn"><span>Add to cart</span></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="burgers-item">-->
<!--            <img width="288" height="192" src="http://themebeer.com/soup/wp-content/uploads/2017/06/product-sushi-1-288x192.jpg" alt="" >-->
<!--            <h6 class="item-title">-->
<!--                <a href="#">Nigiri-sushi</a>-->
<!--            </h6>-->
<!--            <p class="item-ingr">Beef, cheese, fries, onion, potato</p>-->
<!--            <div class="item-price">-->
<!--                <div class="price">from $5.00</div>-->
<!--                <div class="btn-cont">-->
<!--                    <button class="btn"><span>Add to cart</span></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="burgers-item">-->
<!--            <img width="288" height="192" src="http://themebeer.com/soup/wp-content/uploads/2017/06/product-sushi-1-288x192.jpg" alt="" >-->
<!--            <h6 class="item-title">-->
<!--                <a href="#">Nigiri-sushi</a>-->
<!--            </h6>-->
<!--            <p class="item-ingr">Beef, cheese, fries, onion, potato</p>-->
<!--            <div class="item-price">-->
<!--                <div class="price">from $5.00</div>-->
<!--                <div class="btn-cont">-->
<!--                    <button class="btn"><span>Add to cart</span></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="burgers-item">-->
<!--            <img width="288" height="192" src="http://themebeer.com/soup/wp-content/uploads/2017/06/product-sushi-1-288x192.jpg" alt="" >-->
<!--            <h6 class="item-title">-->
<!--                <a href="#">Nigiri-sushi</a>-->
<!--            </h6>-->
<!--            <p class="item-ingr">Beef, cheese, fries, onion, potato</p>-->
<!--            <div class="item-price">-->
<!--                <div class="price">from $5.00</div>-->
<!--                <div class="btn-cont">-->
<!--                    <button class="btn"><span>Add to cart</span></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="burgers-item">-->
<!--            <img width="288" height="192" src="http://themebeer.com/soup/wp-content/uploads/2017/06/product-sushi-1-288x192.jpg" alt="" >-->
<!--            <h6 class="item-title">-->
<!--                <a href="#">Nigiri-sushi</a>-->
<!--            </h6>-->
<!--            <p class="item-ingr">Beef, cheese, fries, onion, potato</p>-->
<!--            <div class="item-price">-->
<!--                <div class="price">from $5.00</div>-->
<!--                <div class="btn-cont">-->
<!--                    <button class="btn"><span>Add to cart</span></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="burgers-item">-->
<!--            <img width="288" height="192" src="http://themebeer.com/soup/wp-content/uploads/2017/06/product-sushi-1-288x192.jpg" alt="" >-->
<!--            <h6 class="item-title">-->
<!--                <a href="#">Nigiri-sushi</a>-->
<!--            </h6>-->
<!--            <p class="item-ingr">Beef, cheese, fries, onion, potato</p>-->
<!--            <div class="item-price">-->
<!--                <div class="price">from $5.00</div>-->
<!--                <div class="btn-cont">-->
<!--                    <button class="btn"><span>Add to cart</span></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    -->
<!--    </div>-->
<!--    </div>-->
    </div>
</section>
    
    
    
    <footer>
       <div class="container">

        <div class="footer-wrap">
            <div class="footer-item">
                <p class="copy">Copyright Deep 2017 ©. </p>
            </div>
            <div class="footer-item">
                <a href="#features">
                    <img src="Views/img/logo-light.png" alt="logo">
                </a>
            </div>
            <div class="footer-item">
                <a href="#" class="inst"><i class="fab fa-instagram"></i></a>     
            </div>
        </div>
           
       </div>
    </footer>


    <div id="modal_form">
        <p class="modal-title">Корзина</p>
            <div class="containerTovar">
                <div class="tovar-1 tovar">
                    <div class="tovar-num">1.</div>
                    <div class="tovar-name">fsdgfdg</div>
                    <div class="tovar-price"> 5454</div>
                    <div class="tover-cencel">x</div>
                </div>
                
                <div class="tovar-2 tovar">
                    <div class="tovar-num">2.</div>
                    <div class="tovar-name">sdgfdsg</div>
                    <div class="tovar-price">87</div>
                    <div class="tover-cencel">x</div>
                </div>

                <div class="tovar-3 tovar">
                    <div class="tovar-num">3.</div>
                    <div class="tovar-name">dsgethteytey</div>
                    <div class="tovar-price">658</div>
                    <div class="tover-cencel">x</div>
                </div>
            </div>

            <div class="total-price">
                <p>Total: <span>$12</span></p>
            </div>

            <button type="button" class="btn btn-primary" onclick="window.location = '/order'" name="button">Оформить заказ</button>

            <span id="modal_close"><i class="fas fa-times"></i></span>
        </div>
        <div id="overlay"></div>

    <script src="Views/js/jquery-1.11.3.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="Views/js/main.js"></script>
    <script src="Views/js/jqcart.min.js"></script>
</body>
</html>