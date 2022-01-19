<?php

namespace Tools\Scrape;

use function file_exists;
use function file_put_contents;
use function var_dump;

class Markdown
{
    /**
     * Location of markdown
     *
     * @var string
     */
    private $location = __DIR__ . '/../../source/_posts/';

		/**
		 * Check if the article exists
		 * @param string $title
		 * @return string
		 */
    public function articleExists(string $title): string
		{
				$location = "{$this->location}/{$this->name($title)}.md";

				if (file_exists($location)) {
						return true;
				}

				return false;
		}

    /**
     * Save the article as a markdown
     *
     * @param array $article
     */
    public function save(array $article)
    {
        $location = "{$this->location}/{$this->name($article['title'])}.md";

        // create markdown
        $markdown = $this->generate($article);

        if(!$this->articleExists($article['title'])) {
						file_put_contents($location, $markdown);
				}
    }

    /**
     * Create markdown from article
     *
     * @param array $article
     * @return string
     */
    private function generate(array $article)
    {

        $client = new \GuzzleHttp\Client();

        $options = [
            'headers' => [
                'Host' => 'spinbot-back.azurewebsites.net',
                'Connection' => 'keep-alive',
                'Accept' => 'application/json, text/plain, */*',
                'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36',
                'Content-Type' => 'application/json;charset=UTF-8',
                'Sec-GPC' => 1,
                'Origin' => 'https://spinbot.com',
                'Sec-Fetch-Site' => 'cross-site',
                'Sec-Fetch-Mode' => 'cors',
                'Sec-Fetch-Dest' => 'empty',
                'Referer' => 'https://spinbot.com/',
                'Accept-Encoding' => 'gzip, deflate, br',
                'Accept-Language' => 'en-GB,en-US;q=0.9,en;q=0.8',
            ],
            'json' => [
                'text' => $article['title'],
                'x_spin_cap_words' => false
            ]
        ];

        $res = $client->request('POST', 'https://spinbot-back.azurewebsites.net/spin/rewrite-text', $options);

        $title = json_decode($res->getBody()->getContents());

        // transliterator_list_ids


        $options = [
            'headers' => [
                'Host' => 'spinbot-back.azurewebsites.net',
                'Connection' => 'keep-alive',
                'Accept' => 'application/json, text/plain, */*',
                'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36',
                'Content-Type' => 'application/json;charset=UTF-8',
                'Sec-GPC' => 1,
                'Origin' => 'https://spinbot.com',
                'Sec-Fetch-Site' => 'cross-site',
                'Sec-Fetch-Mode' => 'cors',
                'Sec-Fetch-Dest' => 'empty',
                'Referer' => 'https://spinbot.com/',
                'Accept-Encoding' => 'gzip, deflate, br',
                'Accept-Language' => 'en-GB,en-US;q=0.9,en;q=0.8',
            ],
            'json' => [
                'text' => $article['body'],
                'x_spin_cap_words' => false
            ]
        ];

        $res = $client->request('POST', 'https://spinbot-back.azurewebsites.net/spin/rewrite-text', $options);

        $body = json_decode($res->getBody()->getContents());

        // $body = substr($body, 1, -1); 

        // print_r(explode("\n\n", $body));

        // exit;

        return
            "---\n" .
            "extends: _layouts.post\n" .
            "section: content\n" .
            "image: {$article['image']} \n" .
            "title: {$title} \n" .
            "description: {$title} \n" .
            "date: {$article['date']} \n" .
            "categories: [latest, {$article['category']}] \n" .
            "featured: true \n" .
            "--- \n" .
            "{$body}";
    }

    /**
     * Create a file name from the title
     *
     * @param string $title
     * @return string
     */
    private function name(string $title)
    {
        // replace white space with under score
        $concat = str_replace(' ', '_', $title);

        // alphanumeric and underscores only
        $safeTitle = preg_replace('/\W/', '', $concat);

        return strtolower($safeTitle);
    }
}