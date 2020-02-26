<?php


namespace Ifabrik\IfabRealestate\PageTitle;


use TYPO3\CMS\Core\PageTitle\AbstractPageTitleProvider;

class RealEstatePageProvider extends  AbstractPageTitleProvider
{
    /**
     * @param string $title
     */
    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }
}
