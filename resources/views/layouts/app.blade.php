@include('layouts.header')

<body class="layout-fluid">
    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900"> --}}
    <div class="page">
        @include('layouts.sidebar')
        <!-- Page Content -->
        <main class="page-wrapper">
            @include('layouts.navigation')

            @yield('content')
        </main>
    </div>

    @include('layouts.footer')
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    
    <script>
        $(document).ready(function(){
            $("#search").on("keyup", function(){
                let val = $(this).val();
                $.ajax({
                    type:'POST',
                    url:'/search_domain',
                    data:{val:val},
                    success:function(data) {
                        console.log(data);
                        $("#msg").html(data.msg);
                    }
                });
               
            })

        });

        $("#search").on("keyup", function(){
            let val = $(this).val();

        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

fetch('http://127.0.0.1:8000/search_domain', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': token
    },
    data:{val:val},
    body: JSON.stringify(data) // Replace yourData with your actual data object
})
.then(response => {
    console.log(response);
})
.catch(error => {
    // Handle error here
});

});
   
    </script>


  