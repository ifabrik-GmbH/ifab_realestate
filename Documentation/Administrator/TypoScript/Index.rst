===========
TypoScript
===========

All TypoScript configuration starts with:   :typoscript:`plugin.tx_ifabrealestate_ifabrealestate.`

This page is divided into the following sections which are all configurable by using TypoScript:

.. only:: html

   .. contents::
        :local:
        :depth: 1

Plugin settings
---------------
This section covers all settings, which can be defined in the plugin itself.

Properties
^^^^^^^^^^

.. container:: ts-properties

	==================================== ====================================== ============== ===============
	Property                             Title                                  Sheet          Type
	==================================== ====================================== ============== ===============
	recursive_                            Recursive                             Function        int
	detailPid_                            Detail view (Page-ID)                 Function        int
	listPid_                              List view (Page-ID)                   Function        int
    searchResultsPid_                     Search results (Page-ID)              Function        int
	limit_                                Max items                             Options         int
	hidePagination_                       Hide pagination                       Options         boolean
	`list.paginate.itemsPerPage`_         Items per Page                        Options         int
	==================================== ====================================== ============== ===============

.. _tsRecursive:

recursive
"""""""""
.. container:: table-row

   Property
         recursive
   Data type
         int
   Description
         :typoscript:`plugin.tx_ifabrealestate_ifabrealestate.settings.recursive = 5`

         The search for pages as startingpoint can be extended by setting a recursive level.

.. _tsDetailPid:

detailPid
"""""""""
.. container:: table-row

   Property
         detailPid
   Data type
         int
   Description
         :typoscript:`plugin.tx_ifabrealestate_ifabrealestate.settings.detailPid = 12`

         This page is uses as target for the detail view. If nothing set, the current page is used.

.. _tsListPid:

listPid
"""""""
.. container:: table-row

   Property
         listPid
   Data type
         int
   Description
         :typoscript:`plugin.tx_ifabrealestate_ifabrealestate.settings.listPid = 12`

         This page is uses as target for the listings, e.g. the list view and the Search form.

.. _tsSearchResultsPid_:

searchResultsPid
""""""""""""""""
.. container:: table-row

   Property
         searchResultsPid
   Data type
         int
   Description
         :typoscript:`plugin.tx_ifabrealestate_ifabrealestate.settings.searchResultsPid = 12`

         This page is uses as target for the search results.

.. _tsLimit:

limit
"""""
.. container:: table-row

   Property
         limit
   Data type
         int
   Description
         :typoscript:`plugin.tx_ifabrealestate_ifabrealestate.settings.list.limit = 10`

         Define the maximum records shown.

        .. note:: This setting is activated only if the pagination is not enabled.

.. _tsHidePagination:

hidePagination
""""""""""""""
.. container:: table-row

   Property
         hidePagination
   Data type
         boolean
   Description
        :typoscript:`plugin.tx_ifabrealestate_ifabrealestate.settings.list.hidePagination = 1`

         If defined, the pagination is not shown.

.. _tsListPaginateItemsPerPage:

list.paginate.itemsPerPage
""""""""""""""""""""""""""
.. container:: table-row

   Property
         list.paginate.itemsPerPage
   Data type
         int
   Description
        :typoscript:`plugin.tx_ifabrealestate_ifabrealestate.settings.list.paginate.itemsPerPage = 5`

         Define the amount of properties items shown per page in the pagination.

General settings
----------------

Properties
^^^^^^^^^^

.. container:: ts-properties

	==================================== ===============
	Property                             Type
	==================================== ===============
	typeNum_                              int
    ==================================== ===============

.. _tsTypeNum:

typeNum
"""""""
.. container:: table-row

   Property
         typeNum
   Data type
         int
   Description
         :typoscript:`plugin.tx_ifabrealestate_ifabrealestate.settings.typeNum = 3657353`

         The page type for the ajax call to get the amount of the search results.
