
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
