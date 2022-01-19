<?php

namespace Tools\Scrape;

use function array_push;
use function get_class;
use function get_resource_type;
use function simplexml_load_file;
use function trim;
use function var_dump;

class Scrape
{

    /**
     * RSS Feeds
     * @var array
     */
    public $feeds = [
        [
            'image'    => '//meta[@property=\'og:image\']',
            'content'  => '//*[@id=\'js-article-text\']/div[2]',
            'items'    => [
                'channel'     => 'channel',
                'item'        => 'item',
                'link'        => 'link',
                'title'       => 'title',
                'description' => 'description',
            ],
						'uri' => [
								[ 'category' => 'latest', 'link' => 'https://www.dailymail.co.uk/articles.rss' ],
								[ 'category' => 'sports', 'link' => 'https://www.dailymail.co.uk/sport/index.rss' ],
								[ 'category' => 'health', 'link' => 'https://www.dailymail.co.uk/health/index.rss' ],
								[ 'category' => 'science', 'link' => 'https://www.dailymail.co.uk/sciencetech/index.rss' ],
								[ 'category' => 'business', 'link' => 'https://www.dailymail.co.uk/money/index.rss' ],
								[ 'category' => 'tv', 'link' => 'https://www.dailymail.co.uk/tvshowbiz/index.rss' ],
								[ 'category' => 'world', 'link' => 'https://www.dailymail.co.uk/news/worldnews/index.rss' ],
								[ 'category' => 'travel', 'link' => 'https://www.dailymail.co.uk/travel/index.rss' ],
								[ 'category' => 'female', 'link' => 'https://www.dailymail.co.uk/femail/index.rss' ],
								[ 'category' => 'news', 'link' => 'https://www.dailymail.co.uk/news/index.rss' ],
								[ 'category' => 'usa', 'link' => 'https://www.dailymail.co.uk/ushome/index.rss' ],
						]
				],
				[
						'image'    => '//meta[@property=\'og:image\']',
						'content'  => '//article',
						'items'    => [
								'channel'     => 'channel',
								'item'        => 'item',
								'link'        => 'link',
								'title'       => 'title',
								'description' => 'description',
						],
						'uri' => [
								[ 'category' => 'politics', 'link' => 'http://feeds.bbci.co.uk/news/video_and_audio/politics/rss.xml' ],
						]
				],
    ];

    /**
     * @var \Tools\Scrape\Article
     */
    private $article;

    /**
     * @var \Tools\Scrape\Markdown
     */
    private $markdown;

    /**
     * @var \Tools\Scrape\Feed
     */
    private $feed;

    /**
     * Scrape constructor.
     */
    public function __construct()
    {
        $this->article  = new Article();
        $this->markdown = new Markdown();
        $this->feed     = new Feed();
    }

		/**
		 * Run the scraper
		 */
    public function parseRssFeed()
    {
		// Loop through rss feeds
		foreach ($this->feeds as $feed) {

			// loop through each website's RSS feed
			foreach($feed['uri'] as $url) {
				// Get the rss feed
				$rss = simplexml_load_file($url['link']);

				foreach ($rss->{$feed['items']['channel']}
						->{$feed['items']['item']}
				as $item) 
				{
					// Add the category to the feed
					$feed['category'] = $url['category'];

					// Make sure it doesn't already exist
					$title = $this->article->safeString($item->{$feed['items']['title']});
					if(!$this->markdown->articleExists($title)) {
						
						// Build the article array
						$article = $this->article->build($item, $feed);

						// So I know what article I am on
						print "[{$url['category']}]: " . trim($item->{$feed['items']['title']}) . "\n";

						$this->markdown->save($article);
					}
				}
//				$output = shell_exec('git add .; git commit -m \'articles\'; git push origin HEAD');
			}
		}
    }
}

// Autoload scrape classes
require __DIR__ . '/../../vendor/autoload.php';

(new Scrape())->parseRssFeed();
