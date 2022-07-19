.. include:: ../../Includes.txt


.. _composer:

========
Composer
========

If the project is composer based, then the first step is to add the extensions on the requirements.

.. code-block:: bash

	composer req ifabrik/ifab-realestate

or in the **composer.json**

.. code-block:: json

	"require"      : {
             "typo3/minimal"           : "11.*",
             "ifabrik/ifab-realestate" : "*",
        }

.. _preparation:

===========
Preparation
===========

The extension is delivered with TypoScript, which needs to be included.

- Switch on the Template module
- Go to your root page
- Switch to the Edit the whole template record
- Switch to the Includes tab
- Choose the **ifabrik Real Estate** static template
- Save and close

