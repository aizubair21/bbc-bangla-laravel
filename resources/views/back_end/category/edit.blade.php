@extends('back_end.app');
@section('content')
    <div class="container">
       <form action="{{ coute('category.update') }}" method="petch" >
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name </th>
                    <th>Slug </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                    <tr>
                        <td> {{ $item->name }} </td>
                        <td> {{ $item->slug }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       </form>
    </div>
@endsection;