<?php

// ///////////////////
// Class to represent
// a News Item
// ///////////////////
class PLNewsItem
{

    // -------CLASS FIELDS------------------
    public $heading;

    public $summary;

    public $link;

    public $linktext;

    // -------CONSTRUCTORS------------------
    public function __construct($pheading = "Default Heading", $psummary = "Default Summary", $plink = "#", $plinktext = "More..")
    {
        $this->heading = $pheading;
        $this->summary = $psummary;
        $this->link = $plink;
        $this->linktext = $plinktext;
    }

    // -------METHODS-----------------------
    public function getHTML()
    {
        $tnewsitem = <<<NI
	    <section class="list-group-item">
			<h4 class="list-group-item-heading">{$this->heading}</h4>
			<p class="list-group-item-text">{$this->summary}</p>
			<a class="btn btn-xs btn-default" href="{$this->link}">{$this->linktext}</a>
		</section>
NI;
        return $tnewsitem;
    }
}

class PLNewsList
{

    public $newsitems = array();

    public function __construct()
    {
        $this->newsitems[] = new PLNewsItem();
        $this->newsitems[] = new PLNewsItem();
        $this->newsitems[] = new PLNewsItem();
        $this->newsitems[] = new PLNewsItem();
        $this->newsitems[] = new PLNewsItem();
    }
}

?>