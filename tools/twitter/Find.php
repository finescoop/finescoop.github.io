<?php

namespace Tools\Twitter;

use DOMDocument;
use DOMXPath;
use Tools\Twitter\Post;
use function array_push;
use function implode;
use function sleep;
use function var_dump;

class Find
{
    /**
     * Front page with latest articles
     *
     * @var string
     */
    private $uri = 'http://finescoop.com';

    /**
     * @var \Tools\Twitter\Post
     */
    private $post;

    /**
     * Find constructor.
     */
    public function __construct(
				string $TWITTER_API_KEY,
				string $TWITTER_API_SECRET,
				string $TWITTER_ACCESS_TOKEN,
				string $TWITTER_ACCESS_TOKEN_SECRET
		) {
        $this->post = new Post(
						$TWITTER_API_KEY,
						$TWITTER_API_SECRET,
						$TWITTER_ACCESS_TOKEN,
						$TWITTER_ACCESS_TOKEN_SECRET
				);
    }

    /**
     * Run the tool
     */
    public function run()
    {
        while(true) {

            // Loops through pages and post to twitter
            for($page = 1; $page < 4; $page++) {

                // Page url to scrape
                $uri = $page === 1 ? $this->uri : "{$this->uri}/{$page}/";

                // get articles
                $articles = $this->getArticles($uri);

                // loop through and check if posted
                foreach ($articles as $article) {
                    $post = "{$article['title']} {$article['uri']}";

                    // Check if already posted
                    if($this->post->check($post)) {
                        $this->post->post($post);
                        echo "Posted: {$post}";
                        sleep(450);
                    }
                }
            }
        }
    }

        /**
         * Get all the articles
         *
         * @param string $uri
         * @return array
         */
    private function getArticles(string $uri)
    {
        // Get the content
        $dom   = $this->getContent($uri);
        $xpath = new \DOMXPath($dom);

        // Loops through items, and create array of articles
        $articles = [];
        $items = $xpath->query('//*[@class="article-post"]');
        foreach ($items as $item) {
            $title       = $xpath->query('descendant::div[contains(@class, "article-title")]', $item);
            $description = $xpath->query('descendant::p[contains(@class, "article-description")]', $item);
            $article     = [
                'uri'         => $item->getAttribute("href"),
                'title'       => trim($title[0]->textContent),
                'description' => trim($description[0]->textContent),
            ];
            array_push($articles, $article);
        }

        return $articles;
    }

    /**
     * Get the html of the website
     *
     * @param string $uri
     * @return \DOMDocument
     */
    private function getContent(string $uri)
    {
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTMLFile($uri);

        return $dom;
    }
}

// Autoload scrape classes
require __DIR__ . '/../../vendor/autoload.php';

(new Find($argv[1], $argv[2], $argv[3], $argv[4]))->run();
