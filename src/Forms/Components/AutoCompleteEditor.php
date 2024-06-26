<?php

namespace PackiMaster\AutoComplete\Forms\Components;

use Filament\Forms\Components\RichEditor;

class AutoCompleteEditor extends RichEditor
{
    protected string $view = 'autocomplete::forms.components.auto-complete-editor';

    protected array $mentionsItems = [];

    public function mentionsItems(array $mentionsItems): static
    {
        $this->mentionsItems = $mentionsItems;

        return $this;
    }

    public function getMentionsItems(): array
    {
        return $this->mentionsItems;
    }
}
