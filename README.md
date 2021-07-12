# Livewire Async

We totally ❤️ [Livewire by Caleb Porzio](https://github.com/livewire/livewire).

It renders the components on first page load. For a good reason. But if your component uses an API, you might not want to wait for it. For Livewire this is called [Defer Loading](https://laravel-livewire.com/docs/2.x/defer-loading) and it is of course documented well.

However, if you build multiple components with this behaviour, it feels kind of repeating yourself. This is where this package comes in. It shows a loading animation on first page load and delivers the content asynchronously.

## Install

You just want to run

```bash
$ composer require 23m/livewire-async
```

That's it.

## Create component

Since this package does not come with a `make` command (yet), you can use Livewire's command.

```bash
$ php artisan livewire:make api.heroes
```

After opening your component in `app/Http/Livewire/Api/Heroes`, there are only small changes needed:

1. Your class should extend `TTM\LivewireAsync\AsyncComponent` instead of `Livewire\Component`
1. Rename the method `render` to `renderAsync`

Your component should look something like this:

```php
use TTM\LivewireAsync\AsyncComponent;

class Customer extends AsyncComponent
{
    public function renderAsync()
    {
        $heroes = Http::get('example.com/heroes')->json();
        
        return view('livewire.api.heroes', compact('heroes'));
    }
}
```

Create your view as you are used to.

And here we go: 

![Preview](https://i.imgur.com/8z9vbGS.gif)
