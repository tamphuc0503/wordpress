<?php
/*
Plugin Name: Gen AI Post Creator
Description: Plugin to create posts from an API request.
Version: 1.0
Author: Your Name
*/

if (!defined('ABSPATH')) {
    exit;
}

class GenAIPlugin {
    public function __construct() {
        add_action('rest_api_init', array($this, 'register_gen_ai_endpoint'));
    }

    public function register_gen_ai_endpoint() {
        register_rest_route('gen-ai/v1', '/create', array(
            'methods' => 'POST',
            'callback' => array($this, 'handle_post_creation'),
            'permission_callback' => '__return_true', // Modify this for security
        ));
    }

    public function handle_post_creation(WP_REST_Request $request) {
        $params = $request->get_json_params();

        if (isset($params['title'], $params['body'], $params['meta'])) {
             
    
            $post_id = wp_insert_post(array(
                'post_title' => sanitize_text_field($params['title']),
                'post_content' => wp_kses_post($params['body']),
                'post_status' => $params['post_status'] ?? 'publish',
                'post_type' => 'post',
            ));

            if (!is_wp_error($post_id)) {
		update_post_meta($post_id, '_chang_ai', true);
                                    
                if (isset($params['image']) && $params['image']) {
                    $this->download_and_attach_image($params['image'], $post_id);    
                } else {
					try {
						$featureImageUrl = getFirstImageUrl($params['title']);
						if ($featureImageUrl) {
							 $this->download_and_attach_image($featureImageUrl, $post_id);   
						}
					} catch (Exception $e) {
						echo 'Caught exception: ',  $e->getMessage(), "\n";
					}
				}
                
                if (isset($params['category_id']) && !empty( $params['category_id'] )) {
                   wp_set_post_terms( $post_id, array( (int) $params['category_id'] ), 'category' );
                }
                
                $meta_title = sanitize_text_field($params['meta']['title']);
                $meta_description = sanitize_text_field($params['meta']['description']);
                
                $meta_keyword = sanitize_text_field($params['keyword']);
                
                if (is_plugin_active('seo-by-rank-math/rank-math.php')) {
                    if ($meta_title) {
                        update_post_meta($post_id, 'rank_math_title', $meta_title);
                    }
            
                    if ($meta_description) {
                        update_post_meta($post_id, 'rank_math_description', $meta_description);
                    }
                    
                    if ($meta_keyword) {
                        update_post_meta($post_id, 'rank_math_focus_keyword', $meta_keyword);
                    }
                }
                
                if (is_plugin_active('wordpress-seo/wp-seo.php')) {
                    if ($meta_title) {
                        update_post_meta($post_id, '_yoast_wpseo_title', $meta_title);
                    }
            
                    if ($meta_description) {
                        update_post_meta($post_id, '_yoast_wpseo_metadesc', $meta_description);
                    }
                    if ($meta_keyword) {
                        update_post_meta($post_id, '_yoast_wpseo_focuskw', $meta_keyword);
                    }
                }
                
                
                return new WP_REST_Response(array('status' => 'success', 'post_id' => $post_id, 'post_url' => get_permalink($post_id)), 200);
            } else {
                return new WP_REST_Response(array('status' => 'error', 'message' => 'Failed to create post'), 500);
            }
        }

        return new WP_REST_Response(array('status' => 'error', 'message' => 'Invalid data'), 400);
    }

    private function download_and_attach_image($image_url, $post_id) {
        require_once(ABSPATH . 'wp-admin/includes/file.php');
        require_once(ABSPATH . 'wp-admin/includes/media.php');
        require_once(ABSPATH . 'wp-admin/includes/image.php');

        $tmp = download_url($image_url);

        if (is_wp_error($tmp)) {
            return;
        }

        $file_array = array(
            'name' => basename($image_url),
            'tmp_name' => $tmp,
        );

        $id = media_handle_sideload($file_array, $post_id);

        if (is_wp_error($id)) {
            @unlink($tmp);
        } else {
            set_post_thumbnail($post_id, $id);
        }
    }
	
	/**
		100 requests  / 60s
	*/
	private function getFirstImageUrl($keyword, $apiKey = '47041128-e45338000e8df3a6bc4b39423') {
		// URL của API Pixabay
        $url = "https://pixabay.com/api/?key=$apiKey&q=" . urlencode($keyword) . "&image_type=photo&per_page=3";
		
		// Gửi yêu cầu GET
		$response = $this->fetchContent($url);
		
		// Kiểm tra nếu có phản hồi
		if ($response !== FALSE) {
			$data = json_decode($response, true);
			
			// Kiểm tra nếu có kết quả hình ảnh
			if (isset($data['hits']) && count($data['hits']) > 0) {
				// Lấy URL của ảnh đầu tiên
				$firstImageUrl = $data['hits'][0]['webformatURL'];
				return $firstImageUrl;
			} else {
				return null;
			}
		} else {
			return null;
		}
	}

    
    private function fetchContent($url) {

        // Khởi tạo cURL
        $ch = curl_init($url);

        // Thiết lập tùy chọn cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Nhận kết quả trả về dưới dạng chuỗi
        curl_setopt($ch, CURLOPT_HTTPGET, true); // Thiết lập phương thức GET

        // Bỏ qua kiểm tra SSL
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Bỏ qua kiểm tra chứng chỉ SSL
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // Bỏ qua kiểm tra tên miền SSL

        // Thực thi yêu cầu và lưu trữ kết quả
        $response = curl_exec($ch);

        // Kiểm tra lỗi
        if(curl_errno($ch)) {
            return curl_error($ch);
        } 

        curl_close($ch);

        return $response;
    }

}


new GenAIPlugin();
