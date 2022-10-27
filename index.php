<?php

$dbHost = "localhost";
$user = "root";
$pass = "root";
$dbName = "nailsalon";
$mysqli = mysqli_connect($dbHost, $user, $pass, $dbName);
if ($mysqli == false) {
    echo ("Ошибка подключения к БД!");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./dist/output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Roboto';" class="bg-[#FAF8F3]" id="body">
    <div class="container">
        <header class="w-full h-[80px] flex items-center fixed top-0 left-0 z-10 bg-[#FAF8F3] px-3 lg:px-0">
            <div class="flex items-center justify-between w-full h-full">
                <div class="text-4xl lg:text-[60px] lg:leading-[60px] lg:ml-[100px] flex items-center cursor-pointer" onclick="scrollToTop()">Beauty Nails</div>
                <div class="text-white hidden lg:flex justify-evenly text-[26px] leading-[36px] 
            items-center bg-[#4D3664] lg:w-1/2 2xl:w-[1000px] h-full">
                    <a href="#services">Услуги</a>
                    <a href="#portfolio">Портфолио</a>
                    <a href="#review">Отзывы</a>
                    <a href="#contacts">Контакты</a>
                </div>
                <div class="lg:hidden rounded-full bg-[#4D3664] h-fit w-fit text-white px-4 py-1 text-center 
            text-lg cursor-pointer" onclick="toggleModal('modal_add')">Записаться</div>
            </div>
        </header>
    </div>
    <div class="container max-w-[1920px] px-3 lg:px-0">
        <div class="mt-[80px] relative flex justify-center 2xl:justify-start 2xl:h-[1397px]">
            <div class="lg:ml-[100px] mt-12 lg:mt-[135px] flex flex-col max-w-[600px]">
                <div >
                    <img class="rounded-full" src="assets/Master.png" alt="">
                </div>
                <div class="mt-[20px] text-2xl lg:text-[40px]">ВАШ МАСТЕР</div>
                <div class="mt-[20px] text-xl lg:text-[28px] leading-[32px] text-[#454545]">Брагина София - сертифицированный
                    мастер ногтевого сервиса. <br> <br>
                    Я поделюсь с вами всеми тонкостями наращивания ногтей, подберу качественные материалы
                    и рассмотрю все тенденцииновых дизайнов!
                </div>
                <div class="hidden lg:flex justify-center items-center mt-[30px] rounded-full bg-[#4D3664] text-white w-full lg:h-[80px] py-3 text-center 
                text-xl lg:text-[36px] cursor-pointer" onclick="toggleModal('modal_add')">Записаться</div>
            </div>
            <div class="absolute right-0 hidden 2xl:block">
                <img src="assets/Main.png" alt="">
            </div>
        </div>
    </div>
    <div class="container mx-auto w-full flex flex-col mt-[20px] px-3 lg:px-0" id="services">
        <div class="text-xl lg:text-[32px] text-center">Осуществлю ваши мечты и сделаю самые <br class="lg: hidden"> красивые ноготочки</div>
        <div class="text-3xl lg:text-[50px] mt-4 lg:mt-0 font-bold text-center">Приглашаю вас попробовать мои услуги!</div>
        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-36 gap-12 mt-[20px]">
            <div class="flex flex-col justify-start items-center">
                <img src="assets/ManicurePic.png" alt="">
                <div class="text-center text-[22px] lg:text-[28px] mt-[20px]">Маникюр <br>350 руб.</div>
            </div>
            <div class="flex flex-col justify-start items-center">
                <img src="assets/ManicureGelPic.png" alt="">
                <div class="text-center text-[22px] lg:text-[28px] mt-[20px]">Маникюр с гель покрытием <br> 700 руб.</div>
            </div>
            <div class="flex flex-col justify-start items-center">
                <img src="assets/ManicureGelDesignPic.png" alt="">
                <div class="text-center text-[22px] lg:text-[28px] mt-[20px]">Маникюр с гель покрытием и дизайном <br> от 700 руб.
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <div class="rounded-full bg-[#4D3664] text-white py-1 lg:py-3 px-5 lg:px-10 text-center 
            text-[20px] lg:text-[24px] cursor-pointer" onclick="toggleModal('modal_price')">Смотреть полный прайс
            </div>
        </div>
    </div>
    <div class="container mx-auto w-full flex flex-col mt-[20px] items-center px-3 lg:px-0" id="portfolio">
        <div class="grid grid-cols-1 lg:grid-cols-10 gap-5 lg:w-[1210px]">
            <div class="lg:col-span-6 lg:row-span-2"><img class="w-full h-full" src="assets/PortfolioPic0.png" alt=""></div>
            <div class="lg:col-span-4"><img class="w-full h-full" src="assets/PortfolioPic1.png" alt=""></div>
            <div class="lg:col-span-4"><img class="w-full h-full" src="assets/PortfolioPic2.png" alt=""></div>
            <div class="lg:col-span-4"><img class="w-full h-full" src="assets/PortfolioPic3.png" alt=""></div>
            <div class="lg:col-span-6 lg:row-span-2"><img class="w-full h-full" src="assets/PortfolioPic5.png" alt=""></div>
            <div class="lg:col-span-4"><img class="w-full h-full" src="assets/PortfolioPic4.png" alt=""></div>
        </div>
    </div>
    <div class="container mx-auto mt-[20px] px-3 lg:px-0" id="review">
        <div class="text-2xl lg:text-[32px]">Отзывы клиентов</div>
        <div class="mt-[20px] border-[1.5px] w-full max-w-[400px] border-[#4D3664] bg-[#4D3664]"></div>
        <div class="text-lg lg:text-[24px] lg:w-[1065px] mt-[20px]">София - чудесный мастер по маникюру! Делает все максимально
            аккуратно и качественно. Встретила меня крайне
            гостеприимно, предложила вкуснейший кофе. Так же хочу отметить, что мастер не досаждает надоедливыми
            разговорами и здорово подстраивается под клиента. Все оборудование у неё стерильно и рабочее место очень
            аккуратно. Маникюр носится чудесно, ничего не трескается и не отваливается. Всем советую данного мастера!
        </div>
        <div class="text-[16px] font-bold lg:w-[1065px] text-right mt-[20px] mb-[50px]">А. А. Колесникова</div>
    </div>
    <div class="bg-[#4D3664] w-full py-8 text-white " id="contacts">
        <div class="flex flex-col container mx-auto items-center text-2xl lg:text-[36px]">
            <div class="text-2xl lg:text-[50px] font-bold">Контакты</div>
            <div class="flex flex-col lg:flex-row justify-between items-center w-full my-5 lg:mt-[80px] lg:mb-[50px]">
                <a href="" class="flex-1 text-center">WhatsApp</a>
                <a href="" class="flex-1 text-center">+7 (123) 456-78-90</a>
                <a href="" class="flex-1 text-center">Telegram</a>
            </div>
        </div>
        <div class="max-w-[1040px] h-[250px] lg:h-[450px] mx-auto px-3 lg:px-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4156.732949172833!2d49.668
            1883!3d58.6061794!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43fcf5cb82f5abb7%3A0xddd928f34211948e
            !2z0YPQuy4g0JrQsNGA0LvQsCDQnNCw0YDQutGB0LAsIDU2LCDQmtC40YDQvtCyLCDQmtC40YDQvtCy0YHQutCw0Y8g0
            L7QsdC7LiwgNjEwMDIw!5e0!3m2!1sru!2sru!4v1665769540946!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="hidden fixed z-[150] bg-black bg-opacity-50 h-full w-full top-0 left-0 flex-col justify-center items-center md:p-10" id="modal_back">
        <div class="max-w-[500px] md:h-auto bg-[#FAF8F3] md:rounded-2xl relative hidden" id="modal_add">
            <div class="text-red-700 cursor-pointer text-[24px] absolute top-4 right-4" onclick="toggleModal('modal_add')">X</div>

            <div class="text-[20px] text-center font-bold px-[90px] py-[30px]">Оставьте заявку и мы свяжемся с
                Вами в ближайшее время</div>

            <form action="php/application.php" class="flex flex-col space-y-[30px] items-center mb-[50px]" method="post">
                <input class="mx-auto h-[50px] w-2/3 pl-[10px] rounded-full border-[2px] border-[#4D3664]" type="text" name="name" placeholder="Ваше Имя">
                <input class="mx-auto h-[50px] w-2/3 pl-[10px] rounded-full border-[2px] border-[#4D3664]" type="text" name="telNumber" placeholder="Ваш телефон *">
                <input class="bg-[#4D3664] text-white px-[65px] py-[10px] text-[18px] rounded-full cursor-pointer" type="submit" value="Отправить">
            </form>
        </div>

        <div class="lg:max-h-[1200px] h-full lg:w-3/4 w-full bg-[#FAF8F3] relative hidden overflow-auto" id="modal_price">
            <div class="text-red-700 cursor-pointer text-[24px] absolute top-4 right-4" onclick="toggleModal('modal_price')">X</div>
            <div class="flex flex-col lg:flex-row lg:justify-between">
                <div class="text-4xl lg:text-[60px] px-3 py-5 lg:py-[45px] lg:px-[75px]">Beaty Nails</div>
                <div class="flex flex-col text-left lg:pt-[55px] lg:pb-[35px] lg:px-[150px] px-3 py-5">
                    <div class="text-xl lg:text-[32px] lg:leading-[36px] font-bold">Прайс-лист</div>
                    <div class="text-[18px] lg:leading-[24px] text-[#0F02AA]">действителен с 01.02.2021</div>
                </div>
            </div>
            <div class="w-full lg:px-[75px] px-3 py-5">
                <table>
                    <tbody>
                        <?php
                        $priceList = mysqli_query($mysqli, "SELECT * FROM `price_list`");
                        $priceList = mysqli_fetch_all($priceList);
                        foreach ($priceList as $priceList) {
                        ?>
                            <tr>
                                <td class="text-xl lg:text-[28px] border-[2px]"><?= $priceList[1] ?></td>
                                <td class="text-xl  lg:text-[28px] border-[2px] text-center"><?= $priceList[2] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

<script>
    const toggleModal = (modalInfo) => {
        document.getElementById("modal_back").classList.toggle("hidden")
        document.getElementById("modal_back").classList.toggle("flex")
        modalInfo && document.getElementById(modalInfo).classList.toggle("hidden")
    };

    function scrollToTop() {
        const el = document.getElementById('body');
        el.scrollIntoView();
    }
</script>

</html>