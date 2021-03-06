/* GLOBAL JS */
import 'babel-polyfill';

require('expose?jQuery!expose?$!jquery-2.1.4.min.js');
require('bootstrap.min.js');

require('./js/Main');

/* PHP & HTML */
require.context('./', true, /\.(php|html)$/);

/* LESS */
require('./sass/style.scss');
