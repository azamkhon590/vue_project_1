<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

use MoonShine\Fields\Text;
use MoonShine\Fields\Email;
use MoonShine\Fields\Json;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Contact>
 */
class ContactResource extends ModelResource
{
    protected string $model = Contact::class;

    public function getActiveActions(): array
    {
        return ['view', 'update'];
    }

    protected string $title = 'Contacts';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make("Телефон", "phone")->mask("+7 (999) 999 99-99"),
                Email::make("Почта", "email"),
                Text::make("Адрес", "address"),
                Text::make("Время начала", "time_start")->mask("99:99"),
                Text::make("Время конца", "time_end")->mask("99:99"),
                Json::make("Соцсети", "social_links")->fields([
                    Text::make("Название", "name"),
                    Text::make("Ссылка", "link"),
                ])->hideOnIndex(),
                Textarea::make("Карта", "map_iframe")->hideOnIndex(),
            ]),
        ];
    }

    /**
     * @param Contact $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
