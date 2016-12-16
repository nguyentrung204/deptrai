<?php 

namespace App\Http\Controllers;

use App\Models\Post;
use Input;
use Redirect;
use Auth;
use Response;

/**
 * @Author: NNTrung
 * @Date: 21/8/2015
 */
class PostController extends Controller  {
	
	public function get(){
		$posts = Post::with('User')->get();
		// Post::limit(30)->offset(30)->get();
		$db_data = array();
		foreach($posts as $key => $post){
            $obj = new \stdClass();
			$obj->post_id = $post->id;
			$obj->post_title = $post->title;
			$obj->post_img = $post->image_link;
			$obj->post_user = $post->user->name;
			$obj->post_user_img = $post->user->photo;
			$db_data[] = $obj;
        };
		$response = array(
            'status' => 'success',
            'list' => $db_data
        );
        return Response::json( $response );
    }
	
	public function view($id){
		$post = Post::find($id);
		if (isset($post)) {
			$data = array(
				'post_id'	    => $post->id,
				'post_title'    => $post->title,
			    'post_content'  => $post->content,
				'post_date'     => $post->created_at->format('d - m, Y'),
				'post_user'     => $post->user->name,
				'post_user_img' => $post->user->photo
            );
			return view('post.view', $data);
		}
		return view('errors.404');
    }
	
	public function edit($id = null){
		if (is_null($id)) {
			return view('post.edit');
		}
    }
	
	public function save($id = null){
		$postType = Input::get('postType');
		$title = Input::get('title');
		$imageLink = Input::get('imageLink');
		$youtubeLink = Input::get('youtubeLink');
		$mp3Link = Input::get('mp3Link');
		$postLink = Input::get('postLink');
		$description = Input::get('description');
		$content = Input::get('content');
		
		$post = new Post;
		
		$data = array();
		if (Auth::check()){
			$data = Auth::user();
		}
		
		if (!is_null($id)) {
			$post = Post::find($id);
		} else {
			$post->created_user = $data->id;
		}
		
		$post->updated_user = $data->id;
		$post->title = $title;
		$post->image_link = $imageLink;
		$post->type = $postType;
		$post->youtube_link = $youtubeLink;
		$post->mp3_link = $mp3Link;
		$post->post_link = $postLink;
		$post->description = $description;
		$post->content = $content;
		
		
		
		
		$post->save();
		
		
		
		return Redirect::to('/post'); 
    }
}
