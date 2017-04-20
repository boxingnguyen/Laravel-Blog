<?php
/**
 * Created by PhpStorm.
 * User: QuyenAnh
 * Date: 2/20/17
 * Time: 3:34 PM
 */
namespace App\Http\Controllers;
use App\Post;
class PagesController extends Controller {
	public function getIndex() {
		/*
		 * process variable data or params
		 * talk to the model
		 * receive from the model
		 * compile or process data from the model if needed
		 * pass the data to the correct view
		 */
		$posts = Post::all();
		return redirect('/articles');
		//      return view('pages.home')->withPost($posts); // project/resources/views/pages/home.blade.php and transfer variable $post to view as $post
	}
	public function getAbout() {
		$first = "Nguyen";
		$last = "Quyen Anh";
		$full = $first . ' ' . $last;
		$email = "boxingnguyen@gmail.com";
		$fb = "https://www.facebook.com/QuyenAnh93";
		$insta = "https://www.instagram.com/boxingnguyen/";
		$data['fb'] = $fb;
		$data['insta'] = $insta;
		return view('pages.about')->with("fullname", $full)->withEmail($email)->withData($data); // send variable $full to view as $fullname
		// second way : ->withFullname($full);
	}
	public function getContact() {
		return view('pages.contact');
	}
	public function showArticle($id){
		$article = Post::find($id);
		return view('posts.article')->withArticle($article); // resources/views/posts: article.blade.php
	}
}