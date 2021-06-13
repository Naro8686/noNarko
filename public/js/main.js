$(document).ready(function () {
    $('#carousel').carousel({
        interval: 15000
    });
    $('[data-count-ellipse]').each(function (key, el) {
        let ellipseBlock = $(el);
        createEllipse(ellipseBlock, ellipseBlock.data('countEllipse'))
    });
    $('[data-count-cross]').each(function (key, el) {
        let crossBlock = $(el);
        createCross(crossBlock, crossBlock.data('countCross'))
    });

    $('.carousel').carousel('pause');
    $('#modal').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let title = button.data('title');
        let btnText = button.data('btn');
        let type = button.data('type');
        let modal = $(this);
        modal.find('.modal-body textarea,.modal-body input[name="tel"]').attr('disabled', 'disabled').closest('div.form-group').hide();
        if (type === 'proposal') $('.modal-body input[name="tel"]').removeAttr('disabled').closest('div.form-group').show();
        else $('.modal-body textarea').removeAttr('disabled').closest('div.form-group').show();
        modal.find('.modal-title').text(`Оставить ${title}`);
        modal.find('.modal-body .appButton').text(`${btnText}`);
    })
    $('.faq .collapse')
        .on('show.bs.collapse', function (event) {
            $(event.currentTarget).prev().find('a').text('-\r\r');
        })
        .on('hidden.bs.collapse', function (event) {
            $(event.currentTarget).prev().find('a').text('+');
        });
    $('.flexbox #accordion .collapse')
        .on('show.bs.collapse', function (event) {
            let head = $(event.currentTarget).prev();
            let btn = head.find('button');
            rotate(btn.find('svg'), 180);
            head.addClass('active')
        })
        .on('hidden.bs.collapse', function (event) {
            let head = $(event.currentTarget).prev();
            let btn = head.find('button');
            rotate(btn.find('svg'), 0);
            head.removeClass('active')
        });

    $('form.request-form').on('submit', function (event) {
        event.preventDefault();
        let msg = $(this).find('.msg');
        msg.text("Спасибо").show();
        $(this).find('input[type="text"],textarea').val('');
        $(this).find('input[type="radio"]').prop("checked", false);
        $(this).find('input#yes').prop("checked", true);
        setTimeout(function () {
            msg.hide();
        }, 4000)
    });

    [].forEach.call(document.querySelectorAll('img[data-src]'), function (img) {
        img.setAttribute('src', img.getAttribute('data-src'));
        img.onload = function () {
            img.removeAttribute('data-src');
        };
    });
});

function createEllipse(el, count = 120) {
    let ellipse = '<div class="ellipse-item"></div>';
    for (let i = 0; i < count; i++) el.append(ellipse)
}

function createCross(el, count = 5) {
    let ellipse = '<div class="cross-item"></div>';
    for (let i = 0; i < count; i++) {
        el.prepend($(ellipse).css('--animation-time', (Math.random() + .5) + 's'))
    }
}

function rotate(el, degree) {
    // For webkit browsers: e.g. Chrome
    el.css({WebkitTransform: 'rotate(' + degree + 'deg)'});
    // For Mozilla browser: e.g. Firefox
    el.css({'-moz-transform': 'rotate(' + degree + 'deg)'});
}



