
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"
></script>

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></>
<script src="http://parsleyjs.org/dist/parsley.js"></script>

<script>
$(document).ready( function () {
    fetchTasks();
    function fetchTasks(){

        $.ajax({
            url: '{{ route('tasks.fetchtasks') }}',
            method: 'get',
            data: {action:'fetchAll'},
            success: function(response){
                //console.log(response);
                $('#fetchAllTasksDatas').html(response);

            },
            error: function (errors) {
                console.log('Error:', errors);
            }
        });


    }


    $(document).on('click','.pageactdisbtn',function(e){
            e.preventDefault();
            //console.log($(this).attr('data-id'));
            var chnagePageId = $(this).attr('data-id');
            var changeDataVal = $(this).attr('data-val');
            var token = $('meta[name="csrf-token"]').attr('content');
            //console.log($('meta[name="csrf-token"]').attr('content'));
            /*
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            });
            */
            $.ajax({
                    url:'{{ route('tasks.taskActive') }}',
                    method: 'post',
                    data:{page_id:chnagePageId,data_val:changeDataVal,_token:'{{ csrf_token() }}'},
                    success: function(response){
                        console.log(response);
                        fetchTasks();
                    }
            });
        });

});

</script>
