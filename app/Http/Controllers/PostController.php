<?php
 namespace App\Http\Controllers;


 use Illuminate\Http\Request;

 use Illuminate\Support\Facades\DB;

 use Illuminate\Support\Facades\Storage;

 use Illuminate\Support\Facades\Auth;


 use App\Post;

 use App\Category;

 use App\Photo;

 use stdClass;

 //use storage;

 // 現在認証しているユーザーを取得
$user = Auth::user();

// 現在認証しているユーザーのIDを取得
$id = Auth::id();

 

class PostController extends Controller{

//  public function create(Request $request)
//   {
//     $posts = new Post;
//     $posts->name = $request->name;
//     $posts->content = $request->content;
//     $posts->saved();
//   //  $param = [
//   //   //   'title'=>$request->title,
//   //   //   'content'=>$request->content,
//   //   // ];
//   //   //   DB::table('posts')->insert($param);
//   //   return response()->json(['comments'=>$comment],200);
    
  //   return response()->json(['posts'=>$posts],200);
  // }

 public function delete(Request $request,$id)
 {
     $posts = Post::findOrFail($id);
     $posts->delete();
     return response()->json(['posts'=>$posts],200);
 }

  public function edit(Request $request,$id)
 {
    $posts = Post::find($id);
    return response()->json(['posts'=>$posts],200);
}

public function post(Request $request)
 {
    $posts = Post::all();
    return response()->json(['posts'=>$posts],200);
}
public function update(Request $request,$id)
{
     $post =new Post;
     $post = Post::find($request->id);
    // $post->id=$request->id;
     $post->name = $request->name;
     $post->content = $request->content;
     $post->save();
     return response()->json(['post'=>$post],200);

}

public function search(Request $request)
{

  $category = Category::where('id',1)->first();
//  $category = Category::where('name',$request->name)->first();

    $posts=Post::where('category_id',$category->id)->get();

    $param = ['input'=>$request->name,'posts'=>$posts];

 return response()->json($param,200);

}
public function index(Request $request)
{
  $category = Category::all();
  return response()->json(['categories'=>$category],200);
}
public function find(Request $request,$id)
{
  $posts= Post::where('category_id',$request->id)->get();

  return response()->json(['posts'=>$posts],200);
}

public function detail(Request $reques,$id)
{
  $post = Post::find($id);
  return response()->json(compact('post'),200);
}
public function use(User $user){
  $user = $user->getAllusers(auth()->user()->id);
}

// public function s3(Request $request)
//     {
//       //見やすいので事前に定義しておく
//         $disk = Storage::disk('s3');
//       //postされてきた画像
//         $image = $request->image;
//       //putFileというのは、画像を保存して、その保存したパス（バケット以下を返してくれる関数、第一引数ディレクトリ名、第二引数画像データ、第３引数公開・非公開）
//         $path = $disk->putFile('images', $image,'public');

//         //$pathには保存してあるパスが返っていることがわかる
//         //なのでデータベースに$pathを保存することで呼び出せるようになる
//         return response()->json(['response'=>$path],200);
//     }
}
 ?>