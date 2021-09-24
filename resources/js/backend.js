window._ = require('lodash');

window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');

import 'bootstrap'
import 'select2'

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
