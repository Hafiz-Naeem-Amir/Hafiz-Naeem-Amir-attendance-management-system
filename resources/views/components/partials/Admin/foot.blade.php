<!-- Base JS -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>

<!-- Plugin JS -->
<script src="{{ asset('attendance_system/assets/assets/plugins/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('attendance_system/assets/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Common JS -->
<script src="{{ asset('attendance_system/assets/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('attendance_system/assets/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('attendance_system/assets/assets/js/misc.js') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.4.1/dist/alpine.min.js" defer></script>

<!-- Livewire -->
<script src="{{ asset('attendance_system/assets/livewire/livewire.js') }}" data-turbolinks-eval="false"></script>
<script data-turbolinks-eval="false">
    if (window.livewire) {
        console.warn("Livewire: It looks like Livewire's scripts are already loaded.");
    }
    window.livewire = new Livewire();
    window.livewire_app_url = 'https://www.kingpabel.com/attendance-management-system';
    window.livewire_token = '{{ csrf_token() }}';
    window.deferLoadingAlpine = function(callback) {
        window.addEventListener('livewire:load', function() {
            callback();
        });
    };
    document.addEventListener("DOMContentLoaded", function() {
        window.livewire.start();
    });
    var firstTime = true;
    document.addEventListener("turbolinks:load", function() {
        if (firstTime) {
            firstTime = false;
            return;
        }
        window.livewire.restart();
    });
    document.addEventListener("turbolinks:before-cache", function() {
        document.querySelectorAll('[wire\\:id]').forEach(function(el) {
            const component = el.__livewire;
            const dataObject = {
                data: component.data
                , events: component.events
                , children: component.children
                , checksum: component.checksum
                , locale: component.locale
                , name: component.name
                , errorBag: component.errorBag
                , redirectTo: component.redirectTo
            , };
            el.setAttribute('wire:initial-data', JSON.stringify(dataObject));
        });
    });

</script>

<!-- Toastr notifications -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    window.livewire.on('toastrNoti', param => {
        toastr[param['type']](param['message'], '', {
            progressBar: true
        });
    });

</script>

<!-- Flatpickr -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/themes/material_blue.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.js"></script>
<script>
    flatpickr(".datepicker", {
        mode: 'range'
        , dateFormat: "F j, Y"
        , onClose: function(selectedDates, dateStr, instance) {
            if ('December 14, 2025 to January 13, 2026' != dateStr) {
                if (dateStr.includes('to')) {
                    window.livewire.find('68WKlA7tgi9JLqOn1oex').set('dateRange', dateStr)
                } else {
                    instance.setDate('December 14, 2025 to January 13, 2026'.split(' to '));
                    window.livewire.find('68WKlA7tgi9JLqOn1oex').set('dateRange', 'December 14, 2025 to January 13, 2026');
                }
            }
        }
    });

</script>

<!-- Dashboard JS -->
<script src="{{ asset('attendance_system/assets/assets/js/dashboard.js') }}"></script>

<!-- Axios -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
