.. include:: ../../Includes.txt


.. _screenshots:

===========
Screenshots
===========

**Ajax search**

.. figure:: ../../Images/ajaxSearch.png
    :class: with-shadow
    :width: 80%
    :alt: Ajax search

**List view**

.. figure:: ../../Images/list.png
    :class: with-shadow
    :width: 80%
    :alt: List view

**Detail view**

.. figure:: ../../Images/show.png
    :class: with-shadow
    :width: 80%
    :alt: Show view

**BackEnd**

.. figure:: ../../Images/backend.png
    :class: with-shadow
    :width: 80%
    :alt: Backend

**Examples**

.. figure:: ../../Images/examples.png
    :class: with-shadow
    :width: 80%
    :alt: Examples

**Image groups**

The extension uses the OpenImmo structure. OpenImmo defines groups for each image to make the usage of the image easier.
You can name the groups as you like. It makes it easier if you want for example to get the **property layout** and display
it on another section of the page.

.. figure:: ../../Images/group2.png
    :class: with-shadow
    :width: 80%
    :alt: Group 2

.. figure:: ../../Images/group1.png
    :class: with-shadow
    :width: 80%
    :alt: Group 1

Now you can do something like that:

.. code-block:: html

  <f:for each="{property.attachmentsRel}" as="attachment" iteration="iterator">
    <f:for each="{attachment.attachmentGroupValueRel}" as="groupValue">
      <f:if condition="{groupValue.value} == 'Grundriss'">
        <f:image image="{attachment.file}"/>
      </f:if>
    </f:for>
  </f:for>