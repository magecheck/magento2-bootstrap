/**
 * Copyright © 2017 MageCheck - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */

var config = {
    paths: {
        /* Minified library */
        "jquery.bootstrap": "MageCheck_Bootstrap::bootstrap-3.3.7/js/bootstrap.min.js"
    },
    shim: {
        'jquery.bootstrap': {
            'deps': ['jquery']
        }
    }
};