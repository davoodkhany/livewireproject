<form wire:submit.prevent="Analyes">
        <button type="submit">Analyze!</button>
        <input type="text"  placeholder="http://yoursite.com" wire:model.lazy="websiteAnalyes" required="">
</form>
