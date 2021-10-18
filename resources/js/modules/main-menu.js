export default () => {
    const mobile_menu_trigger = document.getElementById('mobile_menu_trigger');
    const mobile_menu_close_trigger = document.getElementById('mobile_menu_close_trigger');

    if (mobile_menu_trigger) {
        mobile_menu_trigger.addEventListener('click', () => document.body.classList.add('overflow-hidden'));
    }

    if (mobile_menu_close_trigger) {
        mobile_menu_close_trigger.addEventListener('click', () => document.body.classList.remove('overflow-hidden'));
    }
}
