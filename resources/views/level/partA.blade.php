@extends('layouts.layout')
@section('contenido')

    {{--@foreach($quest as $a)--}}
    {{--    <div>{{$a->question}}</div>--}}
    {{--@endforeach--}}

    <h4>Pregunta 1</h4>
    <br>
    <div>{{$quest->question}}</div>


    <br>
    <br>
    <form id="save_coupon_club">
        @csrf
        <div class="mt-3">
            <div class="radio">
                <div class="form-check">
                    <input type="radio" name="type_value" value="1" id="flexRadioDefault1" checked="">
                    <label class="form-check-label" for="flexRadioDefault1">Si</label>
                </div>
                <br>
                <div class="form-check">
                    <input type="radio" name="type_value" value="0" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">No</label>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary btn-block col-md-2 mb-4">Confirmar</button>
        </div>

    </form>

    <script>

        $('.checkbox-select-product').change(function () {
            var input_switch = $(this).is(":checked")
            if (input_switch) {
                $('#is_general').show()
            } else {
                $('#is_general').hide()
            }
            console.log('input_switch', input_switch)
        })

        $('#save_coupon_club').find(`input[name="type_value"]`).change(function () {
            var type_value = $(this).val()
            console.log('type_value', type_value)
        })

        function get_data() {
            var data = $('#save_coupon_club').serializeArray().reduce(function (obj, item) {
                obj[item.name] = item.value;
                return obj;
            }, {});

            var type_value = data.type_value ?? 0
            if (type_value == '0') {
                data.type_value = 0;
            } else if (type_value == '1') {
                data.type_value = 1;
            }

            console.log('data', data)
            return data;
        }

        $("#save_coupon_club").on('submit', function (event) {
            event.preventDefault()
            get_data();
            confirmation()
        })

        function confirmation() {
            if(true){
                $.ajax({
                    type: 'POST',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: `{{ url("1") }}`,  //web->post Rout
                    data: get_data(),

                    success: function (response) {

                        var data = $('#save_coupon_club').serializeArray().reduce(function (obj, item) {
                            obj[item.name] = item.value;
                            return obj;
                        }, {});

                        console.log('data', data.type_value)


                        if (data.type_value == "1") {
                            console.log('SI')

                            window.location.href = `{{ url("2") }}`
                        } else {
                            console.log("NO")
                            window.location.href = `{{ url("3") }}`
                        }

                    }, error(e) {
                        console.log('error', e)

                    }
                })
            }
        }

    </script>
@endsection