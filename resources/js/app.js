import 'alpinejs'
window._ = require('lodash')
import maps from './modules/maps'
import mainMenu from './modules/main-menu'
import sliders from "./modules/sliders"
import search from "./modules/search"
import PerfectScrollbar from 'perfect-scrollbar'
import 'perfect-scrollbar/css/perfect-scrollbar.css'

maps()
mainMenu()
sliders()
search()

if (document.getElementById('prices_procedures')) {
    new PerfectScrollbar('#prices_procedures');
}
