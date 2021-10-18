export default () => {
    const swiper_container_hero = document.querySelectorAll('.swiper_container_hero');
    const swiper_container_facts = document.querySelectorAll('.swiper_container_facts');
    const swiper_container_paslaugos = document.querySelectorAll('.swiper_container_procedures');
    const swiper_container_feedback = document.querySelectorAll('.swiper_container_feedback');

    if (swiper_container_feedback.length) {
        new Swiper('.swiper_container_feedback', {
            spaceBetween: 16,
            navigation: {
                nextEl: '.swiper-container-feedback-navigation .swiper-button-next',
                prevEl: '.swiper-container-feedback-navigation .swiper-button-prev',
            },
            pagination: {
                el: '.swiper-feedback-pagination',
                clickable: true,
            },
        });
    }

    if (swiper_container_paslaugos.length) {
        const paslaugos_swiper = () => new Swiper('.swiper_container_procedures', {
            slidesPerView: 1,
            slidesPerColumn: 2,
            spaceBetween: 16,
            navigation: {
                nextEl: '.swiper-container-procedures-navigation .swiper-button-next',
                prevEl: '.swiper-container-procedures-navigation .swiper-button-prev',
            },
            breakpoints: {
                400: {
                    slidesPerView: 2,
                },
                730: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 4,
                },
            },
        });

        paslaugos_swiper();

        const reinit = _.debounce(() => {
            paslaugos_swiper();
        }, 500);

        window.addEventListener('resize', reinit);
    }

    if (swiper_container_hero.length) {
        new Swiper('.swiper_container_hero', {
            navigation: {
                nextEl: '.swiper-container-hero-navigation .swiper-button-next',
                prevEl: '.swiper-container-hero-navigation .swiper-button-prev',
            },
        });
    }

    if (swiper_container_facts.length) {
        new Swiper('.swiper_container_facts', {
            slidesPerView: 1,
            spaceBetween: 16,
            navigation: {
                nextEl: '.swiper-container-facts-navigation .swiper-button-next',
                prevEl: '.swiper-container-facts-navigation .swiper-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 2,
                },
            },
        });
    }
}
