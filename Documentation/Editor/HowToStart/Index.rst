.. include:: ../../Includes.txt

============
How to start
============

This walkthrough will help you to implement the extension ifab_realestate at your TYPO3 site.

.. _createRecords:

Create records
--------------

In order to get the properties displayed, data must be created.

- Create a sysfolder and switch to the list module.
- On the upper left corner click the "+" button and search for the **ifabrik Real Estate** list.
- Before you create a property, add the necessary data. For example, create an address before adding a property.
- If the property data is completed and all the information are in place, enable the **Property release** under the Management tab in order to show it in the FrontEnd.

.. _addPlugin:

Add a view to a page
----------------------

A plugin is used to render a defined selection of records in the FrontEnd. Follow these steps to add a plugin respectively for detail- and list-view to a page:

Detail page
^^^^^^^^^^^
- Create a new page “Detail” which will be used to show the full property record. Insert the plugin **ifabrik Real Estate**. The 2nd tab “Plugin” is used to configure the extension.
- Make sure that on the first dropwdown field the **ifabrik Real Estate** is selected.
- Under the Plugin options and the 'View Mode' select the **Detail view**

List page
^^^^^^^^^
- Create a new page “List” which will be used to show a list of the created properties. Insert the plugin **ifabrik Real Estate**. The 2nd tab “Plugin” is used to configure the extension.
- Make sure that on the first dropwdown field the **ifabrik Real Estate** is selected.
- Under the Plugin options and the 'View Mode' select the **List view**
- On the **Detail view** field, select the detail view page.

Search results page
^^^^^^^^^^^^^^^^^^^
- Create a new page “Search results” which will be used to show a list of properties with specific search parameters. Insert the plugin **ifabrik Real Estate**. The 2nd tab “Plugin” is used to configure the extension.
- Make sure that on the first dropwdown field the **ifabrik Real Estate** is selected.
- Under the Plugin options and the 'View Mode' select the **Search results view**
- On the **Detail view** field, select the detail view page.

Search page
^^^^^^^^^^^
- Create a new page “Search” which will be used to show a form. Insert the plugin **ifabrik Real Estate**. The 2nd tab “Plugin” is used to configure the extension.
- Make sure that on the first dropwdown field the **ifabrik Real Estate** is selected.
- Under the Plugin options and the 'View Mode' select the **Search view**
- On the **Search results** field, select the search results' view page.

