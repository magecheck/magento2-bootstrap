# magento2-bootstrap
MageCheck - Magento 2 Extensions
------------
This company is the start-up of supplying Magento 2 extensions to the eCommerce market, making new friends,building new e-commerce and adding value to existing online shops.

This extension covers Twitter Bootstrap 3.3.7 integration with Magento 2 platform, it is very easy to install and setup.

Requirements
------------
- Magento >= 2.0.0
- PHP >= 5.5.0

Support
-------
If you encounter any problems or bugs, please create an issue on [GitHub](https://github.com/magecheck/magento2-bootstrap/issues).

Installation
-------
Create folder named MageCheck inside app/code (app/code/MageCheck).
Create folder named Bootstrap inside app/code/MageCheck (app/code/MageCheck/Bootstrap).
Add this gitcode.

After you added the code to your app/code inside the project you open your terminal and go to your project root folder and just run the following commands:

    php bin/magento  module:enable MageCheck_Bootstrap
    bin/magento setup:upgrade
    php bin/magento cache:flush
    php bin/magento cache:clean

After this you will have to go to:

    Stores -> Configuration -> MageCheck Extensions -> Bootstrap 3
    Set the "Enabled" on the "Enable Library"
    
You can also set the "Enabled" on the "Enable Library Theme" if you wish to add the bootstrap theme also.

    php bin/magento cache:flush
    php bin/magento cache:clean

Now you are set to go!

Contribution
------------
Any contribution to the development of Magento 2 Bootstrap is highly welcome. The best possibility to provide any code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Developer
---------
 * Victor Chiriac

MageCheck Team
* Website: [https://www.magecheck.com/)
* Facebook: [@magecheck](https://www.facebook.com/magecheck/)
* Linkedin: [@magecheck](https://www.linkedin.com/company-beta/11104569/)

License
-------
[GNU General Public License, version 3 (GPLv3)](http://opensource.org/licenses/gpl-3.0)

Copyright
---------
(c) 2017 MageCheck Team
