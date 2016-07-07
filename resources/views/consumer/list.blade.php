@extends('default')

@section('content')

    <h1>Voici la liste de vos consumer</h1>



        @foreach($list as $infos)
            <pre style="margin-top: 40px">
            <tr>
                <td class="table-text">
                    <div> Nom :{{ $infos['name'] }}</div>
                </td>
                <td class="table-text">
                    <div>Email :{{ $infos['mail'] }}</div>
                </td>
                <td class="table-text">
                    <div>Description :{{ $infos['describe'] }}</div>
                </td>
                <td>
                    <form action="{{ url('user/list/delete/'.$infos['id']) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
            </pre>
        @endforeach


@endsection
