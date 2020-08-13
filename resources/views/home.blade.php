@extends('app')
@section('section')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Versicherungsinformation</h4>
                </div>
                <div class="card-body">
                    <div class="col mb-3">
                        <form class="input-group" method="get" action="{{'/search'}}">
                            <input type="text" name="name" class="form-control" placeholder="Suchen" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    @if(count($values) > 0)
                    <table id="datatable" class="table table-sm">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th colspan='2' class="address-column">Adresse</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($values as $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->address }}</td>
                                <td class="text-right">
                                    <button class="btn btn-primary btn-view" data-toggle="modal"
                                        data-target="#modal_info" data-ins_id="{{ $value->insId }}"
                                        data-name="{{ $value->name }}" data-address="{{ $value->address }}"
                                        data-post_code="{{ $value->postCode }}" data-city="{{ $value->cityName }}"
                                        data-phone="{{ $value->conNumber }}">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </button>
                                    {{--  <button class="btn btn-dark btn-delete" data-toggle="modal"
                                        data-target="#modal_delete" data-route="{{ route('delete', $value->id)}}">
                                        löschen
                                    </button>  --}}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $values->links() }}
                    </div>
                    @else
                    <h4 class="text-center">Keine Daten gefunden</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('modal_info')

    <div id="modal_delete" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <p>Möchten Sie diese Informationen entfernen?</p>
                </div>
                <div class="modal-footer">
                    <form action="" method="post" id="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger marked_status">Ja</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nein</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('script')
    <script>
        $(document).on('click', '.btn-delete', function () {
                var attrRoute = $(this).data('route');
                $('#delete-form').attr('action', attrRoute);
            });
    </script>
    @endsection