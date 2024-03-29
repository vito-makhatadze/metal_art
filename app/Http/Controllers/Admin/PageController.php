<?php
/**
 *  app/Http/Controllers/Admin/PageController.php
 *
 * User: 
 * Date-Time: 04.12.20
 * Time: 13:34
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.modules.page.index', compact('pages', $pages));
    }

    public function update(Request $request,Page $page)
    {
        if ($request->isMethod('GET')) {
            return view('admin.modules.page.update', compact('page', $page));
        }
        if ($request->isMethod('POST')) {
            $request->all();
            $this->validate($request, [
                'slug' => 'required',
                'title_ge' => 'required',
                'title_en' => 'required',
                'title_ru' => 'required',
                'description_ge' => 'required',
                'description_en' => 'required',
                'description_ru' => 'required',
                'meta_title_ge' => 'required',
                'meta_title_en' => 'required',
                'meta_title_ru' => 'required',
                'content_ge' => 'required',
                'content_en' => 'required',
                'content_ru' => 'required',
            ]);
            $page->title_ge = $request->title_ge;
            $page->title_en = $request->title_en;
            $page->title_ru = $request->title_ru;
            $page->meta_title_ge = $request->meta_title_ge;
            $page->meta_title_en = $request->meta_title_en;
            $page->meta_title_ru = $request->meta_title_ru;
            $page->description_ge = $request->description_ge;
            $page->description_en = $request->description_en;
            $page->description_ru = $request->description_ru;
            $page->content_ge = $request->content_ge;
            $page->content_en = $request->content_en;
            $page->content_ru = $request->content_ru;
            $page->save();
            return redirect('admin/pages')->with('success', 'ფეიჯი წარმატებით რედაქტირდა.');

        }
    }

    public function activate($id) {
        $where = array('id' => $id);
        $page = Page::where($where)->first();
        $message = ($page->status) ? 'ფეიჯი დეაქტივირებულია.' : 'ფეიჯი გააქტიურდა.';
        $page->status = !$page->status;
        $page->save();
        return redirect('admin/pages')->with('success', $message);
    }
}
