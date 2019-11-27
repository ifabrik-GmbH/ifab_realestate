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
        # cat=plugin.tx_ifabrealestate_ifabrealestate/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:ifab_realestate/Resources/Private/Templates/
        # cat=plugin.tx_ifabrealestate_ifabrealestate/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:ifab_realestate/Resources/Private/Partials/
        # cat=plugin.tx_ifabrealestate_ifabrealestate/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:ifab_realestate/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_ifabrealestate_ifabrealestate//a; type=string; label=Default storage PID
        storagePid =
    }
    settings {
        # cat = plugin.tx_ifabrealestate_ifabrealestates//3; type=int+; label=typeNum for AJAX call 
        typeNum = 356736 
    }
}
