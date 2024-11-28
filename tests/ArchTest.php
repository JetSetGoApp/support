<?php

declare(strict_types=1);

arch()
    ->expect('JetSetGo\Support')
    ->toHaveMethodsDocumented()
    ->toHavePropertiesDocumented()
    ->toUseStrictTypes()
    ->not->toUse([
        'dd',
        'ddd',
        'die',
        'dump',
        'env',
        'exit',
        'ray',
    ]);

arch()->expect('JetSetGo\Support\Traits')->toBeTraits();
arch()->expect('JetSetGo\Support\Concerns')->toBeTraits();

arch()->expect('JetSetGo\Support')
    ->not->toBeEnums()
    ->ignoring('JetSetGo\Support\Enums')
    ->not->toImplement(Throwable::class)
    ->ignoring('JetSetGo\Support\Exceptions')
    ->not->toExtend('Illuminate\Database\Eloquent\Model')
    ->ignoring('JetSetGo\Support\Models')
    ->not->toExtend('Illuminate\Foundation\Http\FormRequest')
    ->ignoring('JetSetGo\Support\Http\Requests')
    ->not->toExtend('Illuminate\Console\Command')
    ->ignoring('JetSetGo\Support\Console\Commands')
    ->not->toExtend('Illuminate\Mail\Mailable')
    ->ignoring('JetSetGo\Support\Mail')
    ->not->toExtend('Illuminate\Notifications\Notification')
    ->ignoring('JetSetGo\Support\Notifications')
    ->not->toHaveSuffix('Controller')
    ->ignoring('JetSetGo\Support\Http\Controllers');

arch()->expect('JetSetGo\Support\Enums')
    ->toBeEnums()
    ->ignoring('JetSetGo\Support\Enums\Concerns');

arch()->expect('JetSetGo\Support\Features')
    ->toBeClasses()
    ->ignoring('JetSetGo\Support\Features\Concerns');

arch()->expect('JetSetGo\Support\Features')
    ->toHaveMethod('resolve');

arch()->expect('JetSetGo\Support\Exceptions')
    ->classes()
    ->toImplement('Throwable');

arch()->expect('JetSetGo\Support\Http\Middleware')
    ->classes()
    ->toHaveMethod('handle');

arch()->expect('JetSetGo\Support\Models')
    ->classes()
    ->toExtend('Illuminate\Database\Eloquent\Model')
    ->ignoring('JetSetGo\Support\Models\Scopes');

arch()->expect('JetSetGo\Support\Http\Requests')
    ->classes()
    ->toHaveSuffix('Request');

arch()->expect('JetSetGo\Support\Http\Requests')
    ->toExtend('Illuminate\Foundation\Http\FormRequest');

arch()->expect('JetSetGo\Support\Http\Requests')
    ->toHaveMethod('rules');

arch()->expect('JetSetGo\Support\Console\Commands')
    ->classes()
    ->toHaveSuffix('Command');

arch()->expect('JetSetGo\Support\Console\Commands')
    ->classes()
    ->toExtend('Illuminate\Console\Command');

arch()->expect('JetSetGo\Support\Console\Commands')
    ->classes()
    ->toHaveMethod('handle');

arch()->expect('JetSetGo\Support\Mail')
    ->classes()
    ->toExtend('Illuminate\Mail\Mailable');

arch()->expect('JetSetGo\Support\Mail')
    ->classes()
    ->toImplement('Illuminate\Contracts\Queue\ShouldQueue');

arch()->expect('JetSetGo\Support\Jobs')
    ->classes()
    ->toImplement('Illuminate\Contracts\Queue\ShouldQueue');

arch()->expect('JetSetGo\Support\Jobs')
    ->classes()
    ->toHaveMethod('handle');

arch()->expect('JetSetGo\Support\Listeners')
    ->toHaveMethod('handle');

arch()->expect('JetSetGo\Support\Notifications')
    ->toExtend('Illuminate\Notifications\Notification');

arch()->expect('JetSetGo\Support\Providers')
    ->toHaveSuffix('ServiceProvider');

arch()->expect('JetSetGo\Support\Http\Controllers')
    ->classes()
    ->toHaveSuffix('Controller');

arch()->expect('JetSetGo\Support\Http')
    ->toOnlyBeUsedIn('JetSetGo\Support\Http');

arch()->expect('JetSetGo\Support\Http\Controllers')
    ->not->toHavePublicMethodsBesides(['__construct', '__invoke', 'index', 'show', 'create', 'store', 'edit', 'update', 'destroy', 'middleware']);

arch()->expect('JetSetGo\Support\Policies')
    ->classes()
    ->toHaveSuffix('Policy');
