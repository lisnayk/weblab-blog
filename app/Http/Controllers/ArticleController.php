<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Category;
use App\Models\Status;
use App\Models\Tag;
use App\Repositories\ArticleRepository;
use Flash;
use Illuminate\Http\Request;
use Response;

class ArticleController extends AppBaseController
{
    /** @var  ArticleRepository */
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepo)
    {
        $this->articleRepository = $articleRepo;
        $this->middleware(["auth"],['except' => ['publicIndex']]);
    }

    /**
     * Display a listing of the Article.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $articles = $this->articleRepository->paginate(25);

        return view('articles.index')
            ->with('articles', $articles);
    }
    /**
     * Display a listing of the Article.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function publicIndex(Request $request)
    {
        $articles = $this->articleRepository->paginate(25);

        return view('articles.public_index')
            ->with('articles', $articles);
    }

    /**
     * Show the form for creating a new Article.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        $statuses = Status::all();
        $tags = Tag::all();

        $categories = Category::all(["id", "name"]);
        $c = [];
        foreach ($categories as $item) {
            $c[$item->id] = $item->name;
        }
        $statuses = Status::all();
        $tags = Tag::all();
        $t = [];
        foreach ($tags as $item) {
            $t[$item->id] = $item->name;
        }


        return view('articles.create')
            ->with('categories', $c)
            ->with("statuses", $statuses)
            ->with("tags", $t);

    }

    /**
     * Store a newly created Article in storage.
     *
     * @param CreateArticleRequest $request
     *
     * @return Response
     */
    public function store(CreateArticleRequest $request)
    {
        $input = $request->all();

        $article = $this->articleRepository->create($input);
        $article->tags()->sync($request->get("tags", []));
        Flash::success('Article saved successfully.');

        return redirect(route('articles.index'));
    }

    /**
     * Display the specified Article.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $article = $this->articleRepository->find($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified Article.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $article = $this->articleRepository->find($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        $categories = Category::all(["id", "name"]);
        $c = [];
        foreach ($categories as $item) {
            $c[$item->id] = $item->name;
        }

        $statuses = Status::all();
        $tags = Tag::all();
        $t = [];
        foreach ($tags as $item) {
            $t[$item->id] = $item->name;
        }


        return view('articles.edit')
            ->with('article', $article)
            ->with('categories', $c)
            ->with("statuses", $statuses)
            ->with("tags", $t);
    }

    /**
     * Update the specified Article in storage.
     *
     * @param int $id
     * @param UpdateArticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticleRequest $request)
    {
        $article = $this->articleRepository->find($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }


        $article = $this->articleRepository->update($request->all(), $id);
        $article->tags()->sync($request->get("tags", []));

        Flash::success('Article updated successfully.');

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified Article from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        $article = $this->articleRepository->find($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        $this->articleRepository->delete($id);

        Flash::success('Article deleted successfully.');

        return redirect(route('articles.index'));
    }
}
