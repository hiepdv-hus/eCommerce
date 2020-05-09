<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Base\BackendController;
use App\Http\Data\Input\SystemUserInput;
use App\Http\Data\Output\SystemUserOutput;
use App\Http\Models\Media;
use App\Libraries\Flat\Entities\SystemUserEntity;
use App\Http\Models\SystemUser;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SystemUserController extends BackendController
{

    public function listForm()
    {
        return view('admin.system-user.list');
    }

    public function list(SystemUserInput $input)
    {
        try {
            $systemUser = new SystemUser();
            $systemUser->getDbContext()->orderByDescending(SystemUserEntity::created_time);
            $systemUser->loadCollection();
            $this->output->succeeded()
                ->data($systemUser->getCollection()->toOutput(SystemUserOutput::class));
        } catch (Exception $exception) {
            $this->output->failed($exception->getMessage());
        }

        return $this->toRespondOk();
    }

    public function addForm()
    {
        return view('admin.system-user.add');
    }

    public function updateForm(int $id)
    {
        return view('admin.system-user.update', ['id' => $id]);
    }

    public function add(SystemUserInput $input, Request $request)
    {
        try {
            if (empty($input->username)) {
                throw new Exception('Vui lòng nhập username');
            }

            $systemUser = new SystemUser();
            $systemUser->entity->fill($input);
            $systemUser->entity->password = Hash::make($input->password);
            $systemUser->entity->is_active = 1;

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

            $systemUser->entity->avatar = $media->entity->url;
            $systemUser->entity->user_create_id = $this->getCurrentUser()->entity->getId();
            $systemUser->entity->user_update_id = 0;

            $id = $systemUser->insert();

            if ($id <= 0) {
                throw new Exception('Lỗi thêm mới');
            }

            $this->output->succeeded('Thêm mới thành công')
                ->data([
                    'id' => $id,
                    'avatar' => $systemUser->entity->avatar
                ]);

        } catch (Exception $exception) {
            $this->output->failed($exception->getMessage());
        }

        return $this->toRespondOk();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        try {
            $id = $request->get('id');
            $systemUser = new SystemUser();
            $systemUser->loadById($id);
            $deleted = $systemUser->softDelete();

            if (!$deleted) {
                throw new Exception('Lỗi xóa bản ghi');
            }

            $this->output->succeeded('Xóa thành công');
        } catch (Exception $exception) {
            $this->output->failed($exception->getMessage());
        }

        return $this->toRespondOk();
    }

    public function update(SystemUserInput $input)
    {
        try {
            $id = intval($input->id);
            if ($id <= 0) {
                throw new Exception('Invalid input');
            }

            if (empty($input->username)) {
                throw new Exception('Vui lòng nhập username');
            }

            $systemUser = new SystemUser();
            $systemUser->loadById($id);

            if (!$systemUser->exists()) {
                throw new Exception('Không tìm thấy thông tin quản trị viên');
            }

            $systemUser->entity->fill($input);
            $systemUser->update();
            $data = [
                'id' => $input->id
            ];
            $this->output->succeeded('Cập nhật quản trị viên thành công')->data($data);
        } catch (Exception $exception) {
            $this->output->failed($exception->getMessage());
        }

        return $this->toRespondOk();
    }

    public function getDetail(Request $request)
    {
        try {
            $id = intval($request->get('id'));
            if ($id <= 0) {
                throw new Exception('Invalid input');
            }

            $systemUser = new SystemUser();
            $systemUser->loadById($id);

            if (!$systemUser->exists()) {
                throw new Exception('Không tìm thấy thông tin quản trị viên');
            }

            $this->output->succeeded()->data((array) $systemUser->toOutput(SystemUserOutput::class));
        } catch (Exception $exception) {
            $this->output->failed($exception->getMessage());
        }

        return $this->toRespondOk();
    }

    public function editForm(int $id){
        return view('admin.system-user.edit', ['id' => $id]);
    }

}
