<header id="header" class="bg-blinked">
    <?php
        include "src/page-elements/site-logo.php";
    ?>
    <div></div>

    <a href="./login.php" class="btn btn-light header-btn__log-in">
        Вход
    </a>
    <a href="./register.php" class="btn btn-light header-btn__sign-in">
        Регистрация
    </a>
    <div class="header__content">
        <span class="H_H">Становись</span>
        <div class="bracket-bg" style="width: 0"></div>
        <div style="grid-column: span 2">
            <span class="H_H inclined">
                <a class="text-white" style="background-color: #D0082C">{JAVA}</a>-разработчиком
            </span>
            <br>
            <div class="H_H" style="padding-left: 6.5ch">вместе с нами</div>
        </div>
        <div class=plus-bg>

        </div>
        <div style="width: 80%">
            <?php 
                if ($this->getPageName() == 'main') {
                    echo "
                        <div style='line-height: 0;'>
                            <span class='buy-course'>
                                Получи классную востребованную профессию и зарабатывай  дома 
                                в удобное время
                                
                            </span>
                        </div>
                        <div style='width: 50% !important;text-align:center;'>
                            <a class='btn btn-primary back-primary border-quarter' style='--bs-btn-font-size: 10pt;' onclick='scrollToHeaderRef(PricePolicy)'>
                                Начать учится
                            </a>            
                        </div>";
                }
            ?>
        </div>
    </div>
    <?php 
        if ($this->getPageName() == 'main') {
            echo "
            <div class='useful-refs' >
                <button class='header-ref header-ref-about' onclick='scrollToHeaderRef(AboutEducation)'>Об обучении</button>
                <button class='header-ref header-ref-advantages' onclick='scrollToHeaderRef(Advantages)'>Преимущества</button>
                <button class='header-ref header-ref-reviews' onclick='scrollToHeaderRef(Reviews)'>Отзывы</button>
                <button class='header-ref header-ref-pricing' onclick='scrollToHeaderRef(PricePolicy)'>Ценовая политика</button>
            </div>";
        }
    ?>
</header>
