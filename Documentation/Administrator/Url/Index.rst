.. include:: ../../Includes.txt

====
URLs
====

.. only:: html

   .. contents::
        :local:
        :depth: 1

This section helps you to transform the extension URLs to readable ones.

config.yaml
^^^^^^^^^^^

Under your **config/sites/{sitesname}/config.yaml**

*Ajax request*

.. code-block:: yaml

	routeEnhancers:
    PageTypeSuffix:
      type: PageType
      map:
        immobilien.json: 356736

*Actions*

.. code-block:: yaml

  routeEnhancers:
    Realestate:
      type: Extbase
      extension: IfabRealestate
      plugin: Ifabrealestate
      routes:
        - { routePath: '', _controller: 'Property::list'}
        - { routePath: '{property_title}', _controller: 'Property::show', _arguments: {'property_title': 'property'} }
        - { routePath: 'searchresults', _controller: 'Property::searchResults'}
      defaultController: 'Property::list'
      defaults:
        page: ''
      requirements:
        page: '\d+'
      aspects:
        property_title:
          type: PersistedPatternMapper
          tableName: tx_ifabrealestate_domain_model_property
          routeFieldPattern: '^(?P<path_segment>.+)'
          routeFieldResult: '{path_segment}'



