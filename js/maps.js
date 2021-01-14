$(function() {
    if (window.innerWidth > 992) {
        let addresses = $('.addresses'),
            address = $('.address__item'),
            maps = $('.contacts__map');

        function hideMaps(a) {
            for (let i = a; i < maps.length; i++) {
                $(maps[i]).removeClass('show');
                $(maps[i]).addClass('hide');
            }
        }

        hideMaps(1);

        function showMap(b) {
            if ($(maps[b]).hasClass('hide')) {
                $(maps[b]).removeClass('hide');
                $(maps[b]).addClass('show');
            }
        }

        address.on('click', function (event) {
            let target = event.currentTarget;
            if (target && $(target).hasClass('address__item')) {
                for (let i = 0; i < address.length; i++) {
                    if (target == address[i]) {
                        hideMaps(0);
                        showMap(i);
                        break;
                    }
                }
            }
        });
    }
});