<?php

namespace App\Services\Photos;

use App\Models\Photo;
use Illuminate\Support\Facades\DB;

class PhotoService
{
    /**
     * Create a new class instance.
     */
    public function storePhoto(array $data)
    {
        try {
            Db::beginTransaction();
            $newPhoto = Photo::create($data);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw new \Exception($th->getMessage());
        }
        return $newPhoto;

    }
}
