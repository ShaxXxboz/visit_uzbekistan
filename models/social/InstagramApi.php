<?php
/**
 A class for retrieving data from Instagram
 */

namespace app\models\social;


class InstagramApi extends SocialApi
{
    private $access_token;

    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * @return array
     * function which retrieves images from users account
     */

    public function getGallery($limit = 5)
    {
        $url = "https://api.instagram.com/v1/users/self/media/recent?access_token=$this->access_token";

        $all_result = $this->processURL($url);

        $decoded_results = json_decode($all_result, true);

        if ($decoded_results['data']) {
            foreach ($decoded_results['data'] as $item) {
                if ($item['carousel_media']) {
                    foreach ($item['carousel_media'] as $carousel_item) {
                        $gallery[] = [
                            'url' => $carousel_item['images']['standard_resolution']['url']
                        ];
                    }
                } else {
                    $gallery[] = [
                        'url' => $item['images']['standard_resolution']['url']
                    ];
                }
            }

            return $gallery;
        }

        return [];
    }
}