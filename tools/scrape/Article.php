<?php

namespace Tools\Scrape;

use Mockery\Exception;
use function date;
use function date_default_timezone_set;
use function file_get_contents;
use function libxml_use_internal_errors;
use function var_dump;

class Article
{
	/**
     * Build the article array
     *
     * @param \SimpleXMLElement $item
     * @param array $feed
     * @return array
     */
    public function build(\SimpleXMLElement $item, array $feed)
    {
    		// set the current time
				date_default_timezone_set('Europe/London');

				// Get the page content and set the xpath
        $content 		 = $this->getPageContent($item->{$feed['items']['link']});
        $xpath   		 = new \DOMXPath($content);
        $currentTime = date("Y-m-d-H-i-s");

				return [
            'date'        => $currentTime,
            'category'    => $feed['category'],
            'title'       => (string) $this->safeString($item->{$feed['items']['title']}),
            'description' => (string) $this->safeString($item->{$feed['items']['description']}),
            'body'        => $this->getArticleBody($xpath),
            'image'       => $this->getArticleImage($xpath),
        ];
    }

    /**
     * Get the page contents
     *
     * @param string $uri
     * @return \DOMDocument
     */
    private function getPageContent(string $uri)
    {
        // Remove whitespace
        $uri = trim($uri);

        // Create the document
				$doc  = new \DOMDocument();

        // Get the html and load it to dom
				try {
						$html = file_get_contents($uri);
						libxml_use_internal_errors(true);
						$doc->loadHTML($html);

						return $doc;
				} catch (\Exception $e) {
						return $doc;
				}
    }


    /**
     * Get the article
     *
     * @param \DOMXPath $xpath
     * @return mixed
     */
    private function getArticleBody(\DOMXPath $xpath)
    {
        // Search dom for the article div
        $query = "//*[@itemprop=\"articleBody\"]//p";
        $entry = $xpath->query($query);
				$html = '';

				// Return the article
				foreach($entry as $p) {
					$html .= $p->textContent . "\n\n";
				}

				return $html;
    }

    /**
     * Get the article image
     *
     * @param \DOMXPath $xpath
     * @return string
     */
    private function getArticleImage(\DOMXPath $xpath)
    {
        return $xpath->query("//meta[@property='og:image']")[0]
                ->getAttribute("content")
            ?? '/assets/images/breaking.jpg';
    }

    /**
     * Remove any colons for the markdown
     *
     * @param string $string
     * @return string
     */
    public function safeString(string $string)
    {
				return str_replace([':', '*', "'", '#', '"', "\r\n", "\r", "\n"], '', trim($string));
    }
}
