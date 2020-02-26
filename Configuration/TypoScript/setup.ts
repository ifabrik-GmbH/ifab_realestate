/**
* License: This file is part of the package ifabrik/ifab_realestate.
* For the full copyright and license information, please read the
* license file that was distributed with this source code.
*
* @copyright concept & creation by ifabrik.de, Leipzig
* @author    Aristeidis Karavas
*/

plugin.tx_ifabrealestate_ifabrealestate {
    view {
        templateRootPaths.0 = EXT:{extension.extensionKey}/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_ifabrealestate_ifabrealestate.view.templateRootPath}
        partialRootPaths.0 = EXT:ifab_realestate/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_ifabrealestate_ifabrealestate.view.partialRootPath}
        layoutRootPaths.0 = EXT:ifab_realestate/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_ifabrealestate_ifabrealestate.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_ifabrealestate_ifabrealestate.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        callDefaultActionIfActionCantBeResolved = 1
    }
    settings {
        typeNum = 356736
    }
}

// PAGE object for Ajax call:
ajaxRealEstate_page = PAGE
ajaxRealEstate_page {
    typeNum = 356736

    config {
        disableAllHeaderCode = 1
        additionalHeaders = Content-type:application/json
        xhtml_cleaning = 0
        debug = 0
        no_cache = 1
        admPanel = 0
    }
    10 < tt_content.list.20.ifabrealestate_ifabrealestate
}
page.includeJSFooter {
    ajaxRealEstateResults = EXT:ifab_realestate/Resources/Public/JavaScript/main.js
}

config.pageTitleProviders {
    ifabrikRealEstate {
        provider = Ifabrik\IfabRealestate\PageTitle\RealEstatePageProvider
        before = altPageTitle
    }

