MOBS:<br>
@inject('m','App\Mob')
@foreach ($m::all() as $m)
    {{ $m->iName }}<br>
@endforeach
