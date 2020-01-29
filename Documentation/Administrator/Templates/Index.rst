
============================
Changing & editing templates
============================

EXT:ifab_realestate is using fluid as template engine. If you are used to fluid already, you might skip this section.

This documentation won’t bring you all information about fluid but only the most important things you need for using it. You can get more information in books like the one of Jochen Rau und Sebastian Kurfürst or online, e.g. at http://wiki.typo3.org/Fluid or many other sites.


Changing paths of the template
------------------------------

You should never edit the original templates of an extension as those changes will vanish if you upgrade the extension. As any extbase based extension, you can find the templates in the directory ``Resources/Private/``.

If you want to change a template, copy the desired files to the directory where you store the templates. This can be a directory in fileadmin or a custom extension. Multiple fallbacks can be defined which makes it far easier to customize the templates.

.. code-block:: typoscript

		plugin.tx_ifabrealestate_ifabrealestate {
			view {
				templateRootPaths >
				templateRootPaths {
					0 = EXT:ifab_realestate/Resources/Private/Templates/
					1 = fileadmin/Reources/PrivateExtensions/RealEstate/Templates/
                    2 = extension_key/Resources/Private/Extensions/RealEstate/Templates/
				}
				partialRootPaths >
				partialRootPaths {
					0 = EXT:ifab_realestate/Resources/Private/Partials/
					1 = fileadmin/Reources/PrivateExtensions/RealEstate/Partials/
                    2 = extension_key/Resources/Private/Extensions/RealEstate/Partials/
				}
				layoutRootPaths >
				layoutRootPaths {
					0 = EXT:ifab_realestate/Resources/Private/Layouts/
					1 = fileadmin/Reources/PrivateExtensions/RealEstate/Layouts/
                    2 = extension_key/Resources/Private/Extensions/RealEstate/Layouts/
				}
			}
		}