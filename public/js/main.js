var searches = {};
$(document).ready(function () {
    lazyLoad();
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
        let desc = button.data('desc');
        let url = button.data('url');
        let btnText = button.data('btn');
        let type = button.data('type');
        let modal = $(this);
        modal.find('.modal-body textarea,.modal-body input[name="tel"]').attr('disabled', 'disabled').closest('div.form-group').hide();
        if (type === 'proposal') $('.modal-body input[name="tel"]').removeAttr('disabled').closest('div.form-group').show();
        else $('.modal-body textarea').removeAttr('disabled').closest('div.form-group').show();
        modal.find('.modal-title').text(`${title ?? ''}`);
        modal.find('.modal-desc').html(`${desc ?? ''}`);
        modal.find('.modal-body form').attr('action', url);
        modal.find('.modal-body .appButton').text(btnText);
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
            head.addClass('active')
        })
        .on('hidden.bs.collapse', function (event) {
            let head = $(event.currentTarget).prev();
            head.removeClass('active')
        });

    $('form.request-form').on('submit', function (event) {
        event.preventDefault();
        let form = this;
        let msg = $(form).find('.msg');
        $(form).find(`input, textarea`).removeClass('is-invalid')
        $(form).find('.invalid-feedback').remove();
        $.post($(form).attr('action'), $(form).serialize())
            .done(function (data) {
                form.reset();
                msg.text("Спасибо").show();
            })
            .fail(function (data) {
                if (data.status === 422) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $(form).find(`input[name=${key}], textarea[name=${key}]`)
                            .addClass('is-invalid')
                            .after(`<div class="invalid-feedback">${value.join()}</div>`);
                    });
                }
                msg.text("Ошибка").show();
            })
            .always(function () {
                setTimeout(function () {
                    msg.hide();
                }, 4000)
            });
    });
    $('.modal form').on('submit', function (event) {
        event.preventDefault();
        let form = this;
        $(form).find(`input, textarea`).removeClass('is-invalid')
        $(form).find('.invalid-feedback').remove();
        $.post($(form).attr('action'), $(form).serialize())
            .done(function (data) {
                form.reset();
                $(form).closest('.modal').modal('hide');
            })
            .fail(function (data) {
                if (data.status === 422) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $(form).find(`input[name=${key}], textarea[name=${key}]`)
                            .addClass('is-invalid')
                            .after(`<div class="invalid-feedback position-absolute bottom--15">${value.join()}</div>`);
                    });
                }
            })
    });
    $('.proposal form').on('submit', function (event) {
        event.preventDefault();
        let form = this;
        $(form).find('input[name="tel"]')
            .removeClass('is-invalid')
            .removeClass('is-valid')
        $(form).find('.invalid-feedback,.valid-feedback').remove();
        $.post($(form).attr('action'), $(form).serialize())
            .done(function () {
                form.reset();
                $(form).find('input[name="tel"]')
                    .addClass('is-valid')
                    .after('<div class="valid-feedback position-absolute text-center">Спасибо</div>');
                setTimeout(function () {
                    $(form).find('input[name="tel"]').removeClass('is-valid')
                    $(form).find('.valid-feedback').remove();
                }, 4000);
            })
            .fail(function (data) {
                if (data.status === 422) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $(form).find(`input[name=${key}], textarea[name=${key}]`)
                            .addClass('is-invalid')
                            .after(`<div class="invalid-feedback position-absolute">${value.join()}</div>`);
                    });
                }
            })
    });
    let timer = null;
    $("input[name='q']").on("keyup", function () {
        let container = $('.search-list');
        let q = $.trim($(this).val().toLowerCase());
        if (!q.length) {
            container.addClass('close');
            return true;
        }
        if (timer) clearTimeout(timer);
        timer = setTimeout(function () {
            container.removeClass('close');
            if (q.length) $.get('/search', {q: q})
                .done((data) => {
                    if (data.success) container.removeClass('close');
                    else container.addClass('close');
                    container.html(data.html);
                });
        }, 500);
    });

    $(".abc-search input[name='search']").on("keyup", function () {
        filterCategory($(this).val());
    });
    $('.abc-navigation > a').on('click', function (e) {
        e.preventDefault();
        filterCategory($(this).text());
    });
    $('.select_box > select[name="category_id"]').on('change', function (e) {
        let ids = [];
        let id = parseInt(this.value);
        let parent = $(this).attr('id');
        if (isNaN(id)) delete searches[parent]
        else searches[parent] = {id: id};
        for (const [, value] of Object.entries(searches)) {
            ids.push(value.id);
        }
        $.get(window.location.pathname, {ids: ids})
            .done((data) => {
                if (data.success) $('#carousel-posts').html(data.html)
            })
            .always(lazyLoad)
    });
    $(document).mouseup(function (e) {
        let container = $(".search-list:not(.close):not(.search-list-mob)");
        let input = container.prev('input[name="q"]');
        if (container.length && (container.has(e.target).length === 0 || input.has(e.target).length === 0)) {
            container.addClass('close');
        }
    });
});

function createEllipse(el, count = 120) {
    let ellipse = '<div class="ellipse-item"></div>';
    for (let i = 0; i < count; i++) el.append(ellipse);
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

function objectifyForm(formArray) {
    let returnArray = {};
    for (let i = 0; i < formArray.length; i++) {
        returnArray[formArray[i]['name']] = formArray[i]['value'];
    }
    return returnArray;
}

function filterCategory(text) {
    $("#accordion.service-categories .collapse a").filter(function () {
        let match = ($(this).text().toLowerCase().indexOf(text.toLowerCase()) > -1);
        let collapse = $(this).closest('.collapse');
        collapse
            .prev('.card-header')
            .removeClass('active')
            .addClass(match ? 'active' : '');
        collapse
            .removeClass('show')
            .addClass(match ? 'show' : '');
    });
}

function arrayExists(match, array = []) {
    let BreakException = {};
    try {
        array.forEach(function (value) {
            if (value === match) throw BreakException;
        });
    } catch (e) {
        if (e !== BreakException) throw e;
        return true;
    }
    return false;
}

function lazyLoad() {
    [].forEach.call(document.querySelectorAll('img[data-src]'), function (img) {
        img.setAttribute('src', img.getAttribute('data-src'));
        img.onload = function () {
            img.removeAttribute('data-src');
        };
    });
}



