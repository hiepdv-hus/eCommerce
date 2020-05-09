<?php

namespace App\Http\Controllers\Admin\Media;

use App\Http\Controllers\Base\BackendController;
use App\Http\Data\Input\MediaInput;
use App\Http\Data\Output\MediaOutput;
use App\Http\Models\Media;
use App\Libraries\Flat\Entities\MediaEntity;
use Exception;
use Illuminate\Http\Request;

/**
 * Class MediaController
 * @package App\Http\Controllers
 */
class MediaController extends BackendController
{
    public function listForm()
    {
        return view('admin.media.list');
    }

    /**
     * Get list media
     * @param MediaInput $input
     * @return \Illuminate\Http\JsonResponse
     */
    public function list(MediaInput $input)
    {
        try {
            $media = new Media();
            $media->getDbContext()->orderByDescending(MediaEntity::primary_key);
            $media->loadCollection(abs($input->skip),12);
            $this->output->recordsTotal = $media->getRecordsTotal();
            $this->output->succeeded()
                ->data($media->getCollection()->toOutput(MediaOutput::class));
        } catch (Exception $exception) {
            $this->output->failed($exception->getMessage());
        }
        return $this->toRespondOk();
    }

    public function upload(Request $request)
    {
        $post = $request->all();
        try
        {
            $media = new Media();
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $media->entity->name = $file->getClientOriginalName();
                $media->entity->size = $file->getSize();
                $media->entity->url = url('upload/images/' . $file->getClientOriginalName());
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

                $file->move(public_path('upload/images'), $file->getClientOriginalName());

            }

            $id = $media->insert();
            if ($id <= 0) {
                throw new Exception('Lỗi thêm mới ảnh');
            }

            $this->output->succeeded('Thêm mới ảnh thành công')
                ->data($media->toArray());
        } catch (Exception $exception)
        {
            $this->output->failed($exception->getMessage());
        }

        return $this->toRespondOk();
    }

    public function delete(Request $request){
        try {
            $id = $request->get('id');
            $media = new Media();
            $media->loadById($id);
            $deleted = $media->softDelete();

            if (!$deleted) {
                throw new Exception('Lỗi xóa bản ghi');
            }

            $this->output->succeeded('Xóa thành công');
        } catch (Exception $exception) {
            $this->output->failed($exception->getMessage());
        }

        return $this->toRespondOk();
    }
}
