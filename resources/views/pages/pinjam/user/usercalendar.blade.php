<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-yellow-50">

        <!-- Sidebar Start -->
        <x-user-sidebar />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">

            <!-- Calendar Start -->
            <div id='calendar' class="p-4"></div>
            <!-- Calendar End -->

        </div>
        <!-- Content End -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.9/index.global.js" integrity="sha512-lU5sd0e7f59Jia30P5oEI5zC3BzVJ4ao+xRA70IIJ2UBzek4PCkPk+MTLIYwXTXGErOqjJ/rLdB3gLK0E5hD0w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
    
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: [   
                        @foreach($pinjam_tempat as $pt)
                        {
                            title: '{{ $pt->ruangan->nama_ruangan }}',
                            start: '{{ $pt->time_from }}',
                            end: '{{ $pt->time_to }}',
                        }, 
                        @endforeach
                    ],
                });
    
                calendar.render();
            });
        </script>
    </body>
</html>
