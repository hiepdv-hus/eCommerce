<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Base\BackendController;
use App\Http\Data\Input\CustomerInput;
use App\Http\Data\Output\CustomerOutput;
use App\Libraries\Flat\Entities\CustomerEntity;
use App\Http\Models\Customer;
use App\Http\Models\Media;
use Illuminate\Http\Request;
use Exception;

class CustomerController extends BackendController
{
    public function listForm(){
        return view('admin.customer.list');
    }

    public function list(CustomerInput $input){
        try {
            $customer = new Customer();
            $customer->orderByDescending(CustomerEntity::created_time);
            $customer->loadCollection();
            $this->output->succeeded()
                ->data($customer->getCollection()->toOutput(CustomerOutput::class));

        } catch (Exception $exception){
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function addForm(){
        return view('admin.customer.add');
    }

    public function add(Request $request){
        $post = $request->all();
        try {
            $customer = new Customer();
            $customer->entity->fill($post);
            $customer->entity->is_active = 1;

            $media = new Media();
            if ($request->hasFile('media')) {
                $file = $request->file('media');
                $media->entity->name = $file->getClientOriginalName();
                $media->entity->size = $file->getSize();
                $media->entity->url = url('upload/avatar/' . $file->getClientOriginalName());
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

                $file->move(public_path('upload/avatar'), $file->getClientOriginalName());
                $media->insert();
            }
            $customer->entity->avatar = $media->entity->url;
            $customer->entity->user_create_id = $this->getCurrentUser()->entity->getId();
            $customer->entity->user_update_id = 0;
            $customer->entity->created_time = date('Y-m-d H:i:s');
            $id = $customer->insert();
            if ($id <= 0){
                throw new Exception('Lỗi thêm mới');
            }
            $this->output->succeeded('Thêm mới thành công')
                ->data([
                    'id' => $id,
                    'avatar' => $customer->entity->avatar
                ]);
        } catch (Exception $exception){
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function detail(int $id){
        return view('admin.customer.detail', ['id' => $id]);
    }

    public function updateInfomation(Request $request){
        try {
            $id = intval($request->get('id'));
            if ($id <= 0){
                throw new Exception('Invalid input');
            }
            $customer = new Customer();
            $customer->loadById($id);
            $this->output->succeeded()
                ->data((array) $customer->toOutput(CustomerOutput::class));

        } catch (Exception $exception){
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function editForm(int $id){
        return view('admin.customer.edit', ['id' => $id]);
    }

    public function getDetail(Request $request){
        try {
            $id = intval($request->get('id'));
            if ($id <= 0){
                throw new Exception('Invalid input');
            }
            $customer = new Customer();
            $customer->loadById($id);
            $this->output->succeeded()
                ->data((array) $customer->toOutput(CustomerOutput::class));

        } catch (Exception $exception){
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function update(CustomerInput $input){
        try {
                $id = intval($input->id);
                if ($id <= 0){
                    throw new Exception('Invalid input');
                }

                $customer = new Customer();
                $customer->loadById($id);

                $customer->entity->fill($input);
                $customer->update();

                $data = [
                    'id' => $input->id
                    ];
                $this->output->succeeded('Cập nhật thành công')->data($data);

        } catch (Exception $exception){
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function delete(Request $request){
        try {
            $id = $request->get('id');
            $customer = new Customer();
            $customer->loadById($id);
            $deleted = $customer->softDelete();
            if (!$deleted){
                throw new Exception('Lỗi xóa bản ghi');
            }
            $this->output->succeeded('Xóa thành công');

        } catch (Exception $exception){
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }
}
