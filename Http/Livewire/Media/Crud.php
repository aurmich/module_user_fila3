<?php

declare(strict_types=1);

namespace Modules\Media\Http\Livewire\Media;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Modules\Media\Models\Media;
use Modules\Media\Models\TemporaryUpload;
use Modules\Media\Traits\WithMedia;
use Modules\Xot\Actions\GetViewAction;
use Spatie\MediaLibrary\HasMedia;

class Crud extends Component
{
    use WithMedia;

    public string $name;

    public HasMedia $model;
    /**
     * @var array<string>
     */
    public $mediaComponentNames = ['upload'];

    /**
     * @var array
     */
    public $upload;

    public string $collection;

    public function mount(string $name, HasMedia $hasMedia, string $collection): void
    {
        $this->name = $name;
        $this->model = $hasMedia;
        $this->collection = $collection;
    }

    public function submit(): void
    {
        $order = 1;
        foreach ($this->upload as $attachment) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ++$order;
=======
            $order++;
>>>>>>> 49d7c0c (first)
=======
            $order++;
>>>>>>> master
=======
            ++$order;
>>>>>>> ed2c51e (Check & fix styling)
=======
            $order++;
>>>>>>> 0d0c96c (Dusting)
=======
            ++$order;
>>>>>>> a4cf9d3 (Check & fix styling)
=======
            $order++;
>>>>>>> ca4973d (Dusting)
=======
            ++$order;
>>>>>>> 93f1e9f (Check & fix styling)
=======
            $order++;
>>>>>>> cafc8d1 (Dusting)
=======
            ++$order;
>>>>>>> c47cbe6 (Check & fix styling)
            $temporaryUpload = TemporaryUpload::findByMediaUuidInCurrentSession($attachment['uuid']);
            if ($temporaryUpload instanceof TemporaryUpload) {
                // $media = $temporaryUpload->getFirstMedia();
                $media = $temporaryUpload->moveMedia($this->model, $this->collection, '', $attachment['fileName']);
            } else {
                $media = Media::findByUuid($attachment['uuid']);
                // $media->update(['order_column'=>$order]);
                // dddx(['media'=>$media,'order'=>$order]);
            }
            $media?->update(['order_column' => $order]);
        }
        session()->flash('message', 'Post successfully updated.');
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();

        return view($view);
    }
}
