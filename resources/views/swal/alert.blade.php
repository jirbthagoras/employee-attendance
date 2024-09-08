<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript">

    swal({

        title: "{{ $title }}",

        text: "{{ $text }}",

        icon: "{{ $icon }}",

        buttons: true,

        dangerMode: true,

    })

        .then((willDelete) => {

            if (willDelete) {

                form.submit();

            }

        });



</script>
