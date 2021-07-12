<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <svg width="29" height="27" viewBox="0 0 29 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="2.70711" y1="1.29289" x2="27.7071" y2="26.2929" stroke="#7F7F7F"
                                  stroke-width="2"/>
                            <line y1="-1" x2="35.3553" y2="-1"
                                  transform="matrix(-0.707107 0.707107 0.707107 0.707107 27 2)" stroke="#7F7F7F"
                                  stroke-width="2"/>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <h1 class="modal-title text-uppercase"></h1>
                <p class="modal-desc"></p>
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group position-relative">
                        <label class="w-100">
                            <input required type="text" class="form-control" placeholder="Ваше имя" name="name">
                        </label>
                    </div>
                    <div class="form-group position-relative">
                        <label class="w-100">
                            <textarea required placeholder="Напишите свой отзыв" class="form-control" name="text"></textarea>
                        </label>
                    </div>
                    <div class="form-group position-relative">
                        <label class="w-100">
                            <input required type="tel" class="form-control" placeholder="Номер телефона" name="tel">
                        </label>
                    </div>
                    <div class="form-group d-flex align-items-center position-relative">
                        <input required type="checkbox" class="form-control" id="agree" name="agree">
                        <label for="agree" class="col-form-label">Я даю согласие на обработку моих данных</label>
                    </div>
                    <div class="form-group text-center">
                        <button class="appButton appButton-bold text-uppercase" type="submit">Оставить заявку</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
