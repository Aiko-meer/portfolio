  {{-- sweetalert --}}
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-- Include SweetAlert Script -->
   <script>
    document.addEventListener("DOMContentLoaded", function () {
        const alert = {!! json_encode(session('alert')) !!};
  
        if (alert) {
            const { type, message } = alert;
            Swal.fire({
                icon: type,
                title: message,
                showConfirmButton: false,
                timer: 1500
            });
        }
    });
    </script>