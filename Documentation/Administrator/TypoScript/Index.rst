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
  recursive_                           Recursive                              Function       int
  detailPid_                           Detail view (Page-ID)                  Function       int
  listPid_                             List view (Page-ID)                    Function       int
  searchResultsPid_                    Search results (Page-ID)               Function       int
  limit_                               Max items                              Options        int
  hidePagination_                      Hide pagination                        Options        boolean
  `list.paginate.itemsPerPage`_        Items per Page                         Options        int
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

Meta tag settings
-----------------

The meta tags configuration starts with:   :typoscript:`plugin.tx_ifabrealestate_ifabrealestate.settings.metatags`

Properties
^^^^^^^^^^
.. container:: ts-properties

  ==================================== ========================================= ===============
  Property                             Title                                     Type
  ==================================== ========================================= ===============
  `image.dimensions.width`_            The width of the image to be shared       string
  `image.dimensions.height`_           The height of the image to be shared      string
  general_                             All the general meta tags                 array
  facebook_                            All the facebook meta tags (og:type)      array
  twitter_                             All the twitter meta tags (twitter:card)  array
  ==================================== ====================================== ===============

.. _tsImageDimensionsWidth:

image.dimensions.width
""""""""""""""""""""""""""
.. container:: table-row

   Property
         image.dimensions.width
   Data type
         string
   Description
        :typoscript:`plugin.tx_ifabrealestate_ifabrealestate.settings.metatags.image.dimensions.width = 1000`

         Define the width of the image that is to be shared.

.. _tsImageDimensionsHeight:

image.dimensions.height
""""""""""""""""""""""""""
.. container:: table-row

   Property
         image.dimensions.height
   Data type
         string
   Description
        :typoscript:`plugin.tx_ifabrealestate_ifabrealestate.settings.metatags.image.dimensions.height = 500c-100`

         Define the height of the image that is to be shared.

.. _tsGeneral:

general
""""""""""""""""""""""""""
.. container:: table-row

   Property
         general
   Data type
         array
   Description
        .. code-block:: typoscript

            plugin.tx_ifabrealestate_ifabrealestate.settings.metatags.general {
                author = ifabrik GmbH, info@ifabrik.de
                copyright = ifabrik GmbH
                designer =  ifabrik GmbH
                Classification = Product
                robots = index, follow
            }

        An associative array which takes the general html static meta tags and add them on the detail view.

        .. note:: The author, copyright, designer etc are the actual meta tag properties, so as a result.
                  :html:`<meta name="author" content="ifabrik GmbH, info@ifabrik.de">`

.. _tsFacebook:

facebook
""""""""""""""""""""""""""
.. container:: table-row

   Property
         facebook
   Data type
         array
   Description
        .. code-block:: typoscript

            plugin.tx_ifabrealestate_ifabrealestate.settings.metatags.facebook {
                og:type = og:product
					      og:site_name = ifabrik GmbH
					      og:email = info@ifabrik.de
            }

        An associative array which takes the facebook static meta tags and add them on the detail view.

        .. note:: The og:type, og:site_name, og:email etc are the actual meta tag properties, so as a result.
                  :html:`<meta property="og:site_name" content="ifabrik GmbH">`


.. _tsTwitter:

twitter
""""""""""""""""""""""""""
.. container:: table-row

   Property
         twitter
   Data type
         array
   Description
        .. code-block:: typoscript

            plugin.tx_ifabrealestate_ifabrealestate.settings.metatags.twitter {
                twitter:card = summary_large_image
                twitter:site = @ifabrik
                twitter:creator = @ifabrik
            }

        An associative array which takes the facebook static meta tags and add them on the detail view.

        .. note:: The twitter:card, twitter:site, twitter:creator etc are the actual meta tag properties, so as a result.
                  :html:`<meta name="twitter:site" content="@ifabrik">`