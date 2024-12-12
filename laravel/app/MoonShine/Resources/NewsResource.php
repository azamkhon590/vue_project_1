<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Image;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\Field;
use MoonShine\Fields\Relationships\HasOne;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Switcher; 

/**
 * @extends ModelResource<News>
 */
class NewsResource extends ModelResource
{
    protected string $model = News::class;

    protected string $title = 'News';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make("Name", "title"),
                Slug::make("SeoName", "slug")
                    ->from("title")
                    ->unique(),
                TinyMce::make("FullContent", "full_content")->required(),
                Textarea::make("ShortContent", "short_content")->required(),
                Image::make("Image", "preview_url")->dir("news"),
                BelongsTo::make("Category", "category", fn($item)=> $item-> title)->required(),
                Switcher::make("Status", "status"),
            ]),
        ];
    }

    /**
     * @param News $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
