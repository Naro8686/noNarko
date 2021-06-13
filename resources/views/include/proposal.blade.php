<div class="proposal bg-blue cross-block @isset($class) {{$class}} @endisset" data-count-cross="4">
    <div class="ellipse-block" data-count-ellipse="70"></div>
    <div class="d-flex justify-content-between">
        <div class="mt-lg-5 w-100">
            <h1>Оставить заявку</h1>
            <span>АНОНИМНО</span>
            <form class="d-flex">
                <label>
                    <input type="tel" placeholder="Номер телефона" name="">
                </label>
                <button type="submit" class="appButton appButton-bold">отправить</button>
            </form>
        </div>
        <img class="d-none" src="{{asset('img/dummy-image-350x250.gif')}}"
             data-src="{{asset('img/items/top-view-vintage-telephone-receivers-with-cord.png')}}"
             alt="telephone-receivers">
    </div>
</div>
