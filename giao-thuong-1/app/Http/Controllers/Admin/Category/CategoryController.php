<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Base\BackendController;
use App\Http\Data\Input\CategoryInput;
use App\Http\Data\Output\CategoryOutput;
use App\Http\Models\Category;
use App\Libraries\Flat\Entities\CategoryEntity;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends BackendController
{
    public function listNewsForm(){
        return view('admin.category.list_news');
    }

    public function listNews(CategoryInput $input){
        try {
            $category = new Category();
            $category->getDbContext()->orderByDescending(CategoryEntity::created_time);
            $category->loadCollection();
            $this->output->succeeded()
                ->data($category->getCollection()->toOutput(CategoryOutput::class));

        } catch (Exception $exception){
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function addForm(){
        return view('admin.category.add');
    }

    public function add(Request $request){
        $post = $request->all();
        try {
            $category = new Category();
            $category->entity->fill($post);
            $category->entity->is_active = 1;
            $category->entity->user_create_id = $this->getCurrentUser()->entity->getId();
            $category->entity->user_update_id = 0;

            $id = $category->insert();
            $data = [
                'id' => $id
            ];
            $this->output->succeeded('Thêm mới thành công')->data($data);
        } catch (Exception $exception){
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }
}
