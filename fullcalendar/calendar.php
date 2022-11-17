<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Future Hope International School Calendar 2022</title>
        <!-- including Fullcalendar libs css & js -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
        <!-- include bootstrap css & js -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
                        <br />





                        <br />


                                                        <div class="container">
                                                                <h2 class="text-center text-muted fst-italic" name="h2title"><a href="" class="nav-link "></a></h2>
                                                                <div id='calendar'></div>
                                                        </div>





                  <!-- jQuery js -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <!-- jQ UI js -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
                  <!-- moment.js -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
                <!-- including Fullcalendar libs css & js -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

                <script>

                                /*
                                ! ......................................... Fullcalendar code area here  .............................................
                                */

                $(document).ready(function() {

                                        var calendar = $('#calendar').fullCalendar({
                                                editable:true,
                                                header:{
                                                                left:'prev,next today',
                                                                center:'title',
                                                                right:'month,agendaWeek,agendaDay'
                                                },
                                                navLinks: true,

                                                events:'load.php',
                                                        selectable:true,
                                                        selectHelper:true,
                                                        select:function(start, end, allDay){
                                                                var title = prompt("Enter Events Title !!!");
                                                                if(title){
                                                                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                                                                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                                                                        $.ajax({
                                                                                        url:"insert.php",
                                                                                        type:"POST",
                                                                                        data:{title:title, start:start, end:end},

                                                                                success:function(data){
                                                                                        calendar.fullCalendar('refetchEvents');
                                                                                        alert("Added Successfully !!!");
                                                                                        window.location.replace("calendar.php");
                                                                                }
                                                                        });
                                                                }
                                                        },


                                                        editable:true,
                                                        eventResize:function(event){
                                                                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                                                                        var end  = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                                                                        var title  = event.title;
                                                                        var id     = event.id;

                                                                $.ajax({

                                                                                url:"update.php",
                                                                                type:"POST",
                                                                                data:{title:title, start:start, end:end, id:id},


                                                                        success:function(){
                                                                                calendar.fullCalendar('refetchEvents');
                                                                                alert('Events are Updated !!!');
                                                                        }
                                                                });
                                                        },


                                                        eventDrop:function(event){
                                                                                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                                                                                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                                                                                        var title = event.title;
                                                                                        var id = event.id;

                                                                $.ajax({

                                                                                url:"update.php",
                                                                                type:"POST",
                                                                                data:{title:title, start:start, end:end, id:id},

                                                                        success:function(){
                                                                                        calendar.fullCalendar('refetchEvents');
                                                                                        alert("Event is Updated !");
                                                                        }
                                                                })
                                                        },


                                                        eventClick:function(event){
                                                                if(confirm("Are you sure you want to remove it?")){
                                                                        var id = event.id;
                                                                        $.ajax({

                                                                                url:"delete.php",
                                                                                type:"POST",
                                                                                data:{id:id},
                                                                                success:function(){
                                                                                        calendar.fullCalendar('refetchEvents');
                                                                                        alert("Events are Removed !!!");
                                                                                }
                                                                        });
                                                                }
                                                        }








                                        });

                 });

                </script>

 </body>
</html>
