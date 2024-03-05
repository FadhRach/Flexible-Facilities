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

        <h1 class="ml-4 font-semibold text-yellow-800 text-2xl">CALENDAR</h1>


        <div class="inline-flex rounded-md shadow-sm p-4" role="group">
            <button type="button" id="prev"
                class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-s-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                prev
            </button>
            <button type="button" id="today"
                class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                today
            </button>
            <button type="button" id="next"
                class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-e-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                next
            </button>
        </div>




        <!-- Calendar Start -->
        <div id='calendar' class="p-2 max-w-full w-full"></div>
        <!-- Calendar End -->

    </div>
    <!-- Content End -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: '',
                    center: 'title',
                    right: '',
                },

                initialView: 'dayGridMonth',
                events: [
                    @foreach ($pinjam_tempat as $pt)
                        {
                            title: '{{ $pt->ruangan->nama_ruangan }}',
                            start: '{{ $pt->time_from }}',
                            end: '{{ $pt->time_to }}',
                        },
                    @endforeach
                ],
            });

            calendar.render();

            document.getElementById('next').addEventListener('click', function() {
                calendar.next();
            });

            document.getElementById('prev').addEventListener('click', function() {
                calendar.prev();
            });

            document.getElementById('today').addEventListener('click', function() {
                calendar.today();
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
</body>

</html>
