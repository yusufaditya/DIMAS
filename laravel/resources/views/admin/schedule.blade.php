@extends('layouts.admin')

@section('title', 'DIMAS - Schedule')

@section('plugin')
<link rel="stylesheet" href="{{asset('/assets/fullcalendar/main.css')}}">
<script src="{{asset('/assets/fullCalendar/main.js')}}"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        var tanggalAwal, tanggalAkhir, id = 0, selId;
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: 'bootstrap',
            // Custom Button
            customButtons: {
                add: {
                    click: function () {
                        if (tanggalAwal != '' && tanggalAkhir != '') {
                            var eventName = prompt('Masukan Nama Event');
                            if (eventName != null && eventName != '') {
                                calendar.addEvent({
                                    id: id,
                                    title: eventName,
                                    start: tanggalAwal,
                                    end: tanggalAkhir,
                                    allday: true
                                });

                            }
                            tanggalAwal = '';
                            tanggalAkhir = '';
                            id++;
                        } else {
                            alert('Tidak ada tanggal yang dipilih');
                        }
                    },
                },
                remove: {
                    click: function () {
                        if (selId != '') {
                            var selectedEvent = calendar.getEventById(selId);
                            selectedEvent.remove();
                            alert('Anda menghapus Event "' + selectedEvent.title + '"');
                            selId = '';
                            calendarEl.getElementsByClassName('fc-remove-button')[0].setAttribute(
                                'disabled', '');
                            calendarEl.getElementsByClassName('fc-edit-button')[0].setAttribute(
                                'disabled', '');
                        } else {
                            alert('Tidak ada event yang dipilih');
                        }
                    }
                },
                edit: {
                    click: function () {
                        if (selId != '') {
                            var id = "/" + "id"; //Id Event
                            document.location.assign("{{route('/admin/schedule/id/edit')}}" + id);
                        } else {
                            alert('Tidak ada event yang dipilih');
                        }
                    }
                }
            },
            bootstrapFontAwesome: {
                remove: 'fa-trash',
                add: 'fa-plus',
                edit: 'fa-pencil'
            },
            // Header & Layout Setting
            headerToolbar: {
                start: 'prev,next',
                center: 'title',
                end: 'add edit remove'
            },
            initialView: 'dayGridMonth',
            fixedWeekCount: false,

            // Select Behaviour
            selectable: true,
            select: function (info) {
                tanggalAkhir = info.endStr;
                tanggalAwal = info.startStr;
                calendarEl.getElementsByClassName('fc-add-button')[0].removeAttribute('disabled');
            },
            unselect: function () {
                setTimeout(() => {
                    calendarEl.getElementsByClassName('fc-add-button')[0].setAttribute(
                        'disabled', '');
                }, 50);
            },

            eventClick: function (info) {
                selId = info.event.id;
                calendarEl.getElementsByClassName('fc-remove-button')[0].removeAttribute(
                    'disabled');
                calendarEl.getElementsByClassName('fc-edit-button')[0].removeAttribute('disabled');
            },

            // Drag & Drop Behaviour
            editable: true,

            eventDrop: function (info) {
                if (!confirm('Konfirmasi perubahan?')) {
                    info.revert();
                } else {
                    alert('Nama : ' + info.event.title + "\nMulai : " + info.event.start
                        .toISOString() + "\nSelesai : " + info.event.end.toISOString());
                }
            },

            eventResize: function (info) {
                if (!confirm('Konfirmasi perubahan?')) {
                    info.revert();
                } else {
                    alert('Nama : ' + info.event.title + "\nMulai : " + info.event.start
                        .toISOString() + "\nSelesai : " + info.event.end.toISOString());
                }
            }
        });
        calendar.render();
        calendarEl.getElementsByClassName('fc-add-button')[0].setAttribute('disabled', '');
        calendarEl.getElementsByClassName('fc-remove-button')[0].setAttribute('disabled', '');
        calendarEl.getElementsByClassName('fc-edit-button')[0].setAttribute('disabled', '');
    });

</script>
@endsection

@section('mainContent')
<div class="row h-auto">
    <div class="col">
        <div class="row">
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col p-5"><div id="calendar" class="bg-light p-4 rounded"></div></div>
            <div class="col-1"></div>
        </div>
    </div>
</div>
@endsection
