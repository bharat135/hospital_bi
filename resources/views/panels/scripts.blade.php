<!-- BEGIN: Vendor JS-->


<script src="{{ asset(mix('vendors/js/vendors.min.js')) }}"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->

<script src="{{asset(mix('vendors/js/ui/jquery.sticky.js'))}}"></script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset(mix('js/core/app-menu.js')) }}"></script>
<script src="{{ asset(mix('js/core/app.js')) }}"></script>

<script>
  $(document).on('click', '.notification-item', function(event) {
    event.preventDefault();
    var notificationId = $(this).data('notification-id');
    axios.get('/markasread/' + notificationId)
        .then(response => {
           
            toastr['success']('Notification clear', 'Cleared!', {
                closeButton: true,
                tapToDismiss: false
            });
            loadNotifications();
        })
        .catch(error => {
            console.error('Error marking notification as read:', error);
        });
});

function loadNotifications() {
    $('#notificationdiv').load(location.href + ' #notificationdiv > *', function () {
            feather.replace();
            });
    $('#notificationlist').load(location.href + ' #notificationlist > *', function () {
         feather.replace();
        attachClickEvent();
    });
}
function attachClickEvent() {
        $('.notification-item').off('click').on('click', function(event) {
        event.preventDefault();
        var notificationId = $(this).data('notification-id');
        axios.get('/markasread/' + notificationId)
            .then(response => {
                
                toastr['success']('Notification cleared!', 'Cleared', {
                    closeButton: true,
                    tapToDismiss: false
                });
                loadNotifications();
            })
            .catch(error => {
                console.error('Error marking notification as read:', error);
            });
    });
}

$(document).ready(function() {    
    attachClickEvent();
});
</script>

<script>
    document.getElementById('markAsReadAllBtn').addEventListener('click', function (event) {
        event.preventDefault();
        
        axios.get('/markasreadall')
            .then(response => {
              console.log(response);
                      toastr['success']('All notifications cleared!', 'All cleared!', {
                      closeButton: true,
                      tapToDismiss: false
                    });
                    
                  $('#notificationdiv').load(location.href + ' #notificationdiv > *', function () {
                     
                      feather.replace();
                  });
              
            })
            .catch(error => {
                console.error('Error marking notifications as read:', error);
            });
    });
</script>

<script>
  function reloadNotificationDiv() {

    $('#notificationdiv').load(location.href + ' #notificationdiv > *', function () {
            feather.replace();
            });
    $('#notificationlist').load(location.href + ' #notificationlist > *', function () {
         feather.replace();
        attachClickEvent();
    });      

    }
    setInterval(function () {
        reloadNotificationDiv();
    }, 60000); // 30 seconds in milliseconds
</script>


<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/extensions/ext-component-toastr.js')) }}"></script>

<!-- custome scripts file for user -->
<script src="{{ asset(mix('js/core/scripts.js')) }}"></script>

@if($configData['blankPage'] === false)
<script src="{{ asset(mix('js/scripts/customizer.js')) }}"></script>

@endif
<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->

@stack('modals')
@livewireScripts
<script defer src="{{ asset(mix('vendors/js/alpinejs/alpine.js')) }}"></script>
