<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Base\BackendController;
use App\Http\Data\Input\NewsInput;
use App\Http\Data\Output\NewsOutput;
use App\Http\Models\News;
use App\Http\Models\Media;
use App\Http\Models\Category;
use App\Libraries\Flat\Entities\NewsEntity;
use Exception;
use Illuminate\Http\Request;

class NewsController extends BackendController
{
    public function listForm() {
        return view('admin.news.list');
    }

    public function list(NewsInput $input){
        try {
            $news = new News();
            $news->getDbContext()->orderByDescending(NewsEntity::created_time);
            $news->loadCollection();
            $this->output->succeeded()
                ->data($news->getCollection()->toOutput(NewsOutput::class));
        } catch (Exception $exception) {
            return $this->handleException($exception);
        }
         return $this->toRespondOk();
    }

    public function addForm() {
        return view('admin.news.add');
    }

    public function add(Request $request){
        $post = $request->all();
        try {
            $news = new News();
            $news->entity->fill($post);

            $news->entity->user_create_id = $this->getCurrentUser()->entity->getId();
            $news->entity->user_update_id = 0;

            $id = $news->insert();
            if ($id <= 0) {
                throw new Exception('Lỗi thêm mới');
            }

            $this->output->succeeded('Thêm mới thành công')
                ->data([
                    'id' => $id,
                    'media_id' => $news->entity->media_id,
                    'category_id' => $news->entity->category_id
                ]);

        } catch (Exception $exception) {
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function editForm(int $id) {
        return view('admin.news.edit', ['id' => $id]);
    }

    public function update(NewsInput $input) {
        try {
            $id = intval($input->id);
            if ($id <= 0) {
                throw new Exception('Invalid input');
            }
            $news = new News();
            $news->loadById($id);

            $news->entity->fill($input);
            $news->update();

            $data = [
                'id' => $input->id
            ];
            $this->output->succeeded('Cập nhật thành công')->data($data);

        } catch (Exception $exception) {
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function getDetail(Request $request){
        try {
            $id = intval($request->get('id'));
            if ($id < 0){
                throw new Exception('Invalid input');
            }
            $news = new News();
            $news->loadById($id);

            if (!$news->exists()) {
                throw new Exception('Không tìm thấy bản tin');
            }

            $data = (array) $news->toOutput(NewsOutput::class);

            $category = new Category();
            $category->loadById($news->entity->category_id);

            if ($category->exists()) {
                $data['category_name'] = $category->entity->name;
            }

            $this->output->succeeded()->data($data);

        } catch (Exception $exception){
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function detail(int $id){
        return view('admin.news.detail', ['id' => $id]);
    }

    public function updateInfomation(Request $request){
        try {
            $id = intval($request->get('id'));
            if ($id <= 0){
                throw new Exception('Invalid input');
            }
            $news = new News();
            $news->loadById($id);
            $this->output->succeeded()->data($news->toOutput(NewsOutput::class));
        } catch (Exception $exception){
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function delete(Request $request) {
        try {
            $id = $request->get('id');
            $news = new News();
            $news->loadById($id);
            $deleted = $news->softDelete();

            if (!$deleted){
                throw new Exception('Lỗi xóa bản ghi');
            }

            $this->output->succeeded('Xóa thành công');
        } catch (Exception $exception) {
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

}
