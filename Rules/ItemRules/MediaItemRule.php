<?php

declare(strict_types=1);

namespace Modules\Media\Rules\ItemRules;

use Illuminate\Contracts\Validation\Rule;
use Modules\Media\Models\Media;

abstract class MediaItemRule implements Rule
{
    public string $value;

    public function passes(string $attribute,string $value):bool
    {
        $this->value = $value;

        return $this->validateMediaItem();
    }

    public function getTemporaryUploadMedia(): ?Media
    {
        $temporaryUploadModelClass = config('media-library.temporary_upload_model');

        $temporaryUpload = $temporaryUploadModelClass::findByMediaUuidInCurrentSession($this->value['uuid']);

        if (! $temporaryUpload) {
            return null;
        }

        return $temporaryUpload->getFirstMedia();
    }

    abstract public function validateMediaItem(): bool;
}
