<div>
    <div style="padding-top:20px;">
        <select wire:model.live="filters.group.value">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>

    <div style="padding-top:20px;">
        <a href="/?filters[group][value]=2">Working link</a>
    </div>
    <div style="padding-top:20px;">
        <a href="/?filters%5Bgroup%5D%5Bvalue%5D=2">Url encoded link</a>
    </div>
</div>
