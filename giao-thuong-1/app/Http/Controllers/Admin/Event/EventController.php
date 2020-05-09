<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Base\BackendController;
use App\Http\Data\Input\EventInput;
use App\Http\Data\Output\EventOuput;
use App\Libraries\Flat\Entities\EventEntity;
use App\Http\Models\Event;
use App\Http\Models\Media;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EventController extends BackendController
{

    public function listForm()
    {
        return view('admin.event.list');
    }

    public function list(EventInput $input)
    {
        try {
            $event = new Event();
            $event->orderByDescending(EventEntity::created_time);
            $event->loadCollection();
            $this->output->succeeded()
                ->data($event->getCollection()->toOutput(EventOuput::class));
        } catch (Exception $exception) {
            return $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function addForm()
    {
        return view('admin.event.add');
    }

    public function add(Request $request)
    {
        $post = $request->all();

        try {
            $event = new Event();
            $event->entity->fill($post);

            /*$media = new Media();
            if ($request->hasFile('media')) {
                $file = $request->file('media');
                $media->entity->name = $file->getClientOriginalName();
                $media->entity->size = $file->getSize();
                $media->entity->url = url('upload/media_id/' . $file->getClientOriginalName());
                switch ($file->getClientOriginalExtension()) {
                    case 'png':
                        $media->entity->mime_type = 'image/png';
                        break;
                    case 'jpg':
                    case 'jpeg':
                        $media->entity->mime_type = 'image/jpeg';
                        break;
                    case 'gif':
                        $media->entity->mime_type = 'image/gif';
                        break;
                    default:
                        $media->entity->mime_type = 'image/jpeg';
                }

                $file->move(public_path('upload/media_id'), $file->getClientOriginalName());
                $media->insert();

            }

            $event->entity->slug = $media->entity->url;*/

            $event->entity->user_create_id = $this->getCurrentUser()->entity->getId();
            $event->entity->user_update_id = 0;

            $id = $event->insert();
            if ($id <= 0) {
                throw new Exception('Lỗi thêm mới');
            }

            $this->output->succeeded('Thêm mới thành công')
                ->data([
                    'id' => $id,
                    'media_id' => $event->entity->media_id,
                ]);
        } catch (Exception $exception) {
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function editForm(int $id){
        return view('admin.event.edit', ['id' => $id]);
    }

    public function update(EventInput $input) {
        try {
            $id = intval($input->id);

            if ($id <= 0) {
                throw new Exception('Invalid input');
            }
            $event = new Event();
            $event->loadById($id);

            $event->entity->fill($input);
            $event->update();

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
            $event = new Event();
            $event->loadById($id);

            if (!$event->exists()) {
                throw new Exception('Không tìm thấy bản tin');
            }

            $data = (array) $event->toOutput(EventOuput::class);

//            $category = new Category();
//            $category->loadById($news->entity->category_id);
//
//            if ($category->exists()) {
//                $data['category_name'] = $category->entity->name;
//            }

            $this->output->succeeded()->data($data);

        } catch (Exception $exception){
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }
}
